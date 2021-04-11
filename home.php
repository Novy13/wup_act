 <!--==========================
    Intro Section
  ============================-->
 <style type="text/css">
   .carousel-inner{
    
   }
 </style>
  <section id="intro" class="clearfix">
    <div class="container">

<div class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="intro-img " src="<?php echo web_root;?>images/wesleympics.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="intro-img" src="<?php echo web_root;?>images/foundation.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="intro-img" src="<?php echo web_root;?>images/acq.jpg" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img class="intro-img" src="<?php echo web_root;?>images/valentines.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

      <div class="intro-info">
        <h2>WUP AURORA EVENT & ANNOUNCEMENT SYSTEM</h2>
        <div>
          <a href="#announcement" class="btn-get-started scrollto">Announcements</a>
          <a href="#event" class="btn-services scrollto">Events</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="announcement">
      <div class="container">

        <header class="section-header">
          <h3>Announcement</h3>
          
        </header>
        <br><br>
        <div class="row about-container"> 
          <?php include 'announcement.php'; ?>
        </div>
 

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="event" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Events</h3>
        </header>
        <br><br>
        <div class="row"> 
          <?php include 'event.php'; ?> 
        </div>

      </div>
    </section><!-- #services -->

 

    <!--==========================
      Contact Section
    ============================-->
 <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

        <?php include 'contact.php'; ?> 

        </div>

      </div>
    </section>



            <?php if(!isset($_SESSION['IDNO'])){ ?>
    <!--==========================
      login Section
    ============================-->
    <section id="login" class="section-bg" style="background-color: #DDDDDD">
      <div class="container"> 
        <div class="row"> 
          <?php include 'login.php'; ?> 
        </div>

      </div>
    </section>
 <?php } ?>

  </main>