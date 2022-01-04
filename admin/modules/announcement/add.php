                      <?php 
                    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
 <form class="form-group" action="controller.php?action=add" method="POST">
        <div class="row">
      <div class="col-lg-12">
        <br>
            <h3 class="">Post New Announcement</h3>
        <br>
          </div>
          <!-- /.col-lg-12 -->
       </div>   
                <div >
                    <div class="col-md-5"> 
                    <div class="form-group">
                      <br>
                     <label style="color: black;">Title:</label>&nbsp;  
                            <input class="form-control " id="ANNOUNCEMENT_TEXT" name="ANNOUNCEMENT_TEXT" type="text" value="">
                        </div>
                    </div>
                  </div>


                  <div >
                    <div class="col-md-5">
                    <div class="form-group">
                        <label style="color: black;">Body:</label>&nbsp;  
                            <textarea  class="form-control " id="ANNOUNCEMENT_WHAT" name="ANNOUNCEMENT_WHAT"></textarea>
                          </div>
                      </div>
                  </div>     
                   <div>
                    <div class="col-sm-5">
                      <div class="form-group">
                      <label style="color: black;" >When (mm/dd/yyyy hh:mm):</label>&nbsp;  
                      <br>
                          <div class='input-group date' >
                            <input type='datetime-local' id='datetimepicker2' name="ANNOUNCEMENT_WHEN" class="form-control input-group date TRANSDATE" />
                              <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>
                  </div>
               <div >
                <div class="col-md-5">
                 <div class="form-group">
                      <label style="color: black;" >Where(Location) :</label>&nbsp; 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control " id="ANNOUNCEMENT_WHERE" name="ANNOUNCEMENT_WHERE"  type="text" value="">
                      </div>
                    </div>
                  </div>
                  <br>
             <div class="row">
                    <div class="col-md-11"> 
                       <button class="btn btn-primary btn-round" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Post</button> 

                       </div>
                    </div>

                  </form>
                  </center>