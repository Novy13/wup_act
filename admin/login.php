<?php
require_once("../include/initialize.php");

 ?>
  <?php
 // login confirmation
  if(isset($_SESSION['USERID'])){
    redirect(web_root."admin/index.php");
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>WUP | ADMIN LOGIN</title>
<link href="<?php echo web_root;?>img/wup1.png" rel="icon">

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/jquery.dataTables.css">
<link href="<?php echo web_root; ?>css/bootstrap.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">
<!-- Plugins -->
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.dataTables.js"></script>
<!-- <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/fixnmix.js"></script> / -->


<style>
@CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
    color: #333;
}

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  outline: none;
}

    .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

body {
background-image: url(../images/bg3.jpg) ;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
  margin-top: 60px;
}

form[role=login] {
  color: s;
  opacity: 1;
  padding: 26px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}
  form[role=login] img {
    display: block;
    margin: 0 auto;
    margin-bottom: 35px;
    height: 100px;
  }
  form[role=login] input,
  form[role=login] button {
    font-size: 18px;
    background: transparent;
    border: 1px solid rgba(255,255,255,0.6);
    border-radius: 2px;
    margin: 16px 0;
  }
  form[role=login] > div {
    text-align: center;
  }

.form-links {
  text-align: center;
  margin-top: 1em;
  margin-bottom: 50px;
}
  .form-links a {
    color: #fff;
  }
 
.btn-primary-outline {
  background-color: transparent;
  border-color: #ccc;
  color: white;
}
.btn-primary-outline:hover {
  color: white;
}
</style>

<body  >


<div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-4">

      <section class="login-form"> <? echo check_message(); ?>;
        <form method="post" action="" role="login">
          <!-- <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" /> -->
           <img src="../img/wup1.png" height="50px" class="img-responsive" alt="" />
           <div style="min-height: 80px; color: white;"><h3>Admin Login</h3></div>

          <input type="text" name="user_email" placeholder="Username" required class="form-control input-lg"  />

          <input type="password" name="user_pass" class="form-control input-lg" id="password" placeholder="Password" required  />


          <div class="pwstrength_viewport_progress"></div>


          <button type="submit" name="btnLogin" class="btn  btn btn-primary-outline btn-lg btn-block">Sign in</button>
          <!-- <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
           -->
        </form>

        <div class="form-links">
          <!-- <a href="#">www.website.com</a> -->
        </div>
      </section>
      </div>

      <div class="col-md-4"></div>


  </div>




</div>

</body>

 <?php

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);

   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");

    } else {
  //it creates a new objects of member
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($email, $h_upass);
    if ($res==true) {
       message("You login as ".$_SESSION['TYPE'].".","success");
      if ($_SESSION['TYPE']=='Administrator'){
         redirect(web_root."admin/index.php");
      }else{
           redirect(web_root."admin/login.php");
      }
    }else{
        echo '<script language="javascript" type="text/javascript"> 
      alert("Admin Log-In Error. Please Try Again");
      </script>';
       redirect(web_root."admin/login.php");
    }
 }
 }
 ?>
</head>
</html>
