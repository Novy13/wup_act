<?php  
  @$IDNO = $_GET['id'];
 @$syid = $_GET['sy'];
  if($IDNO=='' ){
  redirect("index.php");
}
  $faculty = New Faculty();
  $singlefaculty = $faculty->single_faculty($IDNO);
 

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
 
        
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  />
  
        
          <div class="row">
         <div class="col-lg-12">
            <h3>Edit Faculty</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                
                         <input  id="IDNO" name="IDNO"  type="hidden" value="<?php echo $singlefaculty->IDNO; ?>"> 
               
                <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Full Name:</label> 
                         <input class="form-control input-sm" id="FNAME" name="FNAME"   type="text" value="<?php echo $singlefaculty->FNAME; ?>" required>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Course:</label> 
                            <select class="form-control input-sm" name="COURSE" id="COURSE"> 
                                  <?php  
                                    $mydb->setQuery("SELECT * 
                                            FROM  `tblcourse` WHERE COURSEID='".$singlestudent->COURSE."'");
                                    $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                   <?php }  


                                    $mydb->setQuery("SELECT * 
                                      FROM  `tblcourse` WHERE COURSEID<>'".$singlestudent->COURSE."'");
                                      $cur = $mydb->loadResultList();

                                        foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                        <?php } ?>



                              </select>
         
                      </div>
                    </div>
                  </div>

                        <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Department:</label> 
                            <select class="form-control input-sm" name="DEPARTMENT" id="DEPARTMENT"> 
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
                  </div>

                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Contact No.:</label> 
                         <input class="form-control input-sm" id="PHONE" name="PHONE"  maxlength="11" type="text" value="<?php echo $singlefaculty->PHONE; ?>" required>
                      </div>
                    </div>
                  </div>
 
 
                    <div class="row">
                    <div class="col-md-9"> 
                        <button class="btn btn-primary btn-round" name="save" type="submit" >Save</button>  
                      </div>
                    </div> 
 
<!--/.fluid-container-->
 
 </form>