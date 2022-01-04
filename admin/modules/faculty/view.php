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
  <br>
         <div class="col-lg-12">
           <br>
            <h4 >Faculty Profile</h4>
          </div>
          <!-- /.col-lg-12 -->
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
                    <!--<div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Department </strong>
                      <?php
                        $query = "SELECT * FROM tblstudent s, tbldepartment d WHERE  s.DEPARTMENT=d.DEPARTMENTID";
                        $mydb->setQuery($query);
                        $cur = $mydb->loadResultList();
              
                        foreach ($cur as $result) {

                        echo $result->DEPARTMENT; // Result from JOINING THE TABLE of DEPT & STUD

               }   

               ?> 
                      </div> 
                    -->
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
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Middle Name </strong> 
                     <?php echo ': '.$singlefaculty->MNAME; ?>   
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Last Name </strong> 
                     <?php echo ': '.$singlefaculty->LNAME; ?>   
                      </div>
                    </div>
                   </div>
                 </li>

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
             