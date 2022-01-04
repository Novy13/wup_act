<?php  
	 if(!isset($_SESSION['IDNO'])){
   redirect(web_root.'index.php');
 }
	  $student = New Student();
	  $singlestudent = $student->single_students($_SESSION['IDNO']);
	?>
     <section id="about">
      <div class="container">

 <section id="title-header">
    <div class="title">
        <!-- <img src="img/contact.png"> -->
        <p>Profile</p>
    </div>
</section> 
<div class="container">

    <div class="row">
      <?php check_message(); ?> 

        <div class="col-lg-3"><!--left col-->
           <div class="panel panel-default">            
            <div class="panel-body">
            <img title="Click to Upload" width="230" height="210" src="<?php echo web_root.'admin/modules/modstudent/'.$singlestudent->PROIMAGE; ?>">
            <br><br>
            <center>
            <a href="" data-target="#myModal" data-toggle="modal" ><p><small>Upload New Profile Photo</small></p>
            </a>
          </center>
             </div>
          <ul class="list-group">
            <li class="list-group-item text-muted"><strong>Student Information</strong></li>
             <li class="list-group-item text-right">
              <span class="pull-left"><strong>Student ID</strong></span>
              <br> 
             <?php echo $formatted = preg_replace("/^(\d{2})(\d{4})(\d{3})$/", "$1-$2-$3", $singlestudent->IDNO); ?> 
             </li>
            <li class="list-group-item text-right">
              <span class="pull-left"><strong>Real Name</strong></span>
              <br> 
             <?php echo $singlestudent->FNAME ." ". $singlestudent->MNAME ." ". $singlestudent->LNAME; ?> 
             </li>

              <li class="list-group-item text-right">
              <span class="pull-left"><strong>Department</strong></span>
              <br> 

             <?php

              $query = "SELECT * FROM tblstudent s, tbldepartment d WHERE  s.DEPARTMENT=d.DEPARTMENTID LIMIT 1";

              $mydb->setQuery($query);
              $cur = $mydb->loadResultList();
              
               foreach ($cur as $result) {

              echo $result->DEPARTMENT; // Result from JOINING THE TABLE of DEPT & STUD

               }   

               ?> 
             </li>

              <li class="list-group-item text-right">
              <span class="pull-left"><strong>Course/Strand</strong></span>
              <br> 
              
             <?php

              $query = "SELECT * FROM tblstudent s, tblcourse c WHERE s.COURSE=c.COURSEID LIMIT 1";

              $mydb->setQuery($query);
              $cur = $mydb->loadResultList();
              foreach ($cur as $result) {

              echo $result->COURSE; // Result from JOINING THE TABLE of COURSE & STUD

              } ?> 
             </li>

              <li class="list-group-item text-right">
              <span class="pull-left"><strong>Grade / Year </strong></span>
              <br> 
             <?php echo $singlestudent->YLVL; ?> 
             </li>

              <li class="list-group-item text-right">
              <span class="pull-left"><strong>BLOCK / SECTION </strong></span>
              <br> 
             <?php echo $singlestudent->SEC_BLOCK; ?> 
             </li>

              <li class="list-group-item text-right">
              <span class="pull-left"><strong>Contact Number</strong></span>
              <br> 
             <?php echo $singlestudent->PHONE; ?> 
             </li> 
          </ul> 
               
            
          </div>
          
        </div> 
        <div class="col-lg-9">  
 
       <?php  require_once "basicinfotab.php"; ?> 
              
    </div><!--/col-9--> 
 
 
         <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel">Choose Image</h4>
                                    <button class="close" data-dismiss="modal" type=
                                    "button">x</button>

                                    
                                </div>

                                <form action="controller.php?action=photos" enctype="multipart/form-data" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">
                                                            <input type="file" name="file" value="" />
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


      </div>
    </section><!-- #about -->
