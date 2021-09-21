<?php


$random_str = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
$rndmuser = substr(str_shuffle($random_str), 0, 12);
$rndmpass = substr(str_shuffle($random_str), 0, 6);

?>



 <div class="container">
  <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">
         <div class="col-lg-14">
            <h3>New Faculty</h3>
          </div>
        <br>
          <div class="col-md-6">
        <div class="form-group">
          <label class="bmd-label-floating" for="company">Faculty ID #</label>
          <input type="text" class="form-control input-sm" name="IDNO" id="IDNO" maxlength="9" required>
        </div>
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <label class="bmd-label-floating" for="first">First Name</label>
          <input type="text" class="form-control input-sm" name="FNAME"  id="FNAME"required>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating" for="last">Middle Name</label>
          <input type="text" class="form-control input-sm"  name="MNAME"  id="MNAME" required>
        </div>
      </div>
        
        <div class="col-md-4">
        <div class="form-group">
          <label class="bmd-label-floating" for="last">Last Name</label>
          <input type="text" class="form-control input-sm"  name="LNAME" id="LNAME" required>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="department">Department</label>
          <select class="form-control input-sm" id="DEPARTMENT" name="DEPARTMENT" required>
            <option disabled selected>Choose here</option>
              <optgroup disabled=""></optgroup>
                <?php  
                    $mydb->setQuery("SELECT * FROM  `tbldepartment`");
                      $cur = $mydb->loadResultList();
                      foreach ($cur as $result) { ?>
                      <option value="<?php echo $result->DEPARTMENTID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                      <?php } ?>
          </select>
        </div>
      </div>
  </div>
    <!--  row   -->
      <!--  col-md-6   -->
      <div class="row">
        <div class="col-md-6">
        <div class="form-group">
          <label class="bmd-label-floating" for="c#">Contact No.</label>
          <input type="text" class="form-control input-sm" name="PHONE" id="PHONE" maxlength="11" required>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
          <label class="bmd-label-floating" for="UID">User ID</label>
          <input type="text" class="form-control input-sm" name="USERID" id="USERID" value="<?php echo $rndmuser ?>" required>
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group">
          <label class="bmd-label-floating" for="UID">Password</label>
          <input type="password" class="form-control input-sm" name="FACPASS" id="FACPASS" value="<?php echo $rndmpass ?>" required>
          <input type="checkbox" onclick="myFunction()">Show Password
        </div>
      </div>
    </div>
    <!--  row   -->

    <button type="submit" name="facsave" class="btn btn-primary btn-round">Register</button>
  </form>
</div>

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