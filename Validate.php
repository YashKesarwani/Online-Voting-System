<?php
if(!(empty($_GET["mail"])))
{
 if(!(filter_var($_GET["mail"],FILTER_VALIDATE_EMAIL)))
  echo "Invalid Email..!! Please write a valid address.";   
}
?>