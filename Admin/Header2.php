<html>
 <head>
	<link href="bootstrap.min.css" rel="stylesheet">
	<div>
		<nav class="navbar navbar-inverse">
		<div style="height:5px; background-color:#252525">		</div>
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="Home.php">ECC VOTING</a>
			</div>
			<div>
				<ul class="nav navbar-nav navbar-left">	
				<?php
					if($thispage=="Home")
					{}
					if($thispage=="Register")
					{
						echo "<li class=\"active\"><a href=\"../Register.php\">Register</a></li>";
					}
					else
					{
						echo "<li><a href=\"../Register.php\">Register</a></li>";
					}
					if($thispage=="Voting")
					{
						echo "<li class=\"active\"><a href=\"../Voting.php\">Voting</a></li>";
					}
					else
					{
						echo "<li><a href=\"../Voting.php\">Voting</a></li>";
					}
					if($thispage=="Vlist")
					{
						echo "<li class=\"active\"><a href=\"../Vlist.php\">Voter List</a></li>";
					}
					else
					{
						echo "<li><a href=\"../Vlist.php\">Voter List</a></li>";
					}
					if($thispage=="Clist")
					{
						echo "<li class=\"active\"><a href=\"../Clist.php\">Candidate List</a></li>";
					}
					else
					{
						echo "<li><a href=\"../Clist.php\">Candidate List</a></li>";
					}
				?>	
				
				
				
				</ul>
			</div>
		</div>
		</nav>
	</div>	
 </head>	
</html> 