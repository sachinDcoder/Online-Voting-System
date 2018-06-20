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
	<a href="login1.php">Login</a>
	<a href="vote1.php">Vote</a></p>
	<fieldset style="align:center; width:30%;">
	<legend style="align:right;">ADMIN LOGIN</legend>
	 <form action="cand_reg.php" method="post">
	  <tr><td ><font size=32 face="cooper">Admin ID:</font></td><td><input  type="text" style="height:50;" name="cand_id"></td></tr>
      <tr><td ><font size=32 face="cooper">Password:</font></td><td><input type="password" style="height:50;" name="cand_pass"></td></tr>
	  <tr><td><input type="submit" value="log in" style="width:20%; height:6%; background-color:lightgreen;"></td>
<td><input type="reset" value="reset" style="width:20%; height:6%; background-color:lightgreen;"></td></tr>
	 </form>
	</fieldset>
 </body>
</html>