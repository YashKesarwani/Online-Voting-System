<?php
 $thispage="Register";	
	include "Header.php";
	include "Footer.php";
?>
<html>
 <head>
	<title>Register</title>
 </head>
 <body style="background-color:#AFF5E2">
<?php
   include "Connect.php";
   if(isset($_POST["fname"]))	
    {
		$id=$_POST["eid"];
		$eid=filter_var($id,FILTER_SANITIZE_SPECIAL_CHARS);
		$fnam=$_POST["fname"];
		$fname=filter_var($fnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$lnam=$_POST["lname"];
		$lname=filter_var($lnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$pass=sha1($_POST["pass"]);
		$mail=$_POST["mail"];
		$email=filter_var($mail,FILTER_SANITIZE_EMAIL);
		$mob=$_POST["mobile"];
		$year=$_POST["year"];
		if(isset($_POST["dept1"]))
			{ $dept1=$_POST["dept1"];}
		else
			{$dept1="";}
		if(isset($_POST["dept2"]))
			{$dept2=$_POST["dept2"];}
		else
			{$dept2="";}
		if(isset($_POST["dept3"]))
			{$dept3=$_POST["dept3"];}
		else
			{$dept3="";}
		$candid=$_POST["candid"];
		if($candid=="cr")
		{
			$d=$_POST["dep"];
			if($d=="d1")
				$dep=$dept1;
			else if($d=="d2")
				$dep=$dept2;
			else if($d=="d3")
				$dep=$dept3;
		}
		else
				$dep=" ";
		$upic="Users/Userpics/".$_FILES["upic"]["name"];
		$utpic=$_FILES["upic"]["tmp_name"];
		move_uploaded_file($utpic,$upic); 	
		
		$obj=new register;
		$inf=$obj->insert2($eid,$fname,$lname,$pass,$email,$mob,$year,$dept1,$dept2,$dept3,$candid,$dep,$upic);
		if($inf=="1")
		{
			echo "<center><h3><br>CONGRATS...!!!</h3>
			 <div>
				<img src=\"Pics/happy.jpg\" width=30% height=30%><br>
				<h4>You are now registered as a <b>CANDIDATE</b> for <b>ELECTIONS</b> in College<br><br>
			 </div></center>";
		}
		else
		{
			echo "<center><h3 style=\" color:red \">Sorry..!! <br>Some Error Occured. We are fixing it.<br>
			Register after some time, with proper details.<br></h3>
			<img src=\"Pics/Sorry2.jpeg\" width=30% height=30%></center>";
		}
	}
	else
	{
	 header("Location:Register.php");
	}	
?>
