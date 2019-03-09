<?php
			$con=mysqli_connect("localhost","root","","voting");
			if(isset($_GET["tag"]))	
			 {
				if($_GET["tag"]=="cr")
				{
					$cmd="select fname,lname,mobile,mail,vdpt from vregister where post='cr'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=700>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th>";
					echo "<th>E-Mail</th>";
					echo "<th>Department</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td>";
						echo "<td>$row[4]</td></tr>";
					}				
					echo "</table>";
				}
				else if($_GET["tag"]=="pr")
				{
					$cmd="select fname,lname,mobile,mail from vregister where post='prez'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=500>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th>";
					echo "<th>E-Mail</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td></tr>";
					}				
					echo "</table>";
				}
				else if($_GET["tag"]=="vp")
				{
					$cmd="select fname,lname,mobile,mail from vregister where post='vprez'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=500>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th>";
					echo "<th>E-Mail</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td></tr>";
					}				
					echo "</table>";
				}
				else if($_GET["tag"]=="tr")
				{
					$cmd="select fname,lname,mobile,mail from vregister where post='treasurer'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=500>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th>";
					echo "<th>E-Mail</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td></tr>";
					}				
					echo "</table>";

				}
			 }
			if(isset($_GET["tag2"]))	
			 {
				if($_GET["tag2"]=="cr")
				{
					$cmd="select fname,lname,mobile,cdpt from cregister where candid='cr'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=700>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th>";
					echo "<th>Department</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td></tr>";
					}				
					echo "</table>";
				}
				else if($_GET["tag2"]=="prez")
				{
					$cmd="select fname,lname,mobile from cregister where candid='prez'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=500>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td></tr>";
					}				
					echo "</table>";
				}	
				else if($_GET["tag2"]=="vprez")
				{
					$cmd="select fname,lname,mobile from cregister where candid='vprez'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=500>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td></tr>";
					}				
					echo "</table>";
				}
				else if($_GET["tag2"]=="tr")
				{
					$cmd="select fname,lname,mobile from cregister where candid='treasurer'";
					$rst=mysqli_query($con,$cmd);
					echo "<table border=3 width=500>";
					echo "<tr><th>First Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Mobile No.</th><tr>";
					while($row=mysqli_fetch_array($rst))
					{		
						echo "<tr><td>$row[0]</td>";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td></tr>";
					}				
					echo "</table>";
				}
		   }
?>