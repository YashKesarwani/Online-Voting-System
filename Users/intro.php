<?php
$thispage="Voting";
session_start();
if(empty($_SESSION["userid"]))
{
header("Location:../Voting.php");
}
include "Header.php";
include "Footer.php";
$umail=$_SESSION["userid"];
?>
<html>
	<head>
		<title>Voting</title>
	</head>
	<body style="background-color:#AFF5E2;">
<!--	<form action="Vote.php" method="POST">-->
<?php
		include "../Connect.php";
		$obj=new register;
		$obj->vote($umail);
?>
	</form>