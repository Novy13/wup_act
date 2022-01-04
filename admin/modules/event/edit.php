<?php  
    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $event = New Event();
  $res = $event->single_event($id);

?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
    font-family: 'Varela Round', sans-serif;
}
</style>
<center>  
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <br>
            <h3>Update Event</h3>
            <br>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                
                   
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Title:</label>&nbsp;  
                        <input name="EVENTID" type="hidden" value="<?php echo $res->EVENTID ; ?>">
                         <input class="form-control input-sm" id="EVENT_TEXT" name="EVENT_TEXT" type="text" value="<?php echo $res->EVENT_TEXT ; ?>">
                      </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Body:</label>&nbsp;  
                            <textarea  class="form-control input-sm" id="EVENT_WHAT" name="EVENT_WHAT" ><?php echo $res->EVENT_WHAT; ?></textarea>
                        
                      </div>
                    </div>
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">When (mm/dd/yyyy hh:mm) :</label>&nbsp;  
                          <div class='input-group date'>
                            <input type='text' id="datetimepicker2" name="EVENT_WHEN" class="form-control TRANSDATE" value="<?php echo $res->EVENT_WHEN;?>" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Location:</label>&nbsp;  
                           <input class="form-control input-sm" id="EVENT_WHERE" name="EVENT_WHERE" type="text" value="<?php echo $res->EVENT_WHERE ; ?>">
                      </div>
                    </div>

                    <div class="col-md-4"> 
                       <button class="btn btn-primary btn-rowund" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                       </div>
 
        </form>
 </center>