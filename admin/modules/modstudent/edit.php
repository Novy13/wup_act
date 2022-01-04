<?php  
  @$IDNO = $_GET['id'];
 @$syid = $_GET['sy'];
  if($IDNO=='' ){
  redirect("index.php");
}
  $student = New Student();
  $singlestudent = $student->single_students($IDNO);
 

  ?>

 
 <style type="text/css">
.sidebar-left .main{
  float:right;
}
.idebar-left .sidebar{
  float:left;
}

.sidebar-right .main{
  float:left;
}
.idebar-right .sidebar{
  float:right;
}
 
</style>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>      
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  />
  
          <div class="row">
         <div class="col-lg-12">
          <br>
            <h3>Edit Student</h3>
            <br>
          </div>
          <!-- /.col-lg-12 -->
       </div>             
          <input  id="IDNO" name="IDNO"  type="hidden" value="<?php echo $singlestudent->IDNO; ?>">
            <div class="row-center">
                   <div class="col-md-3">
                    <div class="form-group">
                     <label style="color: black;">First Name:</label>&nbsp;  
                         <input class="form-control input-sm" id="FNAME" name="FNAME"   type="text" value="<?php echo $singlestudent->FNAME; ?>" required>
                      </div>
                    </div>

                   <div class="col-md-3">
                    <div class="form-group">
                     <label style="color: black;">Middle Name:</label>&nbsp;  
                         <input class="form-control input-sm" id="MNAME" name="MNAME"   type="text" value="<?php echo $singlestudent->MNAME; ?>" required>
                      </div>
                    </div>

                   <div class="col-md-3">
                    <div class="form-group">
                     <label style="color: black;">Last Name:</label>&nbsp;  
                         <input class="form-control input-sm" id="LNAME" name="LNAME"   type="text" value="<?php echo $singlestudent->LNAME; ?>" required>
                      </div>
                    </div>
            </div>
                   <div class="col-md-3">
                    <div class="form-group">
                     <label style="color: black;">Department:</label>&nbsp;  
                            <select class="form-control input-sm" name="DEPARTMENT" id="DEPARTMENT" required> 
                               <option disabled selected>Choose here</option>
                                <optgroup disabled=""></optgroup>
                                  <?php  
                                    $mydb->setQuery("SELECT * 
                                            FROM  `tbldepartment` WHERE DEPARTMENTID='".$singlestudent->DEPARTMENT."'");
                                    $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->DEPARTMENTID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                   <?php }  


                                    $mydb->setQuery("SELECT * 
                                      FROM  `tbldepartment` WHERE DEPARTMENTID<>'".$singlestudent->DEPARTMENT."'");
                                      $cur = $mydb->loadResultList();

                                        foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->DEPARTMENTID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                        <?php } ?>
                          </select>
                      </div>
                    </div>


                   <div class="col-md-3">
                    <div class="form-group">
                     <label style="color: black;">Course:</label>&nbsp;  
                            <select class="form-control input-sm" name="COURSE" id="COURSE" required> 
                              <option disabled selected>Choose here</option>
                              <optgroup disabled=""></optgroup>

                             <?php  
                              $mydb->setQuery("SELECT * FROM  tblcourse");
                              $cur = $mydb->loadResultList();

                            foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->COURSE; ?></option>
                              <?php } ?> 
                              <optgroup disabled=""></optgroup>
                              <?php  
                              $mydb->setQuery("SELECT * FROM  tblstrand");
                              $cur1 = $mydb->loadResultList();

                            foreach ($cur1 as $result1) { ?>
                              <option value="<?php echo $result1->STRANDID; ?>"><?php echo $result1->STRAND; ?></option>
                              <?php } ?> 
                              <optgroup disabled=""></optgroup>

                            <option value="N/A">N/A </option>

                              </select>
         
                      </div>
                    </div>
                   <div class="col-md-3">
                    <div class="form-group">
                     <label style="color: black;">Grade/Year level:</label>&nbsp;  
                         <select class="form-control input-sm" name="YLVL" id="YLVL" required>
                              <option disabled selected>Choose here</option>
                                <optgroup disabled=""></optgroup>
                                  <option value="7">7</option>
                                  <option value="8">8</option> 
                                  <option value="9">9</option> 
                                  <option value="10">10</option>
                                <optgroup disabled=""></optgroup>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                <optgroup disabled=""></optgroup>
                                  <option value="1st Year">1st Year</option>
                                  <option value="2nd Year">2nd Year</option> 
                                  <option value="3rd Year">3rd Year</option> 
                                  <option value="4th Year">4th Year</option>    
                        </select>
                      </div>
                    </div>
                   <div class="col-md-3">
                    <div class="form-group">
                     <label style="color: black;">Contact No.:</label>&nbsp;  
                         <input class="form-control input-sm" id="PHONE" name="PHONE"  maxlength="11" type="text" value="<?php echo $singlestudent->PHONE; ?>" required>
                      </div>
                    </div>
 
                    <div class="col-md-9"> 
                        <button class="btn btn-primary btn-round" name="save" type="submit" >Save</button>  
                      </div>
 </form>
</center>