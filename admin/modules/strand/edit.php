<?php  
   // if (!isset($_SESSION['TYPE'])=='Administrator'){
   //    redirect(web_root."index.php");
   //   }

  @$strandid = $_GET['id'];
    if($strandid==''){
  redirect("index.php");
}
  $strand = New Strand();
  $singlestrand = $strand->single_strand($strandid);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

              <div class="row">
         <div class="col-lg-12">
            <h3 >Edit Strand</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                 
                           <input class="form-control input-sm" id="strandid" name="strandid" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $singlestrand->STRANDID; ?>">
                      
                 
                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Strand:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="STRAND" name="STRAND"  type="text" value="<?php echo $singlestrand->STRAND; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Description:</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="DESCRIPTION1" name="DESCRIPTION1"  type="text" value="<?php echo $singlestrand->DESCRIPTION1; ?>">
                      </div>
                    </div>
                  </div>

                 
            
             <div class="row">
                    <div class="col-md-11"> 
                         <button class="btn btn-primary btn-round" name="save" type="submit" >Save</button>
                         </div>
                    </div> 
              
       
 
        </form>
       