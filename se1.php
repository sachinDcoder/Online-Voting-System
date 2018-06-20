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
    echo "<html><head><style>
	a
	{
		text-decoration:none;
	}
	</style></head>
	<p style=\"color:green; background-color:lightblue; text-align:center; font-size:90px; padding:50px; margin:0px;\">ONLINE POLLING</p>
	<p align=\"right\" style=\"background-color:#D4C5D1; padding:8px; margin:0px; margin-bottom:30px;\"><a href=\"index.php\">Home</a>
	<a href=\"viewProfile.php\">Profile</a>
	<a href=\"logout.php\">Logout</a>
	<a href=\"vote1.php\">Vote</a></p>
    <center><a href=\"viewProfile.php\"><font color=darkblue face=\"forte\" size=20>view profile</font></a></center><br>
	<center><a href=\"vote1.php\"><font color=darkblue face=\"forte\" size=20>start voting!</font></a></center><br>
	<center><a href=\"count.php\"><font color=darkblue face=\"forte\" size=20>view result</font></a></center><br>
	<center><a href=\"viewCand.php\"><font color=darkblue face=\"forte\" size=20>candidates Profile info</font></a></center><br>
	<center><a href=\"index1.html\"><font color=darkblue face=\"forte\" size=20>Some of famous candidates</font></a></center><br>
	</body>
	</html>";
 }
 else
 {
	 header("location:http://localhost/online_polling/login1.php");
 }
 ?>