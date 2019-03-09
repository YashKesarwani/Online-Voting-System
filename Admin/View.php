<?php
session_start();
include "check.php";
  $thispage="Vdb";
  include "Header.php";
  include "Connect.php";  
?>  
 <title> View Database </title>

 <div style="margin-left:0px;margin-bottom:50px;">
<?php
 if(isset($_GET["task"]))
 {
	echo "<center><font size=5 color=red>Record Deleted..!!</font></center>";
 }
 if(isset($_GET["id"]))
 {
  if($_GET["id"]=="voter")
   {
     $obj=new display; 
     $obj->viewvoter();
   } 	
  if($_GET["id"]=="admin")
   {
     $obj=new display; 
     $obj->viewadmin();
   }    
  if($_GET["id"]=="candid")
   {
     $obj=new display; 
     $obj->viewcandid();
   }
  if($_GET["id"]=="results")
   {
     $obj=new display; 
     $obj->display1();
   }   
 }
?> 
 </div><br><br><br>
 
<?php
	include "Footer.php";
?>	