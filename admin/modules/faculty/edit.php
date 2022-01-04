<?php  
  @$IDNO = $_GET['id'];
 @$syid = $_GET['sy'];
  if($IDNO=='' ){
  redirect("index.php");
}
  $faculty = New Faculty();
  $singlefaculty = $faculty->single_faculty($IDNO);
 

  ?>

 
 <style type="text/css">
.sidebar-left .main{
  float:right;
}
.idebar-left .sidebar{
  float:left;
}

.sidebar-right .main{
  float:left;
}
.idebar-right .sidebar{
  float:right;
}
 
</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>    
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  />
  
        
          <div class="row">
         <div class="col-lg-12">
          <br>
            <h3>Edit Faculty</h3>
            <br>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                
                         <input  id="IDNO" name="IDNO"  type="hidden" value="<?php echo $singlefaculty->IDNO; ?>"> 
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">First Name:</label>&nbsp;   
                         <input class="form-control input-sm" id="FNAME" name="FNAME"   type="text" value="<?php echo $singlefaculty->FNAME; ?>" required>
                      </div>
                    </div>
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Middle Name:</label>&nbsp;   
                         <input class="form-control input-sm" id="MNAME" name="MNAME"   type="text" value="<?php echo $singlefaculty->MNAME; ?>" required>
                      </div>
                    </div>
                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Last Name:</label>&nbsp;   
                         <input class="form-control input-sm" id="LNAME" name="LNAME"   type="text" value="<?php echo $singlefaculty->LNAME; ?>" required>
                      </div>
                    </div>

                   <div class="col-md-4">
                    <div class="form-group">
                     <label style="color: black;">Contact No.:</label>&nbsp;   
                         <input class="form-control input-sm" id="PHONE" name="PHONE"  maxlength="11" type="text" value="<?php echo $singlefaculty->PHONE; ?>" required>
                      </div>
                    </div>
 
                    <div class="col-md-9"> 
                        <button class="btn btn-primary btn-round" name="save" type="submit" >Save</button>  
                      </div>
    </form>
  </center>