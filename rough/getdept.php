<?php
if(!(empty($_GET["dname"])))
{
 $dname=$_GET["dname"]."%";
 
 $con=mysqli_connect("localhost","root","","voting");
 $cmd="select * from dept_list where dname like '$dname'";
 $rst=mysqli_query($con, $cmd);

 while($row=mysqli_fetch_array($rst))
 {
 echo "<option value='$row[1]' />";
 }
}
?>
