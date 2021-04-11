<?php  
  @$IDNO = $_GET['id'];
  @$syid = $_GET['sy'];
    if($IDNO==''){
      redirect("index.php");
    }
  $faculty = New Faculty();
  $singlefaculty = $faculty->single_faculty($IDNO); 
  ?>
  
<div class="row">
         <div class="col-lg-12">
            <h3 >Faculty Profile</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div>
 
        <div class="col-sm-3"><!--left col-->
               <div class="panel panel-default">            
            <div class="panel-body">
          <!--    <a href="" data-target="#myModal"  data-toggle="modal" > 
              <img title="profile image" width="223" height="250" src="<?php echo web_root.'admin/modules/modfaculty/'.$singlefaculty->PROIMAGE ?>">  
            </a> --> 
              <img title="profile image" width="100%" height="40%" src="<?php echo web_root.'admin/modules/modfaculty/'.$singlefaculty->PROIMAGE ?>">   
             </div>
          <ul class="list-group">
       
         
            <li class="list-group-item text-muted">Photo</li> 
            <li class="list-group-item text-right">
            <span class="pull-left"><strong>Real name</strong></span> 
            <strong><?php echo $singlefaculty->FNAME ; ?></strong>
            </li>
            
          </ul> 
               
            
          </div>
          
        </div> 
        <div class="col-sm-9">
        <?php
        check_message();
            
        ?>

            
             <ul class="list-group bottomline">  
               <li class="list-unstyled text-left">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Id Number </strong>
                      <?php echo ': '.$formatted = preg_replace("/^(\d{2})(\d{4})(\d{3})$/", "$1-$2-$3", $singlefaculty->IDNO);; ?>
                      </div> 
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Department </strong>
                      <?php echo ': '.$singlefaculty->DEPARTMENT; ?>
                      </div> 
                    </div> 
               </div>
                </li> 

                  <li class="list-unstyled text-left">
                    <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>First Name </strong> 
                     <?php echo ': '.$singlefaculty->FNAME; ?>   
                      </div>
                    </div>
                   
                  <li class="list-unstyled text-left"> 
                  <div class="row"> 
                   <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                      <strong>Contact Number</strong>
                         <?php echo ': '.$singlefaculty->PHONE; ?>
                     </div>
                    </div>
                  </div>  
                  </li>

                </ul> 
             