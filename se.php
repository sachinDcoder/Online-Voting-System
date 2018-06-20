<?php
 session_start();
 $username=$_POST['aadhar'];
 $password=$_POST['password'];
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'new_member');
 $q="select * from info where aadhar='$username' && pass1='$password'";
 $res=mysqli_query($con,$q);
 $i=mysqli_num_rows($res);
 //echo $i;
 if($i==1)
 {
	$_SESSION['aadhar']=$username;
	$_SESSION['password']=$password;
	header("location:http://localhost/online_polling/vote1.php");
 }
 else
 {?>
	<html><head><script type="text/javascript">alert("Invalid user id or password");</script></head><body></body></html>
	<?php header("location:http://localhost/online_polling/login1.php");
 }
 ?>