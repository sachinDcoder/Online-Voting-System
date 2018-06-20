<?php
session_start();
if(isset($_SESSION['aadhar']))
{
	$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'new_member');
 $q="select * from c_info1";
 $res=mysqli_query($con,$q);
 $rn=mysqli_num_rows($res);
	?>
	<html>
<head><title>vote</title>
	<style>
	a
	{
		text-decoration:none;
	}
	</style>
	</head>
<body style="background-color:bisque;">
<p style="color:green; background-color:lightblue; text-align:center; font-size:90px; padding:50px; margin:0px;">ONLINE POLLING</p>
	<p align="right" style="background-color:#D4C5D1; padding:8px; margin:0px; margin-bottom:30px;"><a href="index.php">Home</a>
	<a href="viewProfile.php">Profile</a>
	<a href="logout.php">Logout</a>
	<a href="vote1.php">Vote</a></p>
<form method="post" action="insert.php">
<center><p><font face="forte" size=28 align="center">select candidate id:</font></center><br/>
<?php 
  for($i=1;$i<=$rn;$i++)
  {
	$row=mysqli_fetch_array($res);
	?>
<center><input type="radio" name="group1" value="<?php echo $i;?>"><p><font face="forte" size=26 ><?php echo $row['cand_name'];?></font></p></center><br/>
<!--<center><input type="radio" name="group1" value="bjp_121"><p><font face="forte" size=26 >bjp_121</font></p></center><br/>
<center><input type="radio" name="group1" value="nda_213"><p><font face="forte" size=26 >nda_123</font></p></center><br/>
<center><input type="radio" name="group1" value="jdu_345"><p><font face="forte" size=26 >jdu_345</font></p></center><br/>
<center><input type="radio" name="group1" value="smp_345"><p><font face="forte" size=26 >smp_345</font></p></center><br/>
<p></p>-->
  <?php } ?>
<center><button type="submit" name="answer" style="width:15%; height:8%; color:yellow; background-color:green;" id="answer" value="answer">Vote</button></center>
</form>
<center><a href="logout.php">logout</a></center>;
<?php }
else
{
  echo "not connected";
  header("location:session.php");

}

?>