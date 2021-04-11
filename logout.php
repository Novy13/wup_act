<?php 
require_once 'include/initialize.php';
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
@session_start();

// 2. Unset all the session variables
unset( $_SESSION['IDNO'] );
unset( $_SESSION['FNAME'] );
unset( $_SESSION['LNAME'] );
unset( $_SESSION['EMAILADD'] );
unset( $_SESSION['STUDPASS'] ); 
unset($_SESSION['active']);
unset($_SESSION['basicInfo']);
unset($_SESSION['otherInfo']);
unset($_SESSION['work']);
 
 	
// 4. Destroy the session
// session_destroy();
redirect("index.php?logout=1");
?>