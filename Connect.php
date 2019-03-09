<?php
  class db
	{
		var $con;
		function __construct()
		{
		  if(mysqli_connect("localhost","root","","voting"))	
		     $this->con=mysqli_connect("localhost","root","","voting");
		  else
		    die("Could Not Connect:".mysqli_error($this->con));	
		}	
	}
  class register extends db
	{
	    function insert($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l)
			{
			 $inf=" ";
			 $this->ins="insert into vregister(eid,fname,lname,pass,mail,mobile,year,dept1,dept2,dept3,post,vdpt) 
			              values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')"; 
			 if(mysqli_query($this->con,$this->ins))
			  {
			    $inf=1;
				$this->ids="select * from vregister where mobile='$f'" ;
				$rst=mysqli_query($this->con,$this->ids);
				$row=mysqli_fetch_array($rst);
			  }	
			 else
		      {	
			    $inf=-1;
				echo "<center><h3 style=\" color:red \">".mysqli_error($this->con)."</h3></center>";
			  }				 
			 return $inf;		
			}
		function insert2($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)
			{
			 $inf=" ";
			 $this->ins="insert into cregister(eid,fname,lname,pass,mail,mobile,year,dept1,dept2,dept3,candid,cdpt,upic) 
			              values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')"; 
			 if(mysqli_query($this->con,$this->ins))
			  {
			    $inf=1;
				$this->ids="select * from cregister where mobile='$f'" ;
				$rst=mysqli_query($this->con,$this->ids);
				$row=mysqli_fetch_array($rst);
			  }	
			 else
		      {	
			    $inf=-1;
				echo "<center><h3 style=\" color:red \">".mysqli_error($this->con)."</h3></center>";
			  }				 
			 return $inf;		
			}
		function log($mail,$p)
			{
			 $spf=" ";
			 $pass=sha1($p);
			 $this->sel="Select * from vregister where mail='$mail' and pass='$pass'";
			 $res=mysqli_query($this->con,$this->sel);	
			 $row=mysqli_fetch_array($res);
			 if($row==0)
			  {
			    $spf=-1;
			  }	
			 else
		      {	
			    $spf=1;
			  }	
			return $spf;		
			} 
		function vote($mail)
			{
			 $spf=" ";
			 $this->sel="Select * from vregister where mail='$mail' and cast='0'";
			 $res=mysqli_query($this->con,$this->sel);	
			 $row=mysqli_fetch_array($res);
			 if($row==0)
			  {
			     echo "<center><h3 style=\" color:red \">Sorry..!! You have already casted your vote.<br>
						<img src=\"../Pics/Sorry2.jpeg\" width=30% height=30%></center>";
				 echo "";
			  }	
			 else
		      {	
			    $post=$row["post"];
				if($post=="cr")
				{
					$spf=$row["vdpt"];
					$this->vo="Select * from cregister where cdpt='$spf' and candid='cr'";
					$res2=mysqli_query($this->con,$this->vo);
					echo "<table border=\"4\" style=\"width:500px; margin-left:20px;\" >"; 
					echo "<caption>CAST YOUR VOTE</caption>";
					echo "<tr>";
					echo "<th><h3>Candidate Name</h3></th> <th></th>";
					while($row2=mysqli_fetch_array($res2))
					{
					 echo "<tr>";
					 echo "<td><h4>".$row2["fname"]." ".$row2["lname"]."</h4></td>";
					 $id=$row2["uid"];
					 echo "<td align=center> <button><a href=Vote.php?id=$id> VOTE </a></button> </td>";
					 echo "</tr>";
					}
					echo "</table>";
				}
				else if($post=="prez")
				{
					$this->vo="Select * from cregister where candid='prez'";
					$res2=mysqli_query($this->con,$this->vo);
					echo "<table border=\"4\" style=\"width:500px; margin-left:20px;\" >"; 
					echo "<caption>CAST YOUR VOTE</caption>";
					echo "<tr>";
					echo "<th><h3>Candidate Name</h3></th> <th></th>";
					while($row2=mysqli_fetch_array($res2))
					{
					 echo "<tr>";
					 echo "<td><h4>".$row2["fname"]." ".$row2["lname"]."</h4></td>";
					 $id=$row2["uid"];
					 echo "<td align=center> <button><a href=Vote.php?id=$id> VOTE </a></button> </td>";
					 echo "</tr>";
					}
					echo "</table>";
				}
				else if($post=="vprez")
				{
					$this->vo="Select * from cregister where candid='vprez'";
					$res2=mysqli_query($this->con,$this->vo);
					echo "<table border=\"4\" style=\"width:500px; margin-left:20px;\" >"; 
					echo "<caption>CAST YOUR VOTE</caption>";
					echo "<tr>";
					echo "<th><h3>Candidate Name</h3></th> <th></th>";
					while($row2=mysqli_fetch_array($res2))
					{
					 echo "<tr>";
					 echo "<td><h4>".$row2["fname"]." ".$row2["lname"]."</h4></td>";
					 $id=$row2["uid"];
					 echo "<td align=center> <button><a href=Vote.php?id=$id> VOTE </a></button> </td>";
					 echo "</tr>";
					}
					echo "</table>";
				}
				else if($post=="treasurer")
				{
					$this->vo="Select * from cregister where candid='treasurer'";
					$res2=mysqli_query($this->con,$this->vo);
					echo "<table border=\"4\" style=\"width:500px; margin-left:20px;\" >"; 
					echo "<caption>CAST YOUR VOTE</caption>";
					echo "<tr>";
					echo "<th><h3>Candidate Name</h3></th> <th></th>";
					while($row2=mysqli_fetch_array($res2))
					{
					 echo "<tr>";
					 echo "<td><h4>".$row2["fname"]." ".$row2["lname"]."</h4></td>";
					 $id=$row2["uid"];
					 echo "<td align=center> <button><a href=Vote.php?id=$id> VOTE </a></button> </td>";
					 echo "</tr>";
					}
					echo "</table>";
				}
			  }
			}	
	}		
	class Voting extends db
	{
		function casting($uid,$mail)
		    {
			  $spf=" ";	
			  /*$this->sel="Select * from cregister where uid='$uid'";
			  $res=mysqli_query($this->con,$this->sel);
			  $row=mysqli_fetch_array($res);
			  if($row==0)
			  {
				$spf=-1;
			  }
			  else
			  {*/
				$this->cmd="update cregister set votes=votes+1 where uid='$uid'";
				if(mysqli_query($this->con,$this->cmd))
				{
					$this->sel="update vregister set cast='1' where mail='$mail'";
					if(mysqli_query($this->con,$this->sel))
					{
						header("Location:Logout2.php");
					}	
				}
				else
				{
				 echo "Error";
			    }
				
			}
	}
	class Results extends db
	{
		function Result1()
		{
			$this->cmd="Select fname,lname from cregister where cdpt='phy' and candid='cr' and votes=(Select max(votes) from cregister)";
			$res=mysqli_query($this->con,$this->cmd);
			if(($row=mysqli_fetch_array($res))!=0)
			{	
						echo "<br><font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where cdpt='phy' and candid='cr'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<br><font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result2()
		{
			$this->cmd2="Select fname,lname from cregister where cdpt='chem' and candid='cr' and votes=(Select max(votes) from cregister)";
			$res=mysqli_query($this->con,$this->cmd2);
			if(($row=mysqli_fetch_array($res))!=0)
			{	
						echo "<br><font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where cdpt='chem' and candid='cr'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<br><font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result3()
		{
			$this->cmd="Select fname,lname from cregister where cdpt='stat' and candid='cr' and votes=(Select max(votes) from cregister)";
			$res=mysqli_query($this->con,$this->cmd);
			if(($row=mysqli_fetch_array($res))!=0)
			{	
						echo "<br><font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where cdpt='stat' and candid='cr'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<br><font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result4()
		{
			$this->cmd="Select fname,lname from cregister where cdpt='ele' and candid='cr' and votes=(Select max(votes) from cregister)";
			$res=mysqli_query($this->con,$this->cmd);
			if(($row=mysqli_fetch_array($res))!=0)
			{	
						echo "<br><font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where cdpt='ele' and candid='cr'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<br><font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result5()
		{
			$this->cmd="Select fname,lname from cregister where cdpt='CA' and candid='cr' and votes=(Select max(votes) from cregister)";
			$res=mysqli_query($this->con,$this->cmd);
			if(($row=mysqli_fetch_array($res))!=0)
			{	
						echo "<br><font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where cdpt='CA' and candid='cr'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<br><font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result6()
		{
			$this->cmd="Select fname,lname from cregister where cdpt='maths' and candid='cr' and votes=(Select max(votes) from cregister)";
			$res=mysqli_query($this->con,$this->cmd);
			if(($row=mysqli_fetch_array($res))!=0)
			{	
						echo "<br><font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where cdpt='maths' and candid='cr'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<br><font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result7()
		{
			$this->com="Select fname,lname from cregister where candid='prez' and votes=(Select max(votes) from cregister)";
			$rst=mysqli_query($this->con,$this->com);
			if(($row=mysqli_fetch_array($rst))!=0)
			{	
						echo "<font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where candid='prez'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<br><font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result8()
		{
			$this->com="Select fname,lname from cregister where candid='vprez' and votes=(Select max(votes) from cregister)";
			$rst=mysqli_query($this->con,$this->com);
			if(($row=mysqli_fetch_array($rst))!=0)
			{	
						echo "<font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where candid='vprez'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
		function Result9()
		{
			$this->com="Select fname,lname from cregister where candid='treasurer' and votes=(Select max(votes) from cregister)";
			$rst=mysqli_query($this->con,$this->com);
			if(($row=mysqli_fetch_array($rst))!=0)
			{	
						echo "<font color=\"red\">".$row["fname"]." ".$row["lname"]."</font>";				
			}	
			else
			{
				$this->b="Select fname,lname from cregister where candid='treasurer'";
				$c=mysqli_query($this->con,$this->b);
				$d=mysqli_fetch_array($c);
				echo "<font color=\"red\">".$d["fname"]." ".$d["lname"]."</font>";
			}
		}
	
	function display()
		{
			$this->cmd="Select eid,fname,lname,votes,cdpt,upic from cregister where candid='cr' order by cdpt";
			$this->com="Select eid,fname,lname,votes,candid,upic from cregister where candid!='cr' order by candid";
			$rst=mysqli_query($this->con,$this->cmd);
			$res=mysqli_query($this->con,$this->com);
			echo "<table border=4 width=580 style=\"float:left;margin-right:100px;border:4px groove white;\"><tr>";
			echo "<th>Enrollment No.</th><th>Name</th><th>Department</th><th>Votes</th><th>Photo</th>";
			echo "</tr>";
			while($row=mysqli_fetch_array($rst))
			{
					echo "<tr>";					
					echo "<td>".$row["eid"]."</td>";
					echo "<td>".$row["fname"]." ".$row["lname"]."</td>";
					echo "<td align=center>".$row["cdpt"]."</td>";
					echo "<td  align=center>".$row["votes"]."</td>";				
					echo "<td><img src='".$row["upic"]."' width=50 height=50></td>";
					echo "</tr>";
			}
			echo "</table>";
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
			echo "</table>";
		}
		
	}
	
?>