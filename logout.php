<?php
if(!isset($_SESSION['aadhar']))
{
	
}
else
{
session_start();
session_unset(); 
// destroy the session 
session_destroy(); 
}
 header("location:login1.php");
?>