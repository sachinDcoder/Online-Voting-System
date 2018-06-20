<html>
 <head>
  <title>Index Page</title>
  <style type="text/css">
	fieldset 
	{
		width: 100px;
		border: 1px solid #dcdcdc;
		border-radius: 10px;
		padding: 20px;
		text-align: right;
	}
	legend 
	{
		background-color: #efefef;
		border: 1px solid #dcdcdc;
		border-radius: 10px;
		padding: 5px 10px;
		text-align: left;
		text-transform: uppercase;
	}
	div
	{
		font-size:25px;
		width: 18%;
        float: left;
        margin: 1%;
	}
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
	<marquee><em style="text-transform:capitalize;">Voting is going on. You can go and vote in voting section. For more information,must read the important notice and the protocols. 
	Also please note that You will be allowed to vote only once.</em></marquee>
		<div>
	    <fieldset style="height:30%;">
		 <legend>LOGIN/NEW MEMBER</legend>
		 <label><a href="login1.php">Login</a></label><br/>
		 <label><a href="newmember.php">New Member</a></label>
		 <label><a href="admin.php">Admin</a></label><br/>
		 <label><a href="count.php">Voting Result</a></label>
		</fieldset>
		</div>
		<div style="width:55%">
		<h1 style="text-align:center;">Important Notice</h1>
		<p style="font-size:15px; text-align:justify; font-family:comic sans ms;">Brushfire polls are polls taken during the period between the benchmark poll and tracking polls. 
		The number of brushfire polls taken by a campaign is determined by how competitive the race is and how
		much money the campaign has to spend. These polls usually focus on likely voters and the length of the 
		survey varies on the number of messages being tested.Brushfire polls are used for a number of purposes.
		First, it lets the candidate know if they have made any progress on the ballot, how much progress has been made, 
		and in what demographics they have been making or losing ground. Secondly, it is a way for the campaign to test a
		variety of messages, both positive and negative, on themselves and their opponent(s). This lets the campaign know 
		what messages work best with certain demographics and what messages should be avoided. Campaigns often use these 
		polls to test possible attack messages that their opponent may use and potential responses to those attacks.
		The campaign can then spend some time preparing an effective response to any likely attacks. Thirdly, 
		this kind of poll can be used by candidates or political parties to convince primary challengers to drop out 
		of a race and support a stronger candidate.
		</p>
		</div>
		<div>
		<h3>Upcoming events</h3>
		<ul style="font-size:20;">
		 <li>polling on 23th july</li>
		 <li>result on 30th july</li>
		 <li style="color:red;">re-polling on 25th july</li>
		</ul>
		</div>
 </body>
	<?php for($i=1;$i<=28;$i++)echo "<br/>"; ?><p style="text-align:center;">Copyright &copy; 2017</p>
</html>

<!--background-color:red;-->