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
	<body style="background-color:#AFF5E2;">	
		
<?php
	echo "<div style=\"margin-left:25px; color:red;\">";
	echo "<h3>No. of votes of each Candidates:-</h3>";
		$obj=new Results;
		$obj->display();
	echo "<h4><a href=\"Results.php\"> <<< Back</a>";	
	echo "</div>"	;
?>
	<div style="margin-bottom:200px;">
		<br><br><br>
	</div>	
	</body>
</html>	