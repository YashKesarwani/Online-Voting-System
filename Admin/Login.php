<link href="../bootstrap.min.css" rel="stylesheet">
<?php
$thispage="Home";
 session_start(); 
 if(isset($_POST["name"]))
 {
	$name=$_POST["name"];
	$pass=sha1($_POST["pass"]);

	$con=mysqli_connect("localhost","root","","voting");
	$cmd="select * from admin where name='$name' and  pass='$pass'";
	$rst=mysqli_query($con,$cmd);
	$row=mysqli_fetch_array($rst);
	if($row==0)
	{
		include "Header2.php";
		include "Footer.php";
		echo "<center><h3 style=\"color:red\">Invalid User ID or password</h3>
		   <img src=../Pics/Sorry2.jpeg width=30% height=30%></center>";
	}
	else 
	{
		$_SESSION["admin"]=$name;
		header("Location:Home.php");
	}
 }		
 else
 {
	header("Location:index.php");
 }	
?>

