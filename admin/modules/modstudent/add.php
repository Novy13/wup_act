<?php


$random_str = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
$rndmuser = substr(str_shuffle($random_str), 0, 12);
$rndmpass = substr(str_shuffle($random_str), 0, 6);

?>



 <div class="container">
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

     <div class="row">
         <div class="col-lg-14">
            <h4 >New Student</h4>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                <br><br>

                 <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">School ID Number:</label> 
                         <input class="form-control input-sm" id="IDNO" name="IDNO"  type="text" value="" maxlength="9" required>
                      </div>
                    </div>
                  </div>
                
                <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Full Name:</label> 
                         <input class="form-control input-sm" id="FNAME" name="FNAME"   type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Department:</label> 
                         <select class="form-control input-sm" name="DEPARTMENT" id="DEPARTMENT">
                            <option disabled selected>Choose here</option>
                            <optgroup disabled=""></optgroup>
                             <?php  
                              $mydb->setQuery("SELECT * 
                                      FROM  `tbldepartment`");
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
                     <label class="bmd-label-floating">Course/Strand:</label> 
                         <select class="form-control input-sm" name="COURSE" id="COURSE">
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
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Grade/Year level:</label> 
                         <select class="form-control input-sm" name="YLVL" id="YLVL">
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
                  </div>
                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Contact No.:</label> 
                         <input class="form-control input-sm" id="PHONE" name="PHONE"  type="text" value="" required maxlength="11">
                      </div>
                    </div>
                  </div> 
                  
                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">User ID:</label> 
                         <input class="form-control input-sm" id="USERNAME" name="USERNAME" type="text" value="<?php echo $rndmuser ?>">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Password:</label> 
                         <input class="form-control input-sm" id="STUDPASS" name="STUDPASS"   type="password" value="<?php echo $rndmpass ?>">
                         <input type="checkbox" onclick="myFunction()">Show Password
                      </div>
                    </div>
                  </div>
  
                 <div class="row">
                    <div class="col-md-9"> 
                        <button type="submit" name="studsave" class="btn btn-primary btn-round">Register</button>
                           
                     </div>
                    </div> 
        </form>
      </div>
      <br/>
      <br/>

<script>
    function myFunction() {
      var x = document.getElementById("STUDPASS");
        if (x.type === "password") {
            x.type = "text";
      } else {
            x.type = "password";
      }
  }
</script>