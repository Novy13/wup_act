<?php
require_once ("../../../include/initialize.php");
	 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;
 
	}

   
function doInsert(){
	if(isset($_POST['studsave'])){
	 	 	
					if ($_POST['FNAME'] == "" OR $_POST['PHONE'] == "") {
					$messageStats = false;
					message("All fields are required!","error");
					redirect('index.php?view=add');
					}else{ 


						$IDNO = 0;
						$student = New Student();
						$student->IDNO          = $_POST['IDNO'];
						$student->FNAME         = $_POST['FNAME'];
						$student->MNAME         = $_POST['MNAME'];
						$student->LNAME         = $_POST['LNAME'];
						$student->DEPARTMENT    = $_POST['DEPARTMENT'];
						$student->COURSE       	= $_POST['COURSE'];
						$student->YLVL			= $_POST['YLVL'];
						$student->SEC_BLOCK		=$_POST['SEC_BLOCK'];
						$student->PHONE         = $_POST['PHONE'];  
						$student->USERNAME      = $_POST['USERNAME'];
						$student->STUDPASS      = $_POST['STUDPASS'];
						// $student->PROIMAGE       = $location;
						$student->create(); 



						message("New [". $_POST['FNAME'] ."] created successfully!", "success");
						redirect("index.php");
						 }
							
					}
	 
	  }
 
	function doEdit(){
		if(isset($_POST['save'])){

			
			$student = New Student(); 
			$student->FNAME         = $_POST['FNAME']; 
			$student->PHONE         = $_POST['PHONE'];  
			$student->DEPARTMENT    = $_POST['DEPARTMENT'];
			$student->COURSE        = $_POST['COURSE']; 
			$student->YLVL			= $_POST['YLVL'];
			$student->update($_POST['IDNO']);


 	
 

			message("[". $_POST['FNAME'] ."] has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){

  

		if (isset($_POST['selector'])==''){
			message("Select the records first before you delete!","error");
			redirect('index.php');
			}else{

			$id = $_POST['selector'];
			$key = count($id);

			for($i=0;$i<$key;$i++){ 

			$student = New Student();
			$student->delete($id[$i]);

		
			message("Student Record has been Deleted!","info");
			redirect('index.php');

			}
		}

	}
		 
	function doupdateimage(){


// 		$fp = fopen($_FILES['photo']['tmp_name'], "r");
 
// if ($fp) {
 
//      $content = fread($fp, $_FILES['photo']['size']);
 
//      fclose($fp);
 
//      $content = addslashes($content);

       
// 	$student = New Student();
// 	$student->STUDPIC 			=  $content;
// 	$student->update($_POST['MIDNO']);
// 	redirect("index.php?view=view&id=".$_POST['MIDNO']."&sy=".$_POST['SYID']);

 
   
 // 	 $image = $_FILES['photo'] ;
 //        // print_r($image);
 //        $name = $_FILES['photo']['name'] ;
 //        $image = addslashes(file_get_contents($_FILES['photo']['tmp_name'])) ; 

	// $student = New Student();
	// $student->PROIMAGE 			=  $name;
	// $student->image 			=  $image;
	// $student->update($_POST['MIDNO']);
 
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location=  "student_image/".$myfile;

		  


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=".$_POST['MIDNO']."&sy=".$_POST['SYID']);
		}else{
	 
				@$file= $_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=".$_POST['MIDNO']."&sy=".$_POST['SYID']);
			}else{
				

					//uploading the file
				 move_uploaded_file($temp, "student_image/" . $myfile);
		 	
					$student = New Student();
					$student->PROIMAGE 			= $location;
					$student->image 			=  $image;
					$student->update($_POST['MIDNO']);

						// $student = New Student();
						// $student->STUDPIC 			= $_FILES['photo']['name'];
						// $student->update($_POST['MIDNO']);

						redirect("index.php?view=view&id=".$_POST['MIDNO']."&sy=".$_POST['SYID']);
						 
							
					}
			}
			 
		} 
 
?>