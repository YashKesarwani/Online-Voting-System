<html>
 <head>
  <link href="../bootstrap.min.css" rel="stylesheet">
  <link href="styleadm.css" rel="stylesheet">
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
					if($thispage=="Add")
					{
						echo "<li class=\"active\"><a href=\"Add.php\">Add Admin</a></li>";
					}
					else
					{
						echo "<li><a href=\"Add.php\">Add Admin</a></li>";
					}
					if($thispage=="Vdb")
					{
						echo "<li class=\"active\"><a href=\"Viewdb.php\">View Database</a></li>";
					}
					else
					{
						echo "<li><a href=\"Viewdb.php\">View Database</a></li>";
					}
					
				?>	
				</ul>
				<ul class="nav navbar-nav navbar-right">
<?php
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