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
            <h3>New Faculty</h3>
          </div>
        <br>
          <div class="col-md-6">
        <div class="form-group">
          <label style="color: black;" for="company">Faculty ID #</label>&nbsp; 
          <input type="text" class="form-control input-sm" name="IDNO" id="IDNO" maxlength="9" required>
        </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label style="color: black;" for="first">First Name</label>&nbsp; 
          <input type="text" class="form-control input-sm" name="FNAME"  id="FNAME"required>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label style="color: black;" for="last">Middle Name</label>&nbsp; 
          <input type="text" class="form-control input-sm"  name="MNAME"  id="MNAME" required>
        </div>
      </div>
        
        <div class="col-md-4">
        <div class="form-group">
          <label style="color: black;" for="last">Last Name</label>&nbsp; 
          <input type="text" class="form-control input-sm"  name="LNAME" id="LNAME" required>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>

      <!--  col-md-6   -->
      <div class="row">
        <div class="col-md-6">
        <div class="form-group">
          <label style="color: black;" for="c#">Contact No.</label>&nbsp; 
          <input type="text" class="form-control input-sm" name="PHONE" id="PHONE" maxlength="11" required>
        </div>
      </div>
    </div>
    <!--<div class="row">
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
  -->
    <!--  row   -->
<div>
  <button type="submit" name="facsave" class="btn btn-primary btn-round">Register</button>
</div>
    
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