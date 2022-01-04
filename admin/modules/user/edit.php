<?php  
   // if (!isset($_SESSION['TYPE'])=='Administrator'){
   //    redirect(web_root."index.php");
   //   }

  @$user_id = $_GET['id'];
    if($user_id==''){
  redirect("index.php");
}
  $user = New User();
  $singleuser = $user->single_user($user_id);

?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center> 
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

               <div class="row">
         <div class="col-lg-12">
            <br>
            <h3  >Update User</h3>
            <br>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                    <!-- <div class="row">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $singleuser->USERID; ?>">
                   <!--    </div>
                    </div>
                  </div>      -->      
                  
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Name:</label>&nbsp;   
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_name" name="user_name"  type="text" value="<?php echo $singleuser->NAME; ?>">
                      </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Username:</label>&nbsp;   
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_email" name="user_email" type="text" value="<?php echo $singleuser->UEMAIL; ?>">
                      </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Password:</label>&nbsp;   
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_pass" name="user_pass"  type="Password" value="">
                      </div>
                    </div>
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Retype Password:</label>&nbsp;   
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass"  type="Password" value="">
                      </div>
                    </div> 

                    <div class="col-md-8"> 
                         <button class="btn btn-primary btn-round" id="usersave" name="save" type="submit" >Save</button> 
                      </div>
          </form>
   </center>
      
 