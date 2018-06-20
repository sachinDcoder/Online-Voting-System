<?php
session_start();
if(isset($_SESSION['aadhar']))
{
	$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'new_member');
 $q="select * from c_info1";
 $res=mysqli_query($con,$q);
 $rn=mysqli_num_rows($res);
 //echo $rn;
	?>
<html>
 <head>
  <title>Counting</title>
  <style>
  table
  {
	  border:2px solid green;
	  width:70%;
	  height:50%;
  }
  table tr
  {
	  background-color:#16F3DF;
  }
  table td
  {
	  background-color:#C5D4D3;
  }
  </style>
  <style>
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
	<a href="vote1.php">Vote</a></p>
	<table>
	 <tr><th>CANDIDATE NAME</th><th>Count</th></tr>
	 <?php 
  for($i=1;$i<=$rn;$i++)
  {
	  //echo $i;
	$row=mysqli_fetch_array($res);
	?>
	 <tr><td><?php echo $row['cand_name']; ?></td><td><?php $q="select * from vote where cand_id=$i"; $res1=mysqli_query($con,$q);$j=mysqli_num_rows($res1); echo $j;?></td></tr>
  <?php }
mysqli_close($con); }?>
 </body>
</html>
