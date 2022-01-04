<?php  
    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $announcement = New Announcement();
  $res = $announcement->single_announcement($id);

?> 
  <style type="text/css">
  .row {
    margin-bottom: 10px;
  }
  </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>  
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <br>
            <h3 class="">Update Announcement</h3>
            <br>
          </div>
          <!-- /.col-lg-12 -->
       </div> 


                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Title:</label>&nbsp; 
                        <input name="ANNOUNCEMENTID" type="hidden" value="<?php echo $res->ANNOUNCEMENTID ; ?>">
                           <input class="form-control input-sm" id="ANNOUNCEMENT_TEXT" name="ANNOUNCEMENT_TEXT"  type="text" value="<?php echo $res->ANNOUNCEMENT_TEXT ; ?>">
                        </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Body:</label>&nbsp; 
                          <textarea  class="form-control input-sm" id="ANNOUNCEMENT_WHAT" name="ANNOUNCEMENT_WHAT"><?php echo $res->ANNOUNCEMENT_WHAT; ?></textarea>
                        </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">When (mm/dd/yyyy hh:mm) :</label>&nbsp; 
                          <div class='input-group date'>
                            <input type='text' id="datetimepicker2" name="ANNOUNCEMENT_WHEN" class="form-control TRANSDATE" value="<?php echo $res->ANNOUNCEMENT_WHEN;?>" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Location:</label>&nbsp; 
                           <input class="form-control input-sm" id="ANNOUNCEMENT_WHERE" name="ANNOUNCEMENT_WHERE"  type="text" value="<?php echo $res->ANNOUNCEMENT_WHERE ; ?>">
                      </div>
                    </div>

             <div> 
                       <button class="btn btn-primary btn-round" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>  
             </div> 

        </form>
 </center>
       
                
                 