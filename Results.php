<?php
$thispage="Home";
	include "Header.php";
	include "Footer.php";
	include "Connect.php";
?>
<html>
	<head>
		<title>Results</title>
	</head>
	<body style="background-color:#AFF5E2">	
	<div style="border:3px groove white;width:700px; height:550px;font-size:16px;font-weight:bold;margin-left:20px;float:left">
		<ol>
			<h4><li>FOR CLASS REPRESENTATIVES POSTS</h4>
				<ul>
					<li>Physics Department
<?php
						$obj=new Results;
						$obj->Result1();
?>							
					</li>
					<li>Chemistry Department
<?php
						$obj->Result2();
?>														
					</li>
					<li>Statistics Department
<?php
						$obj->Result3();
?>														
					</li>
					<li>Electronics Department
<?php
						$obj->Result4();
?>														
					</li>
					<li>Computer Application Department
<?php
						$obj->Result5();
?>														
					</li>
					<li>Mathematics Department
<?php
						$obj->Result6();
?>							
					</li>
				</ul>
			</li>	
			<h4><li>FOR PRESIDENT POST</h4>
<?php
						$obj->Result7();
?>			
				</li>
			<h4><li>FOR VICE PRESIDENT POST</h4>
<?php
						$obj->Result8();
?>						
				</li>
			<h4><li>FOR TREASURER POST</h4>
<?php
						$obj->Result9();
?>				
				</li>
				<br><br>
				<a href="Details.php">More Details>>></a>
	</div>
	
		<img src="Pics/Results.jpg" style="width:620px; height:550px;margin-left:20px;border:4px groove white">
		
	</body>
</html>