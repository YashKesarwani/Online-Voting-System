<?php
  session_start();
  include "check.php";
  $thispage="home";
  include "Header.php";
  include "Connect.php";
  $name=$_SESSION["admin"]; 
?>  
<html>
	<head>
		<title> Admin Home Page </title>
	</head>	

	<body>
		<div style="border:2px groove red;background-color:white;margin-left:5px; height:500px;width:700px;">
			<iframe src="Server.php" scrolling="auto" style="height:500px;width:698px;">
		</div>
	</body>
<?php
 include "Footer.php";
?>  
</html>
   