<?php  
    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

  @$dept_id = $_GET['id'];
    if($dept_id==''){
  redirect("index.php");
}
  $dept = New Department();
  $singledepartment = $dept->single_departments($dept_id);

?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center> 
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <br>
            <h3  >Update Department</h3>
            <br>
          </div>
          <!-- /.col-lg-12 -->
       </div>      
                 <input id="DEPT_ID" name="DEPT_ID"  
                 type="Hidden" value="<?php echo $singledepartment->DEPARTMENTID; ?>">
                  
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Department:</label>&nbsp;  
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="DEPARTMENT_NAME" name="DEPARTMENT_NAME"  type="text" value="<?php echo $singledepartment->DEPARTMENT; ?>">
                      </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Description:</label>&nbsp;   
                        <textarea class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" type="text" ><?php echo $singledepartment->DESCRIPTION; ?></textarea>
                        </div>
                    </div>

 
                    <div class="col-md-8"> 
                         <button class="btn btn-primary " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button> 
                    </div>
        </form>
</center>
       