<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes App</title>
  <link rel="icon" href="https://img.icons8.com/fluency/48/null/edit-property--v1.png">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
  <link rel="stylesheet" href="../_resources/login.css">
  <!-- Bootstrap 5 CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    nav {
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(7px);
      color: #fff;
      position: absolute;
      z-index: 1;
      width: 100%;
    }

    .navbar-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .navbar-logo a {
      color: #000;
      text-decoration: none;
      font-weight: bold;
      font-size: 1.5rem;
    }

    .navbar-menu {
      display: none;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navbar-menu li {
      margin: 0 10px;
    }

    .navbar-menu a {
      color: #000;
      text-decoration: none;
      font-weight: bold;
    }

    .navbar-toggle {
      display: block;
    }

    .navbar-toggler {
      background-color: transparent;
      border: none;
      cursor: pointer;
      padding: 0;
    }

    .navbar-toggler:focus {
      outline: none;
    }

    .navbar-toggler-icon {
      display: block;
      width: 25px;
      height: 2px;
      background-color: #000;
      position: relative;
      transition: all 0.2s ease-in-out;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after {
      content: "";
      width: 100%;
      height: 100%;
      background-color: #000;
      position: absolute;
      top: 0;
      left: 0;
      transition: all 0.2s ease-in-out;
    }

    .navbar-toggler-icon::before {
      transform: translateY(-8px);
    }

    .navbar-toggler-icon::after {
      transform: translateY(8px);
    }

    .navbar-toggle.active .navbar-toggler-icon {
      background-color: transparent;
    }

    .navbar-toggle.active .navbar-toggler-icon::before {
      transform: rotate(45deg) translate(4px, 4px);
    }

    .navbar-toggle.active .navbar-toggler-icon::after {
      transform: rotate(-45deg) translate(4px, -4px);
    }

    @media screen and (min-width: 768px) {
      .navbar-menu {
        display: flex;
      }

      .navbar-toggle {
        display: none;
      }
    }
  </style>
</head>

<body>
  <nav>
    <div class="navbar-container">
      <div class="navbar-logo">
        <img src="https://img.icons8.com/color/48/null/goodnotes.png" alt="">
        &nbsp;&nbsp;
        <a href="#">Notes App</a>
      </div>
      <ul class="navbar-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </nav>
  <section class="animations">
    <div class="animations-container">
      <div class="ani ani-1">
        <div class="ani-cube">
          <div class="cube-face face_front"></div>
          <div class="cube-face face_right"></div>
          <div class="cube-face face_left"></div>
          <div class="cube-face face_top"></div>
          <div class="cube-face face_bottom"></div>
          <div class="cube-face face_back"></div>
        </div>
      </div>
      <div class="ani ani-2">
        <div class="ani-cube ani-cube-2">
          <div class="cube-face face_front"></div>
          <div class="cube-face face_right"></div>
          <div class="cube-face face_left"></div>
          <div class="cube-face face_top"></div>
          <div class="cube-face face_bottom"></div>
          <div class="cube-face face_back"></div>
        </div>
      </div>
      <div class="ani ani-3">
        <div class="ani-cube ani-cube-3">
          <div class="cube-face face_front"></div>
          <div class="cube-face face_right"></div>
          <div class="cube-face face_left"></div>
          <div class="cube-face face_top"></div>
          <div class="cube-face face_bottom"></div>
          <div class="cube-face face_back"></div>
        </div>
      </div>
      <div class="ani ani-4">
        <div class="ani-hamburger">
          <div class="hamburger-line hamburger-line_top"></div>
          <div class="hamburger-line hamburger-line_middle"></div>
          <div class="hamburger-line hamburger-line_bottom"></div>
        </div>
      </div>
      <div class="ani ani-5">
        <div class="moving-square-frame"></div>
        <div class="ani-moving-square"></div>
      </div>
      <div class="ani ani-6">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1024 1024">
          <path id="followPath" d="M394.1-214.9c-49.7,89.4,114.4,192.8,175.5,475.1c13,60.1,85.4,424-98.1,552.6 c-95.7,67-267.2,74.5-346.3-22.1c-70.8-86.5-49-233.9,19.2-305.2c102.4-107,353.9-89.1,593.2,96.5c139.6,107,294.1,258.4,415,468.6 c19.2,33.5,36.6,66.6,52.3,99.3c13,8.6,34,19.5,53.3,13.2c148-48.6,165.1-1094.5-338.5-1374.8C723.7-320.8,449-313.8,394.1-214.9z">
          </path>
          <path id="dashedPath" d="M394.1-214.9c-49.7,89.4,114.4,192.8,175.5,475.1c13,60.1,85.4,424-98.1,552.6 c-95.7,67-267.2,74.5-346.3-22.1c-70.8-86.5-49-233.9,19.2-305.2c102.4-107,353.9-89.1,593.2,96.5c139.6,107,294.1,258.4,415,468.6 c19.2,33.5,36.6,66.6,52.3,99.3c13,8.6,34,19.5,53.3,13.2c148-48.6,165.1-1094.5-338.5-1374.8C723.7-320.8,449-313.8,394.1-214.9z">
          </path>
          <path id="airplain" d="M8.04 84L92 48 8.04 12 8 40l60 8-60 8z">
            <animateMotion xlink:href="#airplain" dur="6s" fill="freeze" repeatCount="indefinite" rotate="auto">
              <mpath xlink:href="#followPath"></mpath>
            </animateMotion>
          </path>
        </svg>
      </div>
    </div>
    <!-------------center content------------------>
    <div class="small-container">
      <div class="wrapper">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
          <form class="rounded bg-white shadow p-5">
            <h3 class="text-dark fw-bolder fs-4 mb-2">Create an Account</h3>

            <div class="fw-normal text-muted mb-2">
              Already have an account? <a href="index.html" class="text-primary fw-bold text-decoration-none">Sign
                in
                here</a>
            </div>
            <div class="text-center text-muted text-uppercase mb-2">or</div>
            <a href="#" class="btn btn-light login_with w-100 mb-4">
              <img src="https://img.icons8.com/fluency/48/null/google-logo.png" class="img-fluid me-3">Sign in with
              Google</a>
            </a>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingLastName" placeholder="username">
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
              <span class="password-info mt-2">Use 8 or more characters with a mix of letters, numbers &
                symbols.</span>
            </div>
            <!-- <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
              </div> -->
            <div class="form-check d-flex align-items-center">
              <input class="form-check-input" type="checkbox" id="gridCheck" checked>
              <label class="form-check-label ms-2" for="gridCheck">
                I Agree <a href="#">Terms and conditions</a>.
              </label>
            </div>
            <button type="submit" class="btn btn-primary submit_btn w-100 my-4">Continue</button>
          </form>
        </div>
      </div>
    </div>
    <!--------------------------------------------->
  </section>
</body>

</html>