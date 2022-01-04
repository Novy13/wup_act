<?php
require_once ("../../../include/initialize.php");
	if(!isset($_SESSION['USERID'])){
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

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){

			$autonum = new Autonumber();
			$id = $autonum->set_autonumber("BLOGID");
			$BLOGID = date("Y").$id->AUTO;

			$EVENT_TEXT = $_POST['EVENT_TEXT'];
			$EVENT_WHAT = $_POST['EVENT_WHAT']; 
			$EVENT_WHEN = $_POST['EVENT_WHEN']; 
			$EVENT_WHERE = $_POST['EVENT_WHERE'];

			// $EVENT_WHEN =""; 
			// $EVENT_WHERE ="";

		if ($_POST['EVENT_TEXT'] == "" OR $_POST['EVENT_WHAT'] == "" ){
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$event = New Event();
			$event->EVENTID = $BLOGID;
			$event->EVENT_TEXT = $EVENT_TEXT;
			$event->EVENT_WHAT = $EVENT_WHAT; 
			$event->EVENT_WHEN = $EVENT_WHEN; 
			$event->EVENT_WHERE = $EVENT_WHERE;
			$event->DATEPOSTED = date("Y-m-d H:i:s");
			$event->create();  


			$sql ="INSERT INTO `tblblogpost` (`BLOGID`,`BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`, `CATEGORY`,`AUTHOR`) 
			VALUES('{$BLOGID}','{$EVENT_TEXT}','{$EVENT_WHAT}','{$EVENT_WHEN}','{$EVENT_WHERE}',NOW(),'EVENT','".$_SESSION['NAME']."')";
			$mydb->setQuery($sql);
			//$mydb->executeQuery();

			$sql = "SELECT * FROM tblstudent";
			$mydb->setQuery($sql);
			$cur = $mydb->loadResultList();
			foreach ($cur as $result) {
				# code...
				$IDNO = $result->IDNO;

				$sql ="INSERT INTO `tblstudentnotif` (`BLOGID`,`IDNO`,`TYPE`) 
				VALUES('{$BLOGID}','{$IDNO}','Event')";
				$mydb->setQuery($sql);
				//$mydb->executeQuery();


				$contact = '+63'.substr($result->PHONE, 1);
				# code...
				$query = "INSERT INTO `messageout` (`Id`, `MessageTo`, `MessageFrom`, `MessageText`) 
				VALUES (Null, '".$contact."','Admin','You have an Event notification from WUP-Maria Aurora. <br>Title: ".$EVENT_TEXT." <br>What: ".strip_tags($EVENT_WHAT)." <br>When: ".strip_tags($EVENT_WHEN)." <br>Where: ".strip_tags($EVENT_WHERE)."')";
				$mydb->setQuery($query);
				//$mydb->executeQuery(); 


			}
			
			$sql1 = "SELECT *
					FROM `tblfaculty`";
			$mydb->setQuery($sql1);
			$cur = $mydb->loadResultList();
			foreach ($cur as $result1) {
				# code...
				$IDNO = $result1->IDNO;
 
				$contact = '+63'.substr($result1->PHONE, 1);
				$query = "INSERT INTO `messageout` (`Id`, `MessageTo`, `MessageFrom`, `MessageText`) 
				VALUES (Null, '".$contact."','Admin','You have an Event notification from WUP-Maria Aurora. <br>Title: ".$EVENT_TEXT." <br>What: ".strip_tags($EVENT_WHAT)." <br>When: ".strip_tags($EVENT_WHEN)." <br>Where: ".strip_tags($EVENT_WHERE)."')";
				$mydb->setQuery($query);

		    }

			$autonum = New Autonumber(); 
			$autonum->auto_update("BLOGID");

			message("Event has been posted successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
		global $mydb;
	if(isset($_POST['save'])){  

		$BLOGID = $_POST['EVENTID'];

			$EVENT_TEXT = $_POST['EVENT_TEXT'];
			$EVENT_WHAT = $_POST['EVENT_WHAT']; 
			$EVENT_WHEN = $_POST['EVENT_WHEN']; 
			$EVENT_WHERE = $_POST['EVENT_WHERE'];
			// $EVENT_WHEN =""; 
			// $EVENT_WHERE ="";

			if ($_POST['EVENT_TEXT'] == "" OR $_POST['EVENT_WHAT'] == ""){
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$event = New Event(); 
			$event->EVENT_TEXT = $EVENT_TEXT;
			$event->EVENT_WHAT = $EVENT_WHAT; 
			$event->EVENT_WHEN = $EVENT_WHEN; 
			$event->EVENT_WHERE = $EVENT_WHERE;
			$event->update($BLOGID);  

			$sql ="UPDATE `tblblogpost` SET `BLOGS`='{$EVENT_TEXT}', `BLOG_WHAT`='{$EVENT_WHAT}', `BLOG_WHEN`='{$EVENT_WHEN}', `BLOG_WHERE`='{$EVENT_WHERE}'  WHERE`BLOGID`='{$BLOGID}'";
			$mydb->setQuery($sql);
			$mydb->executeQuery();

			 message("Event has been updated!", "success");
			redirect("index.php");
			 
			}
		}
	}


	function doDelete(){
		
	 		global $mydb;
				$BLOGID = 	$_GET['id'];

				$event = New Event();
	 		 	$event->delete($BLOGID);

	 		 	$sql ="DELETE FROM `tblblogpost`  WHERE`BLOGID`='{$BLOGID}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();
			 
			message("Event has been removed!","info");
			redirect('index.php');
		 
		
	}

	 
 
?>