<?php


$random_str = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
$rndmuser = substr(str_shuffle($random_str), 0, 12);
$rndmpass = substr(str_shuffle($random_str), 0, 6);

?>



 <div class="container">
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

     <div class="row">
         <div class="col-lg-14">
            <h4 >New FACULTY</h4>
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
                     <label class="bmd-label-floating">Contact No.:</label> 
                         <input class="form-control input-sm" id="PHONE" name="PHONE"  type="text" value="" required maxlength="11">
                      </div>
                    </div>
                  </div> 
                  
                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">User ID:</label> 
                         <input class="form-control input-sm" id="USERID" name="USERID" type="text" value="<?php echo $rndmuser ?>">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Password:</label> 
                         <input class="form-control input-sm" id="PASS" name="FACPASS"   type="password" value="<?php echo $rndmpass ?>">
                         <input type="checkbox" onclick="myFunction()">Show Password
                      </div>
                    </div>
                  </div>
  
                 <div class="row">
                    <div class="col-md-9"> 
                        <button type="submit" name="facsave" class="btn btn-primary btn-round">Register</button>
                           
                     </div>
                    </div> 
        </form>
      </div>
      <br/>
      <br/>

<script>
    function myFunction() {
      var x = document.getElementById("PASS");
        if (x.type === "password") {
            x.type = "text";
      } else {
            x.type = "password";
      }
  }
</script>