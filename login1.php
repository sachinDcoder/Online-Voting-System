<html>
<head>
<title>login page</title>
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
<form action="se1.php" method="post">
<table align="center"  style="background:#f1f1c1;border-style:solid;border-width:thick;box-shadow:10px 10px 5px #888888;" >
<tr><td ><font size=32 face="cooper">Enter Username</font></td><td><input  type="text" style="height:50;" name="aadhar"></td><tr>
<tr><td ><font size=32 face="cooper">Enter Password</font></td><td><input type="password" style="height:50;" name="password"></td><tr>
</table>
<p style="text-align:center;"><input type="submit" value="log in" style="width:10%; height:5%; background-color:lightgreen;"></p>
<p style="text-align:center;"><input type="reset" value="reset" style="width:10%; height:5%; background-color:lightgreen;"></p>

</form>
</body>
</html>
<!--onclick=\"alert('you have successfully logged in!')\-->