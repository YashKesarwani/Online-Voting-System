<?php
$thispage="Voting";
	include "Header.php";
	include "Footer.php";	
?>
<HTML>
 <head>
	<title>Voting</title>
	<script src="jquery.min.js"></script>
	<script>
	   $(document).ready(function()
		 {	

			$("#a1").hide();
			$("#a2").hide();
			
			$("#q1").click(function(){
			$("#a1").slideToggle();
			$("#a2").hide();
			});
			
			$("#q2").click(function(){
			$("#a2").slideToggle();
			$("#a1").hide();
			});
		});
			
	</script>	
 </head>
 <body style="background-color:#AFF5E2"> 
	<p style="width:550px;margin-left:40px;text-align:center;font-family:Arial;font-size:20px;">
		Voting For Class Representative or Voting for Presidential Posts
		<br>
		Class Representative <input type="radio" name="choice" value="class"  id="q1">
		Presidential Posts <input type="radio" name="choice" value="pres" id="q2">

	</p>
	
	<div style="width:800px;height:420px;border:4px groove white;float:right;margin-right:15px;">
		<img src="Pics/Vote2.jpeg" width="400" height="250" style="float:left">
		<p style="margin-top:20px;font-size:18px;font-weight:bold;line-height:24px">
			 &nbsp <u>College Elections</u>
		
				<li style="font-size:16px;font-weight:bold;">Every bonafide student of the college is eligible to contest and cast his/her
						vote. 	 </li>
				<li style="font-size:16px;font-weight:bold;">A student whose name is not there in the voters list which is to
						be notified prior to the election date cannot participate in the college election. </li>
				<li style="font-size:16px;font-weight:bold;">One voter will cast vote for one post for which election will be held.</li>
				<li style="font-size:16px;font-weight:bold;">Candidates securing maximum number of votes shall be declared elected to 
						their respective posts and will hold their offices for one academic session only.
				<li style="font-size:16px;font-weight:bold;">In case of equality of votes between any two candidates, the election of 
						successful candidate shall be decided by the council.</li>
				<li style="font-size:16px;font-weight:bold;">In the event of the office of any major post of office bearers falling
						vacant within two months of election, the Vice President will be promoted to the post of President.</li>
				
		</p>
	</div>
	
	<div id="a1" style="height:270px; width:300px;margin-left:20px;margin-top:50px;">
		<form  autocomplete=off method="post" action="Login.php">
			<input type="email" name="mail" placeholder="Email" class="form-control" required>
			<br>
			<input type="password" name="pass" placeholder="Password" class="form-control" required>
			<br><br><br>
			<button class="btn btn-info" id="but"> LOGIN </button>
		</form>
	</div>
	<div id="a2" style="height:270px; width:300px;margin-left:20px;margin-top:50px;font-size:16px">
		<form  autocomplete=off method="post" action="Login.php">
			<input type="email" name="mail" placeholder="Email" class="form-control">
			<br>
			<input type="password" name="pass" placeholder="Password" class="form-control">
			<br><br><br>
			<button class="btn btn-info" id="but"> LOGIN </button>
		</form>
	</div>
	
	
	
	</body>	