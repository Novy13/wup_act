<?php
require_once ("../include/initialize.php");
	 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
 
	
	case 'edit' :
	doEdit();
	break; 

	case 'photos' :
	doupdateimage();
	break;

	}

 
 
	function doEdit(){
		if(isset($_POST['save'])){

			$work = New Work(); 
			$work->COMPANY 			= $_POST['COMPANY'];
			$work->COMADDRESS 		= $_POST['ADDRESS'];
			$work->DATEHIRED 		= date_format(date_create($_POST['DATEHIRED']),'Y-m-d h:i:s');
			$work->STATUS 			= $_POST['STATUS'];
			$work->ANNUALINCOME 	= $_POST['ANNUALINCOME']; 
			$work->update($_POST['WORKID']);

			keyactive("work");

			message("[". $_POST['COMPANY'] ."] has been updated!", "success");
			redirect("index.php");
		} 

		$student = New Student();
		if(isset($_POST['btnname'])){		
			$student->FNAME = $_POST['FNAME'];	
			$student->MNAME = $_POST['MNAME'];	
			$student->LNAME = $_POST['LNAME'];		
			$student->update($_SESSION['IDNO']);
			keyactive("basicInfo");	
			redirect("index.php");			 
		}
		
		if(isset($_POST['btnadd'])){				 
			$student->ADDRESS = $_POST['ADDRESS'];				
			keyactive("basicInfo");
			$student->update($_SESSION['IDNO']);
			redirect("index.php");
		}
		if(isset($_POST['btnreligion'])){				 
			$student->RELIGION = $_POST['RELIGION'];
			keyactive("basicInfo");	
			$student->update($_SESSION['IDNO']);	
			redirect("index.php");		
		}
		if(isset($_POST['btncivilstatus'])){				 
			$student->STATUS = $_POST['CIVILSTATUS'];		
			keyactive("basicInfo");	
			$student->update($_SESSION['IDNO']);
			redirect("index.php");			
		}
		if(isset($_POST['btnphone'])){				 
			$student->PHONE = $_POST['PHONE'];	
			keyactive("basicInfo");	
			$student->update($_SESSION['IDNO']);
			redirect("index.php");		
		}
		if(isset($_POST['btnemail'])){				 
			$student->EMAILADD = $_POST['EMAILADD'];	
			keyactive("basicInfo");	
			$student->update($_SESSION['IDNO']);
			redirect("index.php");		
		}

		if(isset($_POST['btnpass'])){

			$singlestud=$student->find_pass($_SESSION['IDNO'],sha1($_POST['STUDPASS']));

		// echo  $singlestud;
			 if($singlestud==1){
					$student->STUDPASS = $_POST['NEWSTUDPASS'];	 
					$student->update($_SESSION['IDNO']);
						message("Password has successfully changed.","success");
						keyactive("basicInfo");	
					 	redirect("index.php");
			}else{
				message("Your current password did not match to the input password!","error");
				keyactive("basicInfo");	
				redirect("index.php");
			}		

		 		
		}
		 
		 
	}

function doupdateimage(){
 
 
		$filename = UploadImage();
		$location = "student_image/". $filename ;
		$student = New Student();
		$student->PROIMAGE 	= $location;
		$student->update($_SESSION['IDNO']);
		redirect("index.php?view=view&id=".$_SESSION['IDNO']);
			 
 }

function UploadImage(){
			$target_dir = "student_image/";
		    $target_file ="../admin/modules/modstudent/". $target_dir  . basename($_FILES["file"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			
			if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg"
				|| $imageFileType != "gif" || $imageFileType != "docs" || $imageFileType != "mp4") {
				 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					return   basename($_FILES["file"]["name"]);
				}else{
					echo "Error Uploading File";
					exit;
				}
			}else{
					echo "File Not Supported";
					exit;
	 }
} 
 
 
?>