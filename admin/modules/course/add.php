                      <?php 
                         if (!isset($_SESSION['USERID'])){
                              redirect(web_root."admin/index.php");
                             }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h3>New Course / Strand</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                
                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Code:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="COURSE" name="COURSE"  type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Description:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION"  type="text" value="">
                      </div>
                    </div>
                  </div>
 
            
             <div class="row">
                    <div class="col-md-8"> 
                       <button class="btn btn-primary btn-round" name="save" type="submit" ><strong>Save</strong></button> 
                         </div>
                    </div> 

               
          
        </form>
      
 