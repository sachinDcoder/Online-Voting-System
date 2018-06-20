<html>
 <head><title>New Member</title></head>
 <style>
	.td1
	{
		text-align:center;
		color:#154360;
	}
	#f1
	{
		width:800px;
	}
	#f1 .td2
	{
		line-height:4px;
	}
	span
	{
		color:red;
	}
 </style>
 <body style="background-color:#EBF5FB;">
	<p style="color:green; background-color:lightblue; text-align:center; font-size:90px; padding:50px; margin:0px;">ONLINE POLLING</p>
	<p align="right" style="background-color:#D4C5D1; padding:8px; margin:0px; margin-bottom:30px;"><a href="index.php">Home</a>
	<a href="viewProfile.php">Profile</a>
	<a href="logout.php">Logout</a>
	<a href="vote1.php">Vote</a></p>
  <form action="new_member_db" method="POST">
  <fieldset id="f1" style="background-color:#FEFEEC;color:#154360;">
  <legend style="color:#E74C3C;">NEW MEMBER/SIGN UP</legend>
   <table>
    <tr><td class="td1">Name<span>*</span>:</td><td><input type="text" placeholder="username" name="name" required /></td></tr>
	<tr><td class="td1">Password<span>*</span>:</td><td><input type="password" placeholder="password" name="pass1" required /></td></tr>
	<tr><td class="td1">Confirm Password<span>*</span>:</td><td><input type="password" placeholder="Enter the same password" name="pass2" required /></td></tr>
	<tr><td class="td1">Gender<span>*</span>:</td><td><input type="radio" name="gender" value="male" required >male
														<input type="radio" name="gender" value="female" required>female</td>
	<tr><td class="td1">Date of Birth<span>*</span>:</td><td><input type="date" name="date" required /></td></tr>
	<tr><td class="td1">Contact Number<span>*</span>:</td><td><input type="text" name="contact" required /></td></tr>
	<tr><td class="td1">Email:</td><td><input type="text" placeholder="mail id" name="email"/></td></tr>
	<tr><td class="td1">Religion<span>*</span>:</td><td><select name="religion">
						<option value="Hinduism">Hinduism</option>
						<option value="Buddhism">Buddhism</option>
						<option value="Sikhism">Sikhism </option>
						<option value="Jainism">Jainism</option>
						<option value="Others">Others</option>
						</td></tr>
	<tr><td class="td1">Aadhar Id<span>*</span>:</td><td><input type="text" name="aadhar" required /></td></tr>
	<!--<tr><td class="td1">Upload your photo<span>*</span>:</td><td><input type="file" name="myfile"/></td>
													 <td><input type="submit" value="Upload"/></tr>-->
   </table>
   <fieldset>
    <legend>Address<span>*</span></legend>
	<table>
	<tr><td class="td2">Address line 1:</td><td><input type="text" style="width:500px" name="addA1"/></td></tr>
	<tr><td class="td2">Address line 2:</td><td><input type="text" style="width:500px" name="addA2"/></td></tr>
	<tr><td class="td2">Pin Code:</td><td><input type="number" name="pinA"/></td></tr>
	</table>
   </fieldset>
   <fieldset>
    <legend>Alternative Address</legend>
	<table>
	<tr><td class="td2">Address line 1:</td><td><input type="text" style="width:500px" name="addB1"/></td></tr>
	<tr><td class="td2">Address line 2:</td><td><input type="text" style="width:500px" name="addB2"/></td></tr>
	<tr><td class="td2">Pin Code:</td><td><input type="number" name="pinB"/></td></tr>
	</table>
   </fieldset>
   <p>What do you think about online polling:<br><textarea name="comment" cols="20" rows="4">feedback</textarea></p>
   <p><input type="checkbox" name="check" required />Do you agree terms and condition</p>
   <p><span>*</span> shows mandatory field</p>
   <p style="padding:2px; text-align:right;" ><input type="reset" value="           reset            "/>   <input type="submit" value="           Join            "/></p>
  </fieldset>
  </form>
 </body>
</html>