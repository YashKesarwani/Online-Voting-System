  <script>
	function checkmail(mail)
	 {
		var c=new XMLHttpRequest();
		c.open("GET", "Validate.php?mail="+mail,true);
		c.send();
		c.onreadystatechange=function test3()
	  {	
		if(c.readyState==4)
		 document.getElementById("chck1").innerHTML=c.responseText; 
	  }
	 }
	
	function checknum(a)
     {
		 var b=a.search(/[0-9]{10}$/);
		 if(b!=0)
		 {
			document.getElementById("but").style.display = "none";
			document.getElementById("chck2").innerHTML="Mobile number should be of 10 digits";
		 }
		 else
		 {				
			document.getElementById("but").style.display = "";
			document.getElementById("chck2").innerHTML="";
		 }	
     } 
	function checkpass(pass)
	 {
 		 if(pass.length>20)
		 {
		  document.getElementById("chck0").innerHTML="Password should not be of more than 20 characters";
		 }
		else if(pass.length<5)
		 {
		  document.getElementById("chck0").innerHTML="Password should be of atleast 5 characters";
		 }
		else
		{
		  document.getElementById("chck0").innerHTML="";
  		}
	 } 
	 
  </script>	