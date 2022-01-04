                      <?php 
                         if (!isset($_SESSION['USERID'])){
                              redirect(web_root."admin/index.php");
                             }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
   <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

      <div class="row">
         <div class="col-lg-12">
            <br>
            <h3>New Course / Strand</h3>
            <br>
          </div>
       </div>

             <div class="col-md-5">
                    <div class="form-group">
                     <label style="color: black;">Code:</label>&nbsp; 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="COURSE" name="COURSE"  type="text" value="">
                      </div>
                    </div>

                   <div class="col-md-5">
                    <div class="form-group">
                     <label style="color: black;">Description:</label>&nbsp; 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION"  type="text" value="">
                      </div>
                    </div>  
                    <div class="col-md-8"> 
                       <button class="btn btn-primary btn-round" name="save" type="submit" ><strong>Save</strong></button> 
                         </div>
        </form>
</center>
      
 