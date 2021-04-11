                      <?php 
                         // if (!isset($_SESSION['TYPE'])=='Administrator'){
                         //      redirect(web_root."index.php");
                         //     }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatedpass()">
           <div class="row">
         <div class="col-lg-12">
            <h3 >Add New User</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                    <!-- <div class="row">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label>

                      <div class="col-md-8"> --> 
                        <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                    <!--   </div>
                    </div>
                  </div> -->           
                  
                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Name:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_name" name="user_name"   type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Username:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_email" name="user_email" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Password:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_pass" name="user_pass"  type="Password" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Retype Password:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass"  type="Password" value="">
                      </div>
                    </div>
                  </div> 
            
             <div class="row">
                    <div class="col-md-8"> 
                       <button class="btn btn-primary btn-round" id="usersave" name="save" type="submit" ><strong>Save</strong></button>  
                       </div>
                    </div> 

          
          
        </form>
       