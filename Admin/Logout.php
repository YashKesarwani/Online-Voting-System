<?php
session_start();
unset($_SESSION["admin"]);
header("Location:../Home.php?task=kill");
?>