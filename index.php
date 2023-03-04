<!DOCTYPE html>
<html lang="en">

<body>
    <html lang="en">

    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            /* Variables */
            :root {
                --primary-font-family: 'Poppins', sans-serif;
                --light-white: #f5f8fa;
                --gray: #5e6278;
                --gray-1: #e3e3e3;
            }

            a {
                font-family: var(--primary-font-family);
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notes App</title>
        <link rel="stylesheet" type="text/css" href="./_resources/styleJunk.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="icon" href="https://img.icons8.com/fluency/48/null/edit-property--v1.png">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <img src="https://img.icons8.com/color/48/null/goodnotes.png" alt="">
                <a class="navbar-brand" href="#!">Notes App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Developer</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#!">API`s</a></li>
                                <li><a class="dropdown-item" href="#!">OAuth 2.0</a></li>
                            </ul>
                        </li>
                    </ul>
                    <style>
                        a {
                            text-decoration: none;
                            color: black;
                        }
                    </style>
                    <a href = "UserAuth/loginUser.php" class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Login
                    </a>
                </div>
            </div>
        </nav>
        <style type="text/css">
            html,
            body {
                font-size: 16px;
                line-height: 1.5;
                color: #333;
                background-color: #fff;
                margin: 0;
                padding: 0;
            }

            .hero {
                border: 1px solid #e5e5e5;
                border-radius: 10px;
                margin-top: 80px;
                background-color: #EEF2F5;
            }

            @media screen and (max-width: 500px) {
                .hero {
                    border: 0px solid #e5e5e5;
                    background-color: #fff;
                    margin-top: 10px;
                }
            }
        </style>


        <a name="basic/hero-dynamic-1" style="position:absolute;"></a>
        <div class="hero with-image">
            <div class="row">
                <div class="content-container clearfix">
                    <div class="content">
                        <h1>
                            Get more from your note-taking app
                        </h1>
                        <div class="description">
                            Capture important ideas and information in ways that help you stay productive.
                        </div>
                        <div class="cta">
                            <a href="UserAuth/signupUser.php" class="button-primary">
                                Sign up for free
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img class="desktop-only image" src="./_resources/images/note_app_hero_image@2x.png" alt="Evernote&#39;s online note-taking app">
                        <img class="mobile-only image" src="./_resources/images/note_app_hero_image@2x.png" alt="Evernote&#39;s online note-taking app">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <aside class="bg-danger bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                    <div class="mb-4 mb-xl-0">
                        <div class="fs-3 fw-bold text-white">New products is on the way.</div>
                        <div class="text-white-50">Sign up for the newsletter for the latest updates.
                        </div>
                    </div>
                    <div class="ms-xl-4">
                        <div class="input-group mb-2">
                            <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter">
                            <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign
                                up</button>
                        </div>
                        <div class="small text-white-50">We care about privacy, and will never share
                            your data.
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <br><br>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright © Praveen`s Notes WebApp 2023</div>
                    <div>
                        <a href="#">API</a>
                        ·
                        <a href="#">Git Documentation</a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>