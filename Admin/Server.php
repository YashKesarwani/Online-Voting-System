<?php
		$counter_name="../counter.txt";
		$f = fopen($counter_name,"r");
		$counterVal = fread($f, filesize($counter_name));
		fclose($f);
		echo "<font size=3 color=red>Total no. of hits: ".$counterVal."<br>";
		include "Online.php";
		echo $_SERVER["SERVER_NAME"]." ";
		echo $_SERVER["REQUEST_URI"]." ";
		echo $_SERVER["HTTP_USER_AGENT"]."<br></font>";
/*		echo $_SERVER['REMOTE_ADDR']."<br>";
		echo $_SERVER['SCRIPT_NAME']."<br>";
		echo $_SERVER["SERVER_SOFTWARE"]."<br>";*/
?>