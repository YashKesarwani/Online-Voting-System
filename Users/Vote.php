<?php
$thispage="Voting";
session_start();
	include "Header.php";
	include "Footer.php";
	$umail=$_SESSION["userid"];
?>
<html>
	<head>
		<title>Voting</title>
	</head>
	<body style="background-color:#AFF5E2;">
<?php
	include "../Connect.php";
	$can=$_GET["id"];
	$obj=new Voting;
	echo $can;
	$obj->casting($can,$umail);
?>