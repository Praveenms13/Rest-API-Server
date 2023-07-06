<?php

class Database
{
    public static $connection = null;
    public static function getConnection()
    {
        if (Database::$connection == null) {
            $config = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/../../../config_files/api.json");
            $config = json_decode($config, true);
            $server = $config["server"];
            $user = $config["user"];
            $password = $config["password"];
            $dbname = $config["dbname"];
            $new_connection = new mysqli($server, $user, $password, $dbname);
            if (! $new_connection->connect_error) {
                // echo "Connection Status : Connected successfully";
                Database::$connection = $new_connection;
                return Database::$connection;
            } else {
                echo "Error: " . Database::$connection->error;
            }
        } else {
            // echo "Connection Status : Connected successfully";
            return Database::$connection;
        }
    }
}
