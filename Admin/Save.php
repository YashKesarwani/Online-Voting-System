<?php
 include "Connect.php";
 if(isset($_POST["id"]))
  {
    $faid=$_POST["id"];
	$aid=filter_var($faid,FILTER_SANITIZE_SPECIAL_CHARS);
	$faname=$_POST["name"];
	$aname=filter_var($faname,FILTER_SANITIZE_SPECIAL_CHARS);
	$apass=sha1($_POST["pass"]);
	$acontact=$_POST["contact"];
	$fmail=$_POST["mail"];
	$amail=filter_var($fmail,FILTER_SANITIZE_EMAIL);
	$fcity=$_POST["city"];
	$acity=filter_var($fcity,FILTER_SANITIZE_SPECIAL_CHARS);
	$obj=new admin;
	$obj->insert($aid,$aname,$apass,$acontact,$amail,$acity);
	header("Location:Add.php?task=done");
  }
?>  