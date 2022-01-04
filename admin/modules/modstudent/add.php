<?php


$random_str = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
$rndmuser = substr(str_shuffle($random_str), 0, 12);
$rndmpass = substr(str_shuffle($random_str), 0, 6);

?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <div class="container">
  <center>
  <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">
         <div class="col-lg-14">
            <h3>New Student</h3>
          </div>
        <br>
          <div class="col-md-6">
        <div class="form-group">
          <label  style="color: black;"for="company">Student ID #</label>&nbsp;  
          <input type="text" class="form-control input-sm" name="IDNO" id="IDNO" maxlength="9" required>
        </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label  style="color: black;" for="first">First Name</label>&nbsp;  
          <input type="text" class="form-control input-sm" name="FNAME"  id="FNAME"required>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label  style="color: black;" for="last">Middle Name</label>&nbsp;  
          <input type="text" class="form-control input-sm"  name="MNAME"  id="MNAME" required>
        </div>
      </div>
        
        <div class="col-md-4">
        <div class="form-group">
          <label  style="color: black;" for="last">Last Name</label>&nbsp;  
          <input type="text" class="form-control input-sm"  name="LNAME" id="LNAME" required>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
          <label  style="color: black;" for="department">Department</label>&nbsp;  
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
      <div class="col-md-8">
        <div class="form-group">
          <label  style="color: black;" for="c/s">Course/Strand</label>&nbsp;  
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
      <div class="col-md-8">
        <div class="form-group">
          <label  style="color: black;" for="ylvl">Grade/Year Level</label>&nbsp;  
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

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <select  class="form-control input-xs" name="SEC_BLOCK" aria-label="Default select example" required>
            <option selected>Select Section/Block here</option>
              <option value="Dahlia">Dahlia</option>
              <option value="Gumamela">Gumamela</option>
              <option value="Sampaguita">Sampaguita</option>
              <option value="Rosas">Rosas</option>            
              <optgroup disabled=""></optgroup>
              <option value="Block 1">Block I</option>
              <option value="Block 2">Block II</option>
              <option value="Block 3">Block III</option>
              <option value="Block 3">Block V</option>
          </select>
        </div>
      </div>
  </div>
      <!--  col-md-6   -->
      <div class="row">
        <div class="col-md-6">
        <div class="form-group">
          <label  style="color: black;" for="c#">Contact No.</label>&nbsp;  
          <input type="text" class="form-control input-sm" name="PHONE" id="PHONE" maxlength="11" required>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
          <label  style="color: black;" for="UID">User ID</label>&nbsp;  
          <input type="text" class="form-control input-sm" name="USERNAME" id="USERNAME" value="<?php echo $rndmuser ?>" required>
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group">
          <label  style="color: black;" for="UID">Password</label>&nbsp;  
          <input type="password" class="form-control input-sm" name="STUDPASS" id="STUDPASS" value="<?php echo $rndmpass ?>" required>
          <input type="checkbox" onclick="myFunction()">Show Password
        </div>
      </div>
    </div>
    <!--  row   -->

    <button type="submit" name="studsave" class="btn btn-primary btn-round">Register</button>
  </form>
</center>
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