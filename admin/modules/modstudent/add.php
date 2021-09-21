<?php


$random_str = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
$rndmuser = substr(str_shuffle($random_str), 0, 12);
$rndmpass = substr(str_shuffle($random_str), 0, 6);

?>



 <div class="container">
  <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">
         <div class="col-lg-14">
            <h3>New Student</h3>
          </div>
        <br>
          <div class="col-md-6">
        <div class="form-group">
          <label class="bmd-label-floating" for="company">Student ID #</label>
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
      <!--  col-md-6   -->
</div>
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="c/s">Course/Strand</label>
          <select class="form-control input-sm" name="COURSE" id="COURSE" required>
            <option disabled selected>Choose here</option>
              <optgroup disabled=""></optgroup>
              <?php
              $mydb->setQuery("SELECT * FROM  tblcourse");
              $cur = $mydb->loadResultList();
              foreach ($cur as $result) { ?>
              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->COURSE; ?></option>
              <?php } ?> 
              <option value="N/A">N/A </option>
          </select>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="ylvl">Grade/Year Level</label>
          <select class="form-control input-sm" id="YVL" name="YLVL" required>
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
          <input type="text" class="form-control input-sm" name="USERNAME" id="USERNAME" value="<?php echo $rndmuser ?>" required>
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group">
          <label class="bmd-label-floating" for="UID">Password</label>
          <input type="password" class="form-control input-sm" name="STUDPASS" id="STUDPASS" value="<?php echo $rndmpass ?>" required>
          <input type="checkbox" onclick="myFunction()">Show Password
        </div>
      </div>
    </div>
    <!--  row   -->

    <button type="submit" name="studsave" class="btn btn-primary btn-round">Register</button>
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