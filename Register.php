<?php
 $thispage="Register";	
	include "Header.php";
	include "Reg_class.php";
	include "Footer.php";
?>
<html>
 <head>
	<title>Register</title>
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
		
		function readURL(input)
		 {
				if(input.files && input.files[0])
				{
					var reader=new FileReader();
					reader.onload=function(e)
					{
						$('#disp').attr('src',e.target.result).width(100).height(80)
					};
					reader.readAsDataURL(input.files[0]);
				}
		 }
	</script>	
 </head>
 <body style="background-color:#AFF5E2">
	<p style="width:550px;margin-left:40px;text-align:center;font-family:Arial;font-size:20px;">
		Register For Voter or Register for Candidate
		<br>
		Voter <input type="radio" name="choice" value="voter"  id="q1">
		Candidate <input type="radio" name="choice" value="candidate" id="q2">

	</p>
	
	<div style="border:4px groove white;float:right;margin-right:15px;width:800px;height:500px;">
		<img src="Pics/Vote.png" width="405" height="300" style="float:left;">
		<p style="margin-top:20px;font-size:18px;font-weight:bold;line-height:24px">
			 &nbsp <u>College Elections</u>
		
				<li style="font-size:16px;font-weight:bold;">The election to Students' Union shall be held every year.</li>
				<li style="font-size:16px;font-weight:bold;">Nominations shall be filed and scrutinized on the dates specified.</li>
				<li style="font-size:16px;font-weight:bold;">The election will be held on the day as notified by the Principal in 
						accordance with the schedule.</li>
				<li style="font-size:16px;font-weight:bold;">Any violation or contravention of the issued guidelines and codes of conduct shall
						make the candidate liable to be stripped of his elected post.</li>
				<li style="font-size:16px;font-weight:bold;">Every bonafide student of the college is eligible to contest and cast his/her
						vote. 	 </li>
				<li style="font-size:16px;font-weight:bold;">Degree students attaining the ages between 17 and 22 are eligile to contest 
						the elections.
				<li style="font-size:16px;font-weight:bold;">The Candidate shall not have a previous criminal reocrd. He/She shall also not have been subject to 
						any disciplinary action by the council/College administration.</li>
				<li style="font-size:16px;font-weight:bold;">The candidate should have attained the minimum 75% of attendance.</li>		
				<li style="font-size:16px;font-weight:bold;"> One voter will cast vote for one post for which election will be held.</li>
				<li style="font-size:16px;font-weight:bold;">In case of equality of votes between any two candidates, the election of 
						successful candidate shall be decided by the council.</li>
				<li style="font-size:16px;font-weight:bold;">For 3rd year students only: A) President  B) Vice-President
						  C) Treasurer</li>
				
		</p>
	</div>
	
	<div id="a1" style="height:270px; width:300px;margin-left:20px;margin-top:50px;font-size:16px;">
	<form  autocomplete=off method="post" action="Save_Voter.php">
		<?php
			$obj=new reg;
			$obj->register();
		?>	
		Voter for:-<br> 
		 Class Representative <input type="radio" name="post" value="cr" required class="form-control" style="height:25px;">
		 <br>
		 <span id="show1">
			<input type="radio" name="dep" value="d1" style="height:25px;">Dept. 1   
			
			<input type="radio" name="dep" value="d2" style="height:25px;">Dept. 2   
			
			<input type="radio" name="dep" value="d3" style="height:25px;">Dept. 3 
			<br><br>
		 </span>
		 President <input type="radio" name="post" value="prez" required class="form-control" style="height:25px;">
		 <br>
		 Vice President <input type="radio" name="post" value="vprez" required class="form-control" style="height:25px;">
		 <br>
		 Treasurer <input type="radio" name="post" value="treasurer" required class="form-control" style="height:25px;">
		 <br>
		<button class="btn btn-warning" id="but"> Register </button><br><br><br>
	</form>
	</div>		
	<div id="a2" style="height:270px; width:300px;margin-left:20px;margin-top:50px;font-size:16px">
	<form  autocomplete=off method="post" action="Save_Candidate.php" enctype="multipart/form-data">
		<?php
			$obj=new reg;
			$obj->register();
		?>	
		Register as:-<br> 
		 Class Representative <input type="radio" name="candid" value="cr" required class="form-control" style="height:25px;" >
		 <br>
		 <span id="show2">
			<input type="radio" name="dep" value="d1" style="height:25px;">Dept. 1   
			
			<input type="radio" name="dep" value="d2" style="height:25px;">Dept. 2   
			
			<input type="radio" name="dep" value="d3" style="height:25px;">Dept. 3 
			<br><br>
		 </span>
		 President <input type="radio" name="candid" value="prez" required class="form-control" style="height:25px;">
		 <br>
		 Vice President <input type="radio" name="candid" value="vprez" required class="form-control" style="height:25px;">
		 <br>
		 Treasurer <input type="radio" name="candid" value="treasurer" required class="form-control" style="height:25px;">
		 <br>
		 Upload Your Pic
			<input type="file" name="upic" required accept="image/jpeg image/gif image/png" onchange="readURL(this)"><br>
			<img src="#" alt="Your Image" id="disp">
			<br>	
		 <button class="btn btn-warning" id="but" style="margin-top:10px"> Register </button><br><br><br>
	</form>
	</div>
</html>	