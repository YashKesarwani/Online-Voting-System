<?php
$thispage="Home";
session_start();
	include "Header.php";	 
	include "Footer.php";
	$counter_name = "counter.txt";
	if (!file_exists($counter_name)) 
	{
	  $f = fopen($counter_name, "w");
	  fwrite($f,"0");
	  fclose($f);
	}
	$f = fopen($counter_name,"r");
	$counterVal = fread($f, filesize($counter_name));
	fclose($f);
	if(!isset($_SESSION['hasVisited']))
	{
	  $_SESSION['hasVisited']="yes";
	  $counterVal++;
	  $f = fopen($counter_name, "w");
	  fwrite($f, $counterVal);
	  fclose($f); 
	}
?>
<html>
 <head>
	<title>Home</title>
 </head>
<?php
	if(isset($_GET["task"]))
	{
		if($_GET["task"]=="cast")
			echo "<center><h3 style=\"color:red;\">You have successfully casted your vote..!!</h3></center>";
		if($_GET["task"]=="kill")
			echo "<center><h3 style=\"color:red;\">You have successfully logged out..!!</h3></center>";
	}
?>
 <body style="background-color:#AFF5E2">

  <div style="width:100%;"> 
	<div style="border:4px groove white; width:600px; height:310px;margin-left:10px;float:left">
		<img src="Pics/College.jpg" width="100%" height="100%">
	</div>
	<div style="border:3px groove white;  position:absolute;left:625px;height:310px;width:750px;font-size:16px;font-weight:bold;line-height:22px;
					padding:3px;text-align:justify">
		<h2><b>Welcome to ECC</h2></b><br>
		Welcome to Ewing Christian College, Allahabad, a prestigious Autonomous Minority Institution, a reputed Centre of learning
		and a Constituent College of the University of Allahabad. Ewing Christian College is one of the best undergraduate 
		colleges in this part of the country, having earned great reputation in all spheres of academics. <br> &nbsp &nbsp &nbsp
		Ewing  Christian College established in 1902 as a PG college is amongst first 30-35 colleges of the country, 
		where UGC Schemes are inaugurated e.g. COSSIP in 1971, COHSSIP in 1975, Vocationalization of First Degree Program in 
		1994.<br> &nbsp &nbsp &nbsp Ewing Christian College is the first and only college of the University to be selected as 
		a Community College by the UGC in 2014.<br>
	</div>	
  </div>
	
	
	<div id="result" style="font-size:20px; height:150px; width:170px; position:absolute; top:430px;margin-left:200px;border:4px 
						groove white;background-color:white">
		<div id="d7" style="background-color:#AFF5E2; height:50px; font-size:18px; text-align:center; border-radius:50px 50px 50px 50px">
			<a href="Results.php" style="color:black">ELECTION RESULTS</a><br>
			<img src="Pics/Results_logo.jpg" style="width:90px; height:90px"/>
		</div>
   </div> 	
   
   <div id="calendar" style="font-size:20px; height:150px; width:170px; position:absolute; top:430px;margin-left:600px;border:4px 
						groove white;background-color:white">
		<div id="d7" style="background-color:#AFF5E2; height:50px; font-size:18px; text-align:center; border-radius:50px 50px 50px 50px">
			<a href="Calendar.pdf" style="color:black">ACADEMIC<br>CALENDAR</a><br>
			<img src="Pics/Calendar.jpg" style="width:90px; height:90px"/>
		</div>
   </div> 	
   
   <div id="site" style="font-size:20px; height:150px; width:170px; position:absolute; top:430px;margin-left:1000px;border:4px 
						groove white;background-color:white">
		<div id="d7" style="background-color:#AFF5E2; height:50px; font-size:18px; text-align:center; border-radius:50px 50px 50px 50px">
			<a href="http://www.ecc.ac.in/" style="color:black">GO TO<br>MAIN SITE</a><br>
			<img src="Pics/ECC.jpg" style="width:90px; height:90px"/>
		</div>
   </div> 	
   
<?php
 echo "<div id=visit style=\"position:absolute;bottom:40;background-color:black;height:16px;width:100%;color:white;padding-left:30px;
		font-size:13px\">";
 echo "Visitor number: $counterVal";
 echo "</div>"; 
?>      