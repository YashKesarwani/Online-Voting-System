<html>
 <head>
	<link href="../bootstrap.min.css" rel="stylesheet">
	<div>
		<nav class="navbar navbar-inverse">
		<div style="height:5px; background-color:#252525">		</div>
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../Home.php">ECC VOTING</a>
			</div>
			<div>
				<ul class="nav navbar-nav navbar-right">	
				<?php

					if($thispage=="Voting")
					{
						echo "<li class=\"active\"><a href=\"../Voting.php\">Voting</a></li>";
					}
					else
					{
						echo "<li><a href=\"../Voting.php\">Voting</a></li>";
					}
					if($thispage=="Logout")
					{
						echo "<li class=\"active\"><a href=\"Logout.php\">LogOut</a></li>";
					}
					else
					{
						echo "<li><a href=\"Logout.php\" style=\"color:Red\">LogOut</a></li>";
					}
				?>	
				
				
				
				</ul>
			</div>
		</div>
		</nav>
	</div>	
 </head>	
</html> 