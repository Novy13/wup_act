<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> WUP | Main Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo web_root;?>img/wup1.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo web_root;?>plugins/homepage/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo web_root;?>plugins/homepage/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo web_root;?>plugins/homepage/css/style.css" rel="stylesheet">

  <style type="text/css">
    .notiflbl{
      background-color: #DC5145;
      padding: 0px 10px;
      border-radius: 5px;
      color: #ffff;
    }
  </style>
</head>
 
 <?php
  // $q = isset($_GET['q']) ? $_GET['q'] : ""; 

  //   $IDNO = $_SESSION['IDNO']; 
  //   $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}'";
  //   $mydb->setQuery($sql);
  //   $cur = $mydb->executeQuery(); 
  //   $notifcnt = $mydb->num_rows($cur); 
 ?> 


<?php
  $IDNO = FALSE;
  $q = isset($_GET['q']) ? $_GET['q'] : ""; 
    $IDNO = FALSE;
    $IDNO = @$_SESSION['IDNO']; 
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Event'";
    $mydb->setQuery($sql);
    $cur = $mydb->executeQuery(); 
    $notifcnt_event = $mydb->num_rows($cur);


 ?>


 <?php
  $q = isset($_GET['q']) ? $_GET['q'] : ""; 

    $IDNO = isset($_SESSION['IDNO'])?$_SESSION['IDNO']:""; 
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Announcement'";
    $mydb->setQuery($sql);
    $cur = $mydb->executeQuery(); 
    $notifcnt_announcement = $mydb->num_rows($cur); 
 ?>

<body >
 <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<h3 class="text-light"><a href="#header">Wesleyan University-Philippines</a></h3> --> 
        <a href="#intro" class="scrollto">
          <img src="<?php echo web_root;?>" alt="" class="img-fluid"> </a> 
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo web_root;?>index.php">Home</a></li>
          <li><?php echo isset($_GET['q']) ? '<a href="index.php?#announcement">' : '<a href="#announcement">' ; ?>Announcements </a></li>
          <li><?php echo isset($_GET['q']) ? '<a href="index.php?#event">' : '<a href="#event">'; ?>Events </a></li>
          <li><?php echo isset($_GET['q']) ? '<a href="index.php?#contact">' : '<a href="#contact">' ;?>Contact</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->

            <?php if(isset($_SESSION['IDNO'])){ 
                    ?>  
                    <?php $student = New Student();
                    $singlestudent = $student->single_students($_SESSION['IDNO']);

                    ?>

          <li class="drop-down"><a href="#">User</a>
            <ul>
             <!--  <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="<?php echo web_root;?>index.php?q=profile">Profile</a></li>
              <li><a href="<?php echo web_root; ?>logout.php">Logout</a></li>
              <!-- <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>

          <?php }else{ ?> 
              <li class="<?php echo ($q=='login') ? 'active' : ''; ?>"><a href="#login"> Login</a></li> 
          <?php } ?>
          <!-- <li><a href="#contact">Contact Us</a></li> -->
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->



 

 <section id="content"> 
      <?php require_once $content; ?>   
 </section>

  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <strong>THESIS</strong>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo web_root;?>plugins/homepage/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/easing/easing.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/wow/wow.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo web_root;?>plugins/homepage/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo web_root;?>plugins/homepage/js/main.js"></script>

</body>
</html>



 

<script type="text/javascript"> 
setInterval(function(){loadnotification()},3000); 
function loadnotification(){

  // alert('asdsa')

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",   
        url: <?php echo web_root; ?>+"loadnotification.php?type=event",                      
        dataType: "text",   //expect html to be returned  
        data:{action:''},               
        success: function(data){                    
          $("#countnotifevent").html(data); 
             // alert(data);
            
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",   
        url: <?php echo web_root; ?>+"loadnotification.php?type=announcement",                      
        dataType: "text",   //expect html to be returned  
        data:{action:''},               
        success: function(data){                    
          $("#countnotifannouncement").html(data); 
             // alert(data);
            
        }

    });
}
 
          
 

  </script>     

</body>
</html>