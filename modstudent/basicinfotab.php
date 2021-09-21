 <div class="container"> 
  <div class="row">        
     <form class="form-horizontal span3" action="controller.php?action=edit" method="POST">
          <ul class="list-group" id="accordion">    
                <li class="list-unstyled text-left panel">
                  <div class="header">
                      <p><h3>STUDENT CREDENTIALS</h3></p>
                  </div>
                  <br>
                 <div class="panel-heading">First Name :  
                  <?php echo  $singlestudent->FNAME; ?>
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Edit <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>
                 <div id="collapseTwo" class="panel-collapse collapse">
                   <div class="panel-body">
                        <div class="form-group">
                          <div class="col-lg-12">
                            <label class="col-lg-4 control-label" for=
                            "FNAME">First Name:</label>
                            <div class="col-lg-12">
                               <input class="form-control input-xs" id="FNAME" name="FNAME" placeholder=
                                  "First Name" type="text" value="<?php echo  $singlestudent->FNAME; ?>">
                            </div>
                          </div>
                        </div>
                   </div>
                 </div>
                 <br>
                  <div class="panel-heading">Middle Name :  
                  <?php echo  $singlestudent->MNAME; ?>
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Edit <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>
                 <div id="collapseTwo" class="panel-collapse collapse">
                   <div class="panel-body">
                        <div class="form-group">
                          <div class="col-lg-12">
                            <label class="col-lg-4 control-label" for=
                            "MNAME">Middle Name:</label>
                            <div class="col-lg-12">
                               <input class="form-control input-xs" id="MNAME" name="MNAME" placeholder=
                                  "Middle Name" type="text" value="<?php echo  $singlestudent->MNAME; ?>">
                            </div>
                          </div>
                        </div>
                   </div>
                 </div>
                  <br>
                  <div class="panel-heading">Last Name :  
                  <?php echo  $singlestudent->LNAME; ?>
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Edit <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>
                 <div id="collapseTwo" class="panel-collapse collapse">
                   <div class="panel-body">
                        <div class="form-group">
                          <div class="col-lg-12">
                            <label class="col-lg-4 control-label" for=
                            "LNAME">Last Name:</label>
                            <div class="col-lg-12">
                               <input class="form-control input-xs" id="LNAME" name="LNAME" placeholder=
                                  "Last Name" type="text" value="<?php echo  $singlestudent->LNAME; ?>">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-lg-12">
                          <label class="col-lg-4 control-label" for=
                          "idno"></label> 
                          <div class="col-lg-8"> 
                            <button class="btn btn-primary" name="btnname" type="submit" ><strong>Save</strong></button>
                         </div>
                        </div>
                      </div>   
                   </div>
                 </div>    
               </li>
               <br>
                <li class="list-unstyled text-left panel">
                 <div class="panel-heading">Contact Number 
                  <?php echo ': '.$singlestudent->PHONE; ?>
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Edit <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>   
                 <div id="collapseSeven" class="panel-collapse collapse">
                   <div class="panel-body">
                    

                      <div class="form-group">
                        <div class="col-lg-12">
                          <label class="col-lg-4 control-label" for=
                          "PHONE"> Contact #:</label>

                          <div class="col-lg-8">
                             <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                                "Contact Number" type="text" value="<?php echo $singlestudent->PHONE; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-lg-12">
                          <label class="col-lg-4 control-label" for=
                          "idno"></label>

                          <div class="col-lg-8"> 
                            <button class="btn btn-primary" name="btnphone" type="submit" ><strong>Save</strong></button>
                         </div>
                        </div>
                      </div> 

                     
                  </div>
                 </div> 
               </li>
                <br>
               <li class="list-unstyled text-left panel">
                 <div class="panel-heading">Password :  
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Change Password <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>   
                 <div id="collapseNine" class="panel-collapse collapse">
                   <div class="panel-body">
                  

                      <div class="form-group">
                        <div class="col-lg-8">
                         <label class="col-lg-4 control-label" for=
                          "STUDPASS">Current:</label>
                          <div class="col-lg-8">
                           <input size="50"  class="form-control input-sm" name="STUDPASS" type="password"/>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-lg-8">
                         <label class="col-lg-4 control-label" for=
                          "NEWSTUDPASS">New:</label>
                          <div class="col-lg-8">
                          <input size="50"  class="form-control input-sm" name="NEWSTUDPASS" type="password"/>
                           </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <div class="col-lg-8">
                          <label class="col-lg-4 control-label" for=
                          "idno"></label>

                          <div class="col-lg-8"> 
                            <button class="btn btn-primary" name="btnpass" type="submit" ><strong>Save</strong></button>
                         </div>
                        </div>
                      </div>

                    
                   </div>
                 </div> 
               </li> 
             </ul>  
            </form>
    </div>
 </div>