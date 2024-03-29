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
			
			$ANNOUNCEMENT_TEXT = $_POST['ANNOUNCEMENT_TEXT'];
			$ANNOUNCEMENT_WHAT = $_POST['ANNOUNCEMENT_WHAT']; 
			$ANNOUNCEMENT_WHEN = $_POST['ANNOUNCEMENT_WHEN']; 
			$ANNOUNCEMENT_WHERE = $_POST['ANNOUNCEMENT_WHERE'];

			// $ANNOUNCEMENT_WHEN = ""; 
			// $ANNOUNCEMENT_WHERE = "";

		if ($_POST['ANNOUNCEMENT_TEXT'] == "" OR $_POST['ANNOUNCEMENT_WHAT'] == "" ){
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$annoucement = New Announcement();
			$annoucement->ANNOUNCEMENTID 	= $BLOGID;
			$annoucement->ANNOUNCEMENT_TEXT = $ANNOUNCEMENT_TEXT;
			$annoucement->ANNOUNCEMENT_WHAT = $ANNOUNCEMENT_WHAT; 
			$annoucement->ANNOUNCEMENT_WHEN = $ANNOUNCEMENT_WHEN; 
			$annoucement->ANNOUNCEMENT_WHERE = $ANNOUNCEMENT_WHERE;
			$annoucement->DATEPOSTED 		 = date("Y-m-d H:i:s");
			$annoucement->create();  

			$sql ="INSERT INTO `tblblogpost` (`BLOGID`,`BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`, `CATEGORY`,`AUTHOR`) 
			VALUES('{$BLOGID}','{$ANNOUNCEMENT_TEXT}','{$ANNOUNCEMENT_WHAT}','{$ANNOUNCEMENT_WHEN}','{$ANNOUNCEMENT_WHERE}',NOW(),'ANNOUNCEMENT','".$_SESSION['NAME']."')";
			$mydb->setQuery($sql); 


			$sql = "SELECT *
					FROM `tblstudent`";
			$mydb->setQuery($sql);
			$cur = $mydb->loadResultList();
			foreach ($cur as $result) {
				# code...
				$IDNO = $result->IDNO;

				$sql ="INSERT INTO `tblstudentnotif` (`BLOGID`,`IDNO`,`TYPE`) 
				VALUES('{$BLOGID}','{$IDNO}','Announcement')";
				$mydb->setQuery($sql); 

				$contact = '+63'.substr($result->PHONE, 1);
			 	# code...
			 	$query = "INSERT INTO `messageout` (`Id`, `MessageTo`, `MessageFrom`, `MessageText`) 
			 	VALUES (Null, '".$contact."','Admin','You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  ".$ANNOUNCEMENT_TEXT." <br> What:".strip_tags($ANNOUNCEMENT_WHAT)." <br> When: ".strip_tags($ANNOUNCEMENT_WHEN)."<br> Where: ".strip_tags($ANNOUNCEMENT_WHERE)."')";
		        $mydb->setQuery($query); 


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
			 	VALUES (Null, '".$contact."','Admin','You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  ".$ANNOUNCEMENT_TEXT." <br> What:".strip_tags($ANNOUNCEMENT_WHAT)." <br> When: ".strip_tags($ANNOUNCEMENT_WHEN)."<br> Where: ".strip_tags($ANNOUNCEMENT_WHERE)."')";
		        $mydb->setQuery($query);

			}



			$autonum = New Autonumber(); 
			$autonum->auto_update("BLOGID");

			message("Announcement has been posted successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){

		global $mydb; 

	if(isset($_POST['save'])){  
			$BLOGID =$_POST['ANNOUNCEMENTID'];
			$ANNOUNCEMENT_TEXT = $_POST['ANNOUNCEMENT_TEXT'];
			$ANNOUNCEMENT_WHAT = $_POST['ANNOUNCEMENT_WHAT']; 
			$ANNOUNCEMENT_WHEN = $_POST['ANNOUNCEMENT_WHEN']; 
			$ANNOUNCEMENT_WHERE = $_POST['ANNOUNCEMENT_WHERE'];
			
			// $ANNOUNCEMENT_WHEN = ""; 
			// $ANNOUNCEMENT_WHERE = "";


			if ($_POST['ANNOUNCEMENT_TEXT'] == "" OR $_POST['ANNOUNCEMENT_WHAT'] == ""){
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$annoucement = New Announcement();
			$annoucement->ANNOUNCEMENT_TEXT = $ANNOUNCEMENT_TEXT;
			$annoucement->ANNOUNCEMENT_WHAT = $ANNOUNCEMENT_WHAT; 
			$annoucement->ANNOUNCEMENT_WHEN = $ANNOUNCEMENT_WHEN; 
			$annoucement->ANNOUNCEMENT_WHERE = $ANNOUNCEMENT_WHERE;
			$annoucement->update($BLOGID);  

			$sql ="UPDATE `tblblogpost` SET `BLOGS`='{$ANNOUNCEMENT_TEXT}', `BLOG_WHAT`='{$ANNOUNCEMENT_WHAT}', `BLOG_WHEN`='{$ANNOUNCEMENT_WHEN}', `BLOG_WHERE`='{$ANNOUNCEMENT_WHERE}'  WHERE`BLOGID`='{$BLOGID}'";
			$mydb->setQuery($sql);
			$mydb->executeQuery();

			  message("Announcement has been updated!", "success");
			redirect("index.php");
			 
			}
		}
	}


	function doDelete(){
		
		global $mydb; 
	 
				$BLOGID = 	$_GET['id'];

				$annoucement = New Announcement();
	 		 	$annoucement->delete($BLOGID);

		 		$sql ="DELETE FROM `tblblogpost`  WHERE`BLOGID`='{$BLOGID}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();
			 
			message("Announcement has been removed!","info");
			redirect('index.php');
		 
		
	}

	 
 
?>