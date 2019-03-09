<?php
$thispage="Home";
	include "Header.php";
	include "Footer.php";
?>
<html>
	<head>
		<title>Academic Calendar</title>
	</head>
<?php	
		$file='Calendar.pdf';
		$filename='Calendar.pdf';
		
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="'.$filename.'"');
		header('Content-Transfer-Encoding:binary');
		header('Content-Length:.filesize($file)');
		header('Accept-Ranges: bytes');
		
		readfile($file);
		
?>
</html>