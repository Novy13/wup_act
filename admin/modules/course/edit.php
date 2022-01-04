<?php  
   // if (!isset($_SESSION['TYPE'])=='Administrator'){
   //    redirect(web_root."index.php");
   //   }

  @$courseid = $_GET['id'];
    if($courseid==''){
  redirect("index.php");
}
  $course = New Course();
  $singlecourse = $course->single_course($courseid);

?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

              <div class="row">
         <div class="col-lg-12">
            <br>
            <h3 >Edit Course</h3>
            <br>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                 
            <input class="form-control input-sm" id="courseid" name="courseid" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $singlecourse->COURSEID; ?>">
                      
                 
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Course:</label> &nbsp;
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="COURSE" name="COURSE"  type="text" value="<?php echo $singlecourse->COURSE; ?>">
                      </div>
                   <div class="col-lg-6-11">
                    <div class="form-group">
                     <label style="color: black;">Description:</label>&nbsp;
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION"  type="text" value="<?php echo $singlecourse->DESCRIPTION; ?>">
                      </div>
                    </div>
       
                    <div class="col-md-11"> 
                         <button class="btn btn-primary btn-round" name="save" type="submit" >Save</button>
                         </div>
        </form>
   </center>