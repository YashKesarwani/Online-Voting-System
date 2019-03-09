<?php
	$con=mysqli_connect("localhost","root","","voting");
	/*$cmd="Select fname,lname from cregister where cdpt='phy' and candid='cr' and votes=(Select max(votes) from cregister)";
			$res=mysqli_query($con,$cmd);
			$row=mysqli_fetch_array($res);
				
						echo "<br><font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}
			else
			{
				mysqli_error($con);
				echo"Died"			;
			}*/
		$cmd="Select * from cregister where cdpt='phy' and candid='cr' ";
		$res=mysqli_query($con,$cmd);
		$row=mysqli_fetch_array($res);
		echo $row["fname"]." ".$row["lname"]." 
?>			