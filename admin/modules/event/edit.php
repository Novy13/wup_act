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

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <h3>Update Event</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                
                   
                 <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Title:</label> 
                        <input name="EVENTID" type="hidden" value="<?php echo $res->EVENTID ; ?>">
                         <input class="form-control input-sm" id="EVENT_TEXT" name="EVENT_TEXT" type="text" value="<?php echo $res->EVENT_TEXT ; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Body:</label> 
                            <textarea  class="form-control input-sm" id="EVENT_WHAT" name="EVENT_WHAT" ><?php echo $res->EVENT_WHAT; ?></textarea>
                        
                      </div>
                    </div>
                  </div>

                <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">When (mm/dd/yyyy hh:mm) :</label> 
                          <div class='input-group date'>
                            <input type='text' id="datetimepicker2" name="EVENT_WHEN" class="form-control TRANSDATE" value="<?php echo $res->EVENT_WHEN;?>" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>
                  </div>


             <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Location:</label> 
                           <input class="form-control input-sm" id="EVENT_WHERE" name="EVENT_WHERE" type="text" value="<?php echo $res->EVENT_WHERE ; ?>">
                      </div>
                    </div>
                  </div>


   
 
                 

            
             <div class="row">
                    <div class="col-md-11"> 
                       <button class="btn btn-primary btn-rowund" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                       </div>
                    </div> 
 
        </form>
       