<?php
// session checking on view page
session_start();
if(!isset($_SESSION['user_name'])){ 
header("Location: /marrynow/public");
exit();
}
$userName = $_SESSION['user_name'];
// $userRole = $_SESSION['role'];
echo $userName;
?>

