                      <?php 
                    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

      <div class="row">
         <div class="col-lg-12">
            <h3>Post New Event</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                      
                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Title:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="EVENT_TEXT" name="EVENT_TEXT" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Body:</label>
                        <input name="deptid" type="hidden" value="">
                        <textarea  class="form-control input-sm" id="EVENT_WHAT" name="EVENT_WHAT"></textarea> 
                      </div>
                    </div>
                  </div>

                <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">When (mm/dd/yyyy hh:mm):</label> 
                     <br>
                          <div class='input-group date' >
                            <input type='datetime-local' id='datetimepicker2' name="EVENT_WHEN" class="form-control input-group date TRANSDATE" />
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
                     <label class="bmd-label-floating">Where (Location) :</label>
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="EVENT_WHERE" name="EVENT_WHERE" type="text" value="">
                      </div>
                    </div>
                  </div>
                  <br>
            
             <div class="row"> 
                   <div class="col-md-11">

                      <div class="col-md-11">
                        <p> Filter Receivers</p>
                        <input type="radio" id="JHS" name="dept" value="JHS">
                          <label for="JHS">JHS</label><br>
                        <input type="radio" id="JHS" name="dept" value="JHS">
                          <label for="JHS">SHS</label><br>
                         <input type="radio" id="JHS" name="dept" value="JHS">
                          <label for="JHS">College</label><br>
                        <input type="radio" id="JHS" name="dept" value="JHS">
                          <label for="JHS">All</label><br>                       
                      </div>
                      <br>
                       <button class="btn btn-primary btn-round" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Post</button>  
                  </div> 
                </div>
        </form> 