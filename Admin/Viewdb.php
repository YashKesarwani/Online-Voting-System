<?php
session_start();
include "check.php";
  $thispage="Vdb";
  include "Header.php"; 
?>  
<html>
  <head>
	<title> View Database </title>
    <style>
		#q1
		{
		  margin-top:200px;
		}
		#q1,#q2,#q3,#q4
		{
		  background-color:red;
		  color:white;
	  	  font-size:17px;	
	 	  font-weight:bold;
	 	  text-align:center;
	 	  height:40px;	
	 	  width:400px;
	 	  padding-top:6px;
	 	  border-bottom:2px solid red;
	 	  cursor:pointer;
	 	  margin-left:30%;
		}

		#a1,#a2,#a3,#a4
		{
		  width:398px;
	 	  font-size:17px;
	 	  height:50px;
	   	  margin-left:30%;
	 	  border:1px solid red;
		}
	</style>
	<script src="../jquery.min.js"></script>
	<script>
	$(document).ready(function()
	{	

		$("#a1").hide();
		$("#a2").hide();
		$("#a3").hide();
		$("#a4").hide();
		
		$("#q1").click(function(){
		$("#a1").slideToggle(100);
		$("#a2").hide();
		$("#a3").hide();
		
		});
		
				
		$("#q2").click(function(){
		$("#a2").slideToggle();
		$("#a1").hide();
		$("#a3").hide();
		
		});

				
		$("#q3").click(function(){
		$("#a3").slideToggle();
		$("#a2").hide();
		$("#a1").hide();
		
		});
		
		$("#q4").click(function(){
		$("#a4").slideToggle();
		$("#a2").hide();
		$("#a3").hide();
		$("#a1").hide();
		
		});
		
	});
	</script>
  </head> 
  <body>
	<div class="container" style="text-align:center">
		<p id=q1>View Voter Database </p>
		<P id=a1> <?php $id="voter"; 
		  echo "<button><a href=View.php?id=$id>View</a></button>"; ?> 
		</p>

		<p id=q2>View Candidate Database </p>
		<P id=a2> <?php $id="candid";
		  echo "<button><a href=View.php?id=$id>View</a></button>"; ?> 
		</p>

		<p id=q3>View Admin Database </p>
		<P id=a3> <?php $id="admin";
		  echo "<button><a href=View.php?id=$id>View</a></button>"; ?> 
		</p>
		
		<p id=q4>View Results </p>
		<P id=a4> <?php $id="results";
		  echo "<button><a href=View.php?id=$id>View</a></button>"; ?> 
		</p>

	</div>

<?php
 include "Footer.php";
?>   