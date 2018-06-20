<?php
session_start();
$user=$_SESSION['aadhar'];
$id=$_POST['group1'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'new_member');
$q1="select * from vote where aadhar='$user'";
$res=mysqli_query($con,$q1);
$i=mysqli_num_rows($res);?>
<html><head><style>
	a
	{
		text-decoration:none;
	}
	</style>
	</head>
<body style="background-color:#EBF5FB;">
	<p style="color:green; background-color:lightblue; text-align:center; font-size:90px; padding:50px; margin:0px;">ONLINE POLLING</p>
	<p align="right" style="background-color:#D4C5D1; padding:8px; margin:0px; margin-bottom:30px;"><a href="index.php">Home</a>
	<a href="viewProfile.php">Profile</a>
	<a href="logout.php">Logout</a>
	<a href="login1.php">Login</a>
	<a href="vote1.php">Vote</a></p>
	<?php
if($i==0)
{
	$q="insert into vote(aadhar,cand_id) values('$user','$id')";
	mysqli_query($con,$q);
	
	echo "<p style=\"color:red;\">You have successfully voted</p></body></body></html>";
}
else
{
	echo "<p style=\"color:red;\">You have already voted</p></body></html>";
}
mysqli_close($con);
?>