<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V5</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="asset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/css/util.css">
  <link rel="stylesheet" type="text/css" href="asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('asset/images/bg-01.jpg');">
      <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
          <form action="proses_login.php" class="login100-form validate-form flex-sb flex-w" method="POST">
          <span class="login100-form-title p-b-53">
            Sign In With
          </span>

          <a href="facebook.com" class="btn-face m-b-20">
            <i class="fa fa-facebook-official"></i>
            Facebook
          </a>

          <a href="google.com" class="btn-google m-b-20">
            <img src="asset/images/icons/icon-google.png" alt="GOOGLE">
            Google
          </a>
          
          <div class="p-t-31 p-b-9">
            <span class="txt1">
              Username
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Username is required">
            <input class="input100" type="text" name="username" >
            <span class="focus-input100"></span>
          </div>
          
          <div class="p-t-13 p-b-9">
            <span class="txt1">
              Password
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" >
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn" name="login" value="Login">
              Login
            </button>
          </div>

          <div class="w-full text-center p-t-55">
            <span class="txt2">
              Tidak punya akun?
            </span>

            <a href="register.php" class="txt2 bo1">
              Register
            </a>
          </div>
        </form>
      </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="asset/vendor/bootstrap/js/popper.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="asset/vendor/daterangepicker/moment.min.js"></script>
  <script src="asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="asset/js/main.js"></script>

</body>
</html>