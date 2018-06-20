<?php
 $name=$_POST['name'];
 //$cand_id=$_POST['cand_id'];
 $cand_party=$_POST['cand_party'];
 $pass1=$_POST['pass1'];
 $pass2=$_POST['pass2'];
 $gender=$_POST['gender'];
 $date=$_POST['date'];
 $contact=$_POST['contact'];
 $email=$_POST['email'];
 $religion=$_POST['religion'];
 $aadhar=$_POST['aadhar'];
 $comment=$_POST['agenda'];
 /*$f=$_FILES['myfile'];
echo "file name:".$f['name']."<br/>";
echo "file type:".$f['type']."<br/>";
echo "file size:".$f['size']."<br/>";
if(file_exists("photos/".$f['name']))
	echo $f['name']." alrealy exists<br>";
else if($f['type']!="image/jpeg")
	echo "file format is not compactable<br/>";
else
	move_uploaded_file($f['tmp_name'],"photos/".$f['name']);*/
 if($pass1==$pass2)
 {
	 $f=1;
	 $con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'new_member');
$q="insert into c_info1(cand_name,cand_party,pass1,pass2,gender,date,contact,email,religion,aadhar,agenda) values('$name','$cand_party','$pass1','$pass2','$gender','$date','$contact','$email','$religion','$aadhar','$comment')";
	 //$q="insert into cand_info(cand_name,cand_id,cand_party,pass1,pass2,gender,dob,contact,email,religion,aadhar,addA1,addA2,pinA,addB1,addB2,pinB,agenda) values('$name','$cand_id','$cand_party','$pass1','$pass2','$gender','$date','$contact','$email','$religion','$aadhar','$addA1','$addA2','$pinA','$addB1','$addB2','$pinB','$comment')";
	 mysqli_query($con,$q);
	 mysqli_close($con);
 }
 else
 {
	//echo "Please enter same passwords<br/>";
	header("location:admin.php");
	$f=0;
 }
?>
<?php if($f==1){?>
<html>
 <head>
  <title>Successfully joined</title>
  <style>
   body
   {
	   background-color:#EBF5FB;
   }
  </style>
 </head>
 <body>
 <h4>congrats,You have successfully joined</h4>
 <p><a href="index.php">click here</a> to re-direct on home page<p>
 </body>
</html>
<?php } ?>