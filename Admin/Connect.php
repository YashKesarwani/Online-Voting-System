<?php
 class connect
  {
    function __construct()
	 {
		$this->con=mysqli_connect("localhost","root","","voting");
	 }	
  }	
	
 class display extends connect
  {
    function viewvoter()
	{
	  $this->cmd="select * from vregister";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table border=3>";
		 echo "<tr>";
		 echo "<th>Enrollment no.</th>";
		 echo "<th>First Name</th>";
		 echo "<th>Last Name</th>";
		 echo "<th>Password</th>";
		 echo "<th>Email</th>";
		 echo "<th>Mobile</th>";
		 echo "<th>Year</th>";
		 echo "<th>Dept 1</th>";
		 echo "<th>Dept 2</th>";
		 echo "<th>Dept 3</th>";
		 echo "<th>Post</th>";
		 echo "<th>Voting Dept.</th>";
		 echo "<th>Cast</th>";
		 echo "<th>Tools</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr  style=\"color:red\">";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[2]</td>";
		 echo "\t";
		 echo "<td>$row[3]</td>";
		 echo "\t";
		 echo "<td>$row[4]</td>";
		 echo "\t";
		 echo "<td>$row[5]</td>";
		 echo "\t";
		 echo "<td>$row[6]</td>"; 
		 echo "\t";
		 echo "<td>$row[7]</td>";
		 echo "\t";
		 echo "<td>$row[8]</td>";
		 echo "\t";
		 echo "<td>$row[9]</td>";
		 echo "\t";
		 echo "<td>$row[10]</td>";
		 echo "\t";
		 echo "<td>$row[11]</td>";
		 echo "\t";
		 echo "<td>$row[12]</td>";
		 echo "\t";
		 echo "<td>$row[13]</td>";
		 echo "\t";
		 echo "<td><button><a href='Delete.php?eid=$row[0]'>Delete</a></button></td>";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewcandid()
	{
	  $this->cmd="select * from cregister";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table border=3>";
		 echo "<tr>";
		 echo "<th>Enrollment no.</th>";
		 echo "<th>First Name</th>";
		 echo "<th>Last Name</th>";
		 echo "<th>Password</th>";
		 echo "<th>Email</th>";
		 echo "<th>Mobile</th>";
		 echo "<th>Year</th>";
		 echo "<th>Dept 1</th>";
		 echo "<th>Dept 2</th>";
		 echo "<th>Dept 3</th>";
		 echo "<th>Post</th>";
		 echo "<th>Voting Dept.</th>";
		 echo "<th>Votes</th>";
		 echo "<th>Tools</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr  style=\"color:red\">";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[2]</td>";
		 echo "\t";
		 echo "<td>$row[3]</td>";
		 echo "\t";
		 echo "<td>$row[4]</td>";
		 echo "\t";
		 echo "<td>$row[5]</td>";
		 echo "\t";
		 echo "<td>$row[6]</td>"; 
		 echo "\t";
		 echo "<td>$row[7]</td>";
		 echo "\t";
		 echo "<td>$row[8]</td>";
		 echo "\t";
		 echo "<td>$row[9]</td>";
		 echo "\t";
		 echo "<td>$row[10]</td>";
		 echo "\t";
		 echo "<td>$row[11]</td>";
		 echo "\t";
		 echo "<td>$row[12]</td>";
		 echo "\t";
		 echo "<td>$row[13]</td>";
		 echo "\t";
		 echo "<td><button><a href='Delete.php?id=$row[0]'>Delete</a></button></td>";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewadmin()
	{
	  $this->cmd="select * from admin";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table border=3>";
		 echo "<tr>";
		 echo "<th>Admin ID</th>";
		 echo "<th>Admin Name</th>";
		 echo "<th>Password</th>";
		 echo "<th>Contact No.</th>";
		 echo "<th>Email-ID</th>";
		 echo "<th>City</th>";
		 echo "<th>Pic</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr  style=\"color:red\">";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "<td>$row[2]</td>";
		 echo "\t";
		 echo "<td>$row[3]</td>";
		 echo "\t";
		 echo "<td>$row[4]</td>";
		 echo "\t";
		 echo "<td>$row[5]</td>";
		 echo "\t";
		 echo "<td>$row[6]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}	
	
	function display1()
		{
			$this->cmd="Select eid,fname,lname,votes,cdpt,upic from cregister where candid='cr' order by cdpt";
			$this->com="Select eid,fname,lname,votes,candid,upic from cregister where candid!='cr' order by candid";
			$rst=mysqli_query($this->con,$this->cmd);
			$res=mysqli_query($this->con,$this->com);
			echo "<table border=4 width=580 style=\"float:left;margin-right:100px;margin-bottom:150px;border:4px groove white;\"><tr>";
			echo "<th>Enrollment No.</th><th>Name</th><th>Department</th><th>Votes</th><th>Photo</th>";
			echo "</tr>";
			while($row=mysqli_fetch_array($rst))
			{
					echo "<tr>";					
					echo "<td>".$row["eid"]."</td>";
					echo "<td>".$row["fname"]." ".$row["lname"]."</td>";
					echo "<td align=center>".$row["cdpt"]."</td>";
					echo "<td  align=center>".$row["votes"]."</td>";				
					echo "<td><img src='../".$row["upic"]."' width=50 height=50></td>";
					echo "</tr>";
			}
			echo "</table><br><br>";
			echo "<table border=4 width=580 style=\"border:4px groove white;\"><tr>";
			echo "<th>Enrollment No.</th><th>Name</th><th>Position</th><th>Votes</th><th>Photo</th>";
			while($rw=mysqli_fetch_array($res))
			{
					echo "<tr>";					
					echo "<td>".$rw["eid"]."</td>";
					echo "<td>".$rw["fname"]." ".$rw["lname"]."</td>";
					echo "<td align=center>".$rw["candid"]."</td>";
					echo "<td  align=center>".$rw["votes"]."</td>";			
					echo "<td><img src='".$rw["upic"]."' width=50 height=50></td>";					
					echo "</tr>";
			}
			echo "</table><br><br>";
		}
  }	
  
  class del extends connect
  {
	function vdelete($eid)
	{
		$this->cmd="delete from vregister where eid='$eid'";
		if(mysqli_query($this->con,$this->cmd))
		header("Location:View.php?task=OK&id=voter");
	}
	function cdelete($eid)
	{
		$this->cmd="delete from cregister where eid='$eid'";
		if(mysqli_query($this->con,$this->cmd))
		header("Location:View.php?task=OK&id=candid");
	}
  }
  
    
 class admin extends connect
  { 
    function select($name)
     {    
	    $ret=" ";
		
		$this->cmd="select * from admin where name='$name'";
		$res=mysqli_query($this->con,$this->cmd);
		$row=mysqli_fetch_array($res);
		$name=$row[1];
		$contact=$row[3];
		$mail=$row[4];
		$city=$row[5];
		$apic=$row[6];
		$ret=$name." ,".$contact." ,".$mail.", ".$city." ,".$apic;
		return ($ret); 
	}
	
	function insert($a,$b,$c,$d,$e,$f) 
	{
	  $this->ins="insert into admin values('$a','$b','$c','$d','$e','$f',' ')";
	  $rst=mysqli_query($this->con,$this->ins);
	}
  }	

?>	 