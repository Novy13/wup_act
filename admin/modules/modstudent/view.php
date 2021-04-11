<?php  
  @$IDNO = $_GET['id'];
  @$syid = $_GET['sy'];
    if($IDNO==''){
      redirect("index.php");
    }
  $student = New Student();
  $singlestudents = $student->single_students($IDNO); 
  ?>
  
<div class="row">
         <div class="col-lg-12">
            <h3 >Student Profile</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div>
 
        <div class="col-sm-3"><!--left col-->
               <div class="panel panel-default">            
            <div class="panel-body">
          <!--    <a href="" data-target="#myModal"  data-toggle="modal" > 
              <img title="profile image" width="223" height="250" src="<?php echo web_root.'admin/modules/modstudent/'.$singlefaculty->PROIMAGE ?>">  
            </a> --> 
              <img title="profile image" width="100%" height="40%" src="<?php echo web_root.'admin/modules/modstudent/'.$singlestudents->PROIMAGE ?>">   
             </div>
          <ul class="list-group">
       
         
            <li class="list-group-item text-muted">Photo</li> 
            <li class="list-group-item text-right">
            <span class="pull-left"><strong>Real name</strong></span> 
            <strong><?php echo $singlestudents->FNAME ; ?></strong>
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
                      <?php echo ': '.$formatted = preg_replace("/^(\d{2})(\d{4})(\d{3})$/", "$1-$2-$3", $singlestudents->IDNO);; ?>
                      </div> 
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Department </strong>
                      <?php echo ': '.$singlestudents->DEPARTMENT; ?>
                      </div> 
                    </div> 
               </div>
                </li> 
                  <li class="list-unstyled text-left"> 
                  <div class="row"> 
                   <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                      <strong>Year Level</strong>
                         <?php echo ': '.$singlestudents->YLVL; ?>
                     </div>
                    </div>
                  </div>  
                  </li>
                  </li> 
                  <li class="list-unstyled text-left"> 
                  <div class="row"> 
                   <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                      <strong>COURSE / STRAND</strong>
                         <?php echo ': '.$singlestudents->COURSE; ?>
                     </div>
                    </div>
                  </div>  
                  </li>
                   
                  <li class="list-unstyled text-left"> 
                  <div class="row"> 
                   <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                      <strong>Contact Number</strong>
                         <?php echo ': '.$singlestudents->PHONE; ?>
                     </div>
                    </div>
                  </div>  
                  </li>

                </ul> 
             