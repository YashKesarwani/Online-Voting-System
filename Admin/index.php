<html>
 <head>
  <link href="../bootstrap.min.css" rel="stylesheet">
  <link href="styleadm.css" rel="stylesheet">
<?php
$thispage="Home";
 session_start();
 include "Header2.php";
?> 
	<title> Admin Panel </title>
 </head>
 <body>
 <center>
 <div id="admlogin" style="font-size:19px;border:5px solid red">
	<div id="adm3" style="background-color:red; color:white; font-size:20px; text-align:center">
	   Admin Panel
	</div>
	<div id="adm5">
			<form method="post" action="Login.php" enctype="multipart/form-data">

				<input type="text" name="name" placeholder="Enter Name" required class="form-control">
				<br>
				<input type="password" name="pass" placeholder="Enter Password" required class="form-control">
				<br>
				<button class="btn btn-danger" style="background-color:red"> Login </button>
			</form>
    </div> 	
 </div>
 </center>
 </body>
<?php
 include "Footer.php";
?>   