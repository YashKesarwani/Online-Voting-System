<?php
$thispage="Clist";	
	include "Header.php";
	include "Footer.php";
?>
<html>
 <head>
	<title>Candidate List</title>
	<script src="jquery.min.js"></script>
	<script>
	   $(document).ready(function()
		 {	

			$("#a1").hide();
			$("#a2").hide();
			$("#a3").hide();
			$("#a4").hide();
			
			$("#q1").click(function(){
			$("#a1").slideToggle();
			$("#a2").hide();
			$("#a3").hide();
			$("#a4").hide();
			});
			
			$("#q2").click(function(){
			$("#a2").slideToggle();
			$("#a1").hide();
			$("#a3").hide();
			$("#a4").hide();
			});
			
			$("#q3").click(function(){
			$("#a3").slideToggle();
			$("#a1").hide();
			$("#a2").hide();
			$("#a4").hide();
			});
			
			$("#q4").click(function(){
			$("#a4").slideToggle();
			$("#a1").hide();
			$("#a2").hide();
			$("#a3").hide();
			});
			
		});
	</script>	
 </head>	
 <body style="background-color:#AFF5E2">
	<div style="font-size:20px;margin-top:150px;margin-left:50px">Search for List of:-</div><br>
	<p id=q1 style="background-color:#8CDFDD;height:70px;width:200px;margin-left:100px;text-align:center;font-family:Forte;font-size:20px;border:2px solid blue;">
		For Class Representative
	</p>
	<div id=a1 style="width:250px;margin-left:200px;float:right;position:absolute;right:650px;top:250px;">
		<iframe src="<?php echo "getlist.php?tag2=cr";?>" width="750" scrolling="auto" frameborder=0>
		</iframe>
	</div>
	<p id=q2 style="background-color:#8CDFDD;height:70px;width:200px;margin-left:100px;text-align:center;font-family:Forte;font-size:20px;border:2px solid blue;">
		For <br>President
	</p>
	<div id=a2 style="width:250px;margin-left:200px;float:right;position:absolute;right:650px;top:250px;">
		<iframe src="<?php echo "getlist.php?tag2=prez";?>" width="750" scrolling="auto" frameborder=0>
		</iframe>
	</div>
	<p id=q3 style="background-color:#8CDFDD;height:70px;width:200px;margin-left:100px;text-align:center;font-family:Forte;font-size:20px;border:2px solid blue;">
		For <br>Vice President
	</p>
	<div id=a3 style="width:250px;margin-left:200px;float:right;position:absolute;right:650px;top:250px;">
		<iframe src="<?php echo "getlist.php?tag2=vprez";?>" width="750" scrolling="auto" frameborder=0>
		</iframe>
	</div>
	<p id=q4 style="background-color:#8CDFDD;height:70px;width:200px;margin-left:100px;text-align:center;font-family:Forte;font-size:20px;border:2px solid blue;">
		For <br>Treasurer
	</p>
	<div id=a4 style="width:250px;margin-left:200px;float:right;position:absolute;right:650px;top:250px;">
		<iframe src="<?php echo "getlist.php?tag2=tr";?>" width="750" scrolling="auto" frameborder=0>
		</iframe>
	</div>
  </body>	
</html>  