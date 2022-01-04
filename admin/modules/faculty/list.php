<?php
		check_message(); 
		?>  
		 <link rel="stylesheet" type="text/css" href="adminMenu/css/style.css">
  <div class="row">
      <div class="col-lg-12"> 
            <h3 >List of Faculty <small>|  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |</small></h3> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>#</th>
				  		<th  width="50"><!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> -->School Id</th>
				  		 <!-- <th>PICTURE</th> -->
				  		  <th>Name</th>
				  		 <!-- <th>LASTNAME</th> -->
				  		 <!-- <th>CITYADDRESS</th> -->
				  		 <!--<th>Course</th> -->
				  		<!--<th>Department</th> -->
				  		<th>Contact#</th> 
				  		<th width="10%">Action</th> 
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblfaculty` ";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="5%" align="center"></td>';
				  		// echo '<td  width="13%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>' .$result->IDNO .'</td>';
				  		echo '<td  width="13%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>'.$formatted = preg_replace("/^(\d{2})(\d{4})(\d{3})$/", "$1-$2-$3", $result->IDNO);'</td>';

				  		// echo '<td ><a href="index.php?view=view&id="><img src="'. $result->image.'" width="60" height="60" title="'.$result->LNAME.'"/></a></td>';
				  		echo '<td>'. $result->FNAME ." ".$result->MNAME." ".$result->LNAME. '</td>';
				  		// echo '<td>'. $result->LASTNAME.'</td>';
				  		// echo '<td>'. $result->CITYADDRESS.'</td>'; 
				  		//echo '<td>'.$result->DESCRIPTION . '</td>'; 
				  		//echo '<td>'. $result->DEPARTMENT.'</td>';  
				  		echo '<td>'. $result->PHONE.'</td>';
				  		echo '<td  width="10%" > 

				  		<a title="Edit" href="index.php?view=edit&id='.$result->IDNO.'" class="btn btn-primary btn-xs" ><i class="fa fa-pencil fa-fw"></i></a>

				  		<a title="View Inormation" href="index.php?view=view&id='.$result->IDNO.'" class="btn btn-success btn-xs "><i class="fa fa-info fa-fw"></i></a></td>';
				  		// echo '<td  width="10%" ><a title="View Inormation" href="index.php?view=view&id='.$result->IDNO.'" class="btn btn-success btn-xs "><i class="fa fa-info fa-fw"></i></a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				</table>
				<div>
				  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
            Delete Selected
        </button>
				  	<div id="myModal" class="modal fade">
							<div class="modal-dialog modal-confirm">
								<div class="modal-content">
								<div class="modal-header flex-column">
								<div class="icon-box">

								</div>						
								<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">
								<p>Do you really want to delete these records? This process cannot be undone.</p>
								</div>
								<div class="modal-footer justify-content-center">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-danger" name="delete">Delete</button>
						</div>
					</div>
			</div>
		</div>     
	</div>
</form> 