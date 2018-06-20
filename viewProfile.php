<?php 
 session_start();
 /*$_SESSION['username']=$_POST['username'];
 $_SESSION['password']=$_POST['password'];*/
 $username=$_SESSION['aadhar'];
 $password=$_SESSION['password'];
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'new_member');
 $q="select * from info where aadhar='$username' and pass1='$password'";
 $res=mysqli_query($con,$q);
 //$rn=mysqli_num_rows($res);
 $row=mysqli_fetch_array($res);
 mysqli_close($con);
?>
<html>
 <head>
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
  <legend style="color:#E74C3C;">NEW MEMBER/SIGN UP</legend>
   <table>
    <tr><td class="td1">Name:</td><td><?php echo $row['name'];?></td></tr>
	<tr><td class="td1">Password:</td><td><?php echo $row['pass1'];?></td></tr>
	<tr><td class="td1">Gender:</td><td><?php echo $row['gender'];?></td>
	<tr><td class="td1">Date of Birth:</td><td><?php echo $row['date'];?></td></tr>
	<tr><td class="td1">Contact Number:</td><td><?php echo $row['contact'];?></td></tr>
	<tr><td class="td1">Email:</td><td><?php echo $row['email'];?></td></tr>
	<tr><td class="td1">Religion:</td><td>
						<?php echo $row['religion'];?>
						</td></tr>
	<tr><td class="td1">Aadhar Id:</td><td><?php echo $row['aadhar'];?></td></tr>
	<!--<tr><td class="td1">Upload your photo<span>*</span>:</td><td><input type="file" name="myfile"/></td>
													 <td><input type="submit" value="Upload"/></tr>-->
   </table>
   <fieldset>
    <legend>Address</legend>
	<table>
	<tr><td class="td2">Address line 1:</td><td><?php echo $row['addA1'];?></td></tr>
	<tr><td class="td2">Address line 2:</td><td><?php echo $row['addA2'];?></td></tr>
	<tr><td class="td2">Pin Code:</td><td><?php echo $row['pinA'];?></td></tr>
	</table>
   </fieldset>
   <fieldset>
    <legend>Alternative Address</legend>
	<table>
	<tr><td class="td2">Address line 1:</td><td><?php echo $row['addB1'];?></td></tr>
	<tr><td class="td2">Address line 2:</td><td><?php echo $row['addB2'];?></td></tr>
	<tr><td class="td2">Pin Code:</td><td><?php echo $row['pinB'];?></td></tr>
	</table>
   </fieldset>
  </fieldset>
 </body>
</html>