<?php
				$con=mysqli_connect("localhost","root","","voting3");
				$cmd="Select fname,lname from cregister where candid='prez' and votes=(Select max(votes) from cregister)";
				$res=mysqli_query($con,$cmd);
				$row=mysqli_fetch_array($res);
				echo $row["fname"]." ".$row["lname"];
?>