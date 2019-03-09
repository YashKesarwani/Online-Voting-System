<?php
session_start();
include "check.php";
$thispage="Vdb";
include "Header.php";
include "Connect.php";
?>  
 <title> Delete</title>
<?php
	if(isset($_GET["eid"]))
	{
		$eid=$_GET["eid"];
		$obj=new del;
		$obj->vdelete($eid);
	}
	if(isset($_GET["id"]))
	{
		$eid=$_GET["id"];
		$obj=new del;
		$obj->cdelete($eid);
	}
?>


<!--Delete from database-->