<?php
session_start();
unset($_SESSION["userid"]);
header("Location:../Home.php?task=kill");
?>