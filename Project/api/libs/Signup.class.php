<?php

// include("../verify.php");

//------------------including the notes framework-------------------------------------------------------------------------------
require_once(realpath(dirname(__FILE__)) . "/Folder.class.php");
//------------------End ofincluding the notes framework-------------------------------------------------------------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . "/../WorkSpaceConfiguration/vendor/autoload.php";
class Signup
{
    private $username;
    private $password;
    private $email;
    private $db;
    public $id;
    public $token;

    public function __construct($username, $password, $email)
    {
        $this->db = Database::getConnection();
        //--------------------------------------------------
        $this->username = $username;
        $this->email = $email;
        $this->password = $this->gen_pass_hash($password);
        $this->token = $this->gen_token();
        //--------------------------------------------------
        if ($this->userExists()) {
            throw new Exception("Can't signup, user already exists");
        } else {
            $this->signup();
        }
    }

    public function userExists()
    {
        $db = $this->db = Database::getConnection();
        //--------------------------------------------------
        $username = $this->username;
        //--------------------------------------------------
        $query = "SELECT * FROM `API` WHERE `username` = '$username'";
        $result = $db->query($query);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function signup()
    {
        $query = "INSERT INTO `API` (`username`, `password`, `email_address`, `active`, `token`)
                  VALUES ('$this->username', '$this->password', '$this->email', '0', '$this->token')";

        $email = $this->email;
        $token = $this->token;
        $result = $this->db->query($query);
        if ($result) {
            $this->id = mysqli_insert_id($this->db);
            //------------------creating the default folder-------------------------------------------------------------------------------
            $ismailSent = $this->sendverificationEmail($email, $token);
            if (!$ismailSent) {
                throw new Exception("Unable to send verification email");
            } else {
                $folder = new Folder();
                session_start();
                $_SESSION['username'] = $this->username;
                $folder->createNew("Default Folder");
                return true;
            }
            //------------------End of creating the default folder-------------------------------------------------------------------------------
        } else {
            throw new Exception("Unable to signup");
        }
    }

    public function gen_token()
    {
        $token = bin2hex(random_bytes(32));
        return $token;
    }

    public function InsertID()
    {
        return $this->id;
    }


    public function gen_pass_hash($password)
    {
        $cost_amount = [
            'cost' => 10
        ];
        //-----------------------
        $hash = password_hash($password, PASSWORD_BCRYPT, $cost_amount);
        return $hash;
    }


    private function sendverificationEmail($email_account, $token)
    {
        try {
            $config = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/../WorkSpaceConfiguration/env.json");
            $config = json_decode($config, true);
            $sendgrid_api_key = $config['sendgrid_api_key'];
            $host_email = $config['mail_acc'];
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom($host_email, "Authentication API");
            $email->setSubject("Verify Your Email !");
            $email->addTo($email_account, "Notes App");
            $email->addContent(
                "text/html",
                "<body>
                <div class='card'>
                    <h1>Hii, $this->username</h1>
                    <p>Please verify your email by clicking the link below:</p>
                    <a href='https://restapi.praveenms.live/api/verify?token=$token'>Verify Email</a>
                </div>
            </body>"
            );
            $sendgrid = new \SendGrid($sendgrid_api_key);
            $response = $sendgrid->send($email);
            $statusCode = $response->statusCode();
            if ($statusCode == 202) {  
                return true;
            } else { 
                return false;
            }
        } catch (Exception $e) {
            throw new Exception("Unable to send verification email, Error: " . $e->getMessage());
        }
    }




    public static function verifyEmail($token)
    {
        $db = Database::getConnection();
        $query = "SELECT * FROM `API` WHERE `token` = '$token'";
        $result = $db->query($query);
        if ($result->num_rows > 0) {
            if ($result->fetch_assoc()['active'] == 1) {
                throw new Exception("Email Already Verified");
            } else {
                $sql = "UPDATE `API` SET `active` = '1' WHERE `token` = '$token'";
                $final_result = $db->query($sql);
                if ($final_result) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }
}
