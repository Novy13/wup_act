
    <?php 
 	$sql = "SELECT * FROM `tblblogpost` WHERE CATEGORY='EVENT' ORDER BY `DATEPOSTED` DESC";
		$mydb->setQuery($sql);
		$blog = $mydb->loadResultList();
	foreach ($blog as $result) {  

 // // `BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`
	?>

 <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title">  
                <?php echo $result->BLOGS ;?>
              </h4>
              <br>
              <p class="description">
                  <p>What : <?php echo $result->BLOG_WHAT; ?></p>
                  <p>WHERE : <?php echo $result->BLOG_WHERE; ?></p> 
                  <p>WHEN : <?php echo  dateFormat($result->BLOG_WHEN," M d Y , h:i a"); ?></p>  
                 </p>
              <p>
                <span class="fa fa-calendar"></span> Posted on  <?php echo  dateFormat($result->DATEPOSTED,"M d Y , h:i a"); ?>
              </p>
            </div>
          </div>
          <br><br>
<?php } ?>