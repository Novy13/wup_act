<?php
require_once ("../../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

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

	case 'assign':
	doassignsubj();
	break;

	case 'delsubj':
	doDelsubj();
	break;
	case 'grade':
	savegrade();
	break;
	}
   
	function doInsert(){
		if(isset($_POST['save'])){

 
			$strand = New Strand(); 
			$strand->STRAND 			= $_POST['STRAND'];
			$strand->DESCRIPTION1		= $_POST['DESCRIPTION1']; 
			$strand->create(); 

			message("New [". $_POST['STRAND'] ."] created successfully!", "success");
			redirect("index.php");
		 
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

			$strand = New Strand(); 
			$strand->STRAND 			= $_POST['STRAND'];
			$strand->DESCRIPTION1		= $_POST['DESCRIPTION1'];  
			$strand->update($_POST['strandid']);

			  message("[". $_POST['STRAND'] ."] has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){
		
		 
		
				$id = 	$_GET['id'];

				$course = New Strand();
	 		 	$course->delete($id);
			 
			message("Strand already Deleted!","info");
			redirect('index.php');
	 
		
	}
?>