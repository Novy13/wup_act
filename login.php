  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/main.css">
  <?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = $upass;
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect (web_root."index.php?#login");
         
    } else {  
  //it creates a new objects of member
    $student = new Student();
    //make use of the static function, and we passed to parameters
    $res = $student::studentAuthentication($email, $h_upass);
    if ($res==true) { 
       // message("You login as ".$_SESSION['TYPE'].".","success");
      if ($_SESSION['IDNO']){
         redirect(web_root."modstudent/index.php");
      }else{
         redirect (web_root."index.php?#login");
      }
    }else{
      echo '<script language="javascript" type="text/javascript"> 
      alert("Log-In Error. Please Try Again");
      </script>';
      redirect (web_root."index.php?#login");
      }
 }
 } 
 ?> 

<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="img/wup.jpg">
          <br><br><br>
        </div>
        <form class="login100-form validate-form" action="" method="POST">
      <?php check_message(); ?>
          <span class="login100-form-title">
            <h4>Student Login</h4>
          </span>
          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="user_email" placeholder="User ID">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="user_pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btnLogin">
              Login
            </button>
          </div>

      <!--     <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div> -->
<!-- 
          <div class="text-center p-t-136">
            <a class="txt2" href="register.php">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div> -->
        </form>
      </div>
    </div>
  </div>

  <!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>