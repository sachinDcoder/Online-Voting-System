<?php 
 session_start();
 /*$_SESSION['username']=$_POST['username'];
 $_SESSION['password']=$_POST['password'];*/
 $username=$_SESSION['aadhar'];
 $password=$_SESSION['password'];
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'new_member');
 $q="select * from c_info1";
 $res=mysqli_query($con,$q);
 $rn=mysqli_num_rows($res);
 mysqli_close($con);
?>
<html>
 <head>
 <style>
 td,th
 {
	 padding:7px;
 }
 tr
 {
	 border:1px solid green;
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
 <fieldset id="f1" style="background-color:#FEFEEC;color:#154360;">
  <legend style="color:#E74C3C;">ALL Candidates INFO</legend>
   <table>
   <tr><th class="td1">Serial Number:</th>
   <th class="td1">Candidate Name:</th>
   <th class="td1">Candidate ID:</th>
   <th class="td1">Candidate Party:</th>
   <th class="td1">Gender:</th>
   <th class="td1">Date of Birth:</th>
   <th class="td1">Contact Number:</th>
   <th class="td1">Email:</th>
   <th class="td1">Religion:</th>
   <th class="td1">Aadhar Id:</th>
   <th class="td1">Agenda:</th>
   </tr>
   <?php 
  for($i=1;$i<=$rn;$i++)
  {
	$row=mysqli_fetch_array($res);
	?>
    <tr><td><?php echo $i;?></td>
	<td><?php echo $row['cand_name'];?></td>
	<td><?php echo 'id'.$row['cand_id'];?></td>
	<td><?php echo $row['cand_party'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['date'];?></td>
	<td><?php echo $row['contact'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['religion'];?></td>
	<td><?php echo $row['aadhar'];?></td>
	<td><?php echo $row['agenda'];?></td></tr>
  <?php }		?>										 
   </fieldset>
  </fieldset>
 </body>
</html>