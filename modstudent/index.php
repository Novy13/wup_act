<?php
require_once("../include/initialize.php");
if(!isset($_SESSION['IDNO'])){
	redirect(web_root.'index.php');
}

	# code...

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : ''; 
	switch ($view) {

	case 'list' :
		$content    = 'profile.php';		
		break;

	case 'add' :
		$content    = 'profile.php';		
		break;

	case 'edit' :
		$content    = 'profile.php';		
		break;

	default :
		$content    = 'profile.php';
	}

   
require_once ("../themes/templates.php");
?>
  
