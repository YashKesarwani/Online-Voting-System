<?php
  session_start();
  include "check.php";
  $thispage="Add";
  include "Header.php";
  include "Validate.js";
  $name=$_SESSION["admin"]; 
?> 
<html>
	<head>
		<title>Add Admin</title>		
	</head>
	<body>	
		<div id="form" style="font-size:18px; margin-left:450px; margin-bottom:50px; padding:10px;height:520px; width:450px; color:red;
								text-align:left;border:4px solid red;">
			<?php
				  $name=$_SESSION["admin"];
				  echo $name." Register a New Admin";
				  if(isset($_GET["task"]))
				  {echo "<br><font size=3 color=black>New Admin Added..!! Thank You ".$name."..!!</font>";}
			?>
			<br>
		 <form method="POST" action="Save.php">
		  Admin ID
		  <input type="text" name="id" value="A00" required class="form-control">
		   <br>
		  <input type="text" name="name" placeholder="Enter Admin Name" required class="form-control">
		   <br>
		  <input type="password" name="pass" placeholder="Enter Password" required class="form-control" onkeyup="checkpass(this.value)">
		   <br>
		   <span id="chck0" ></span>
		  <input type="number" name="contact" placeholder="Enter Contact No." required class="form-control" onkeyup="checknum(this.value)">
		   <br>
		   <span id="chck2" ></span>
		  <input type="email" name="mail" placeholder="Enter Admin Email" required class="form-control" onblur="checkmail(this.value)">
		   <br> 
		   <span id="chck1" ></span>
		  <input type="text" name="city" placeholder="Enter Admin's Current City" required class="form-control">
		   <br>   
		  <center><button class="btn btn-danger"  id= "but" style="background-color:red"> Register </button>  </center>
		 </form> 
		</div>
	</body>
</html>	
<?php	
	include "Footer.php";
?>	