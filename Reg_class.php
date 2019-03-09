<?php
 include "Validate.js";
	class reg
	{
		function register()
		{
?>				
				<input type="text" name="eid" placeholder="Enrollment No." required  class="form-control">
				<br>
				<input type="text" name="fname" placeholder="First Name" required class="form-control">
				<br>
				<input type="text" name="lname" placeholder="Last Name" required class="form-control" >
				<br>
				<input type="password" name="pass" placeholder="Enter Password" required class="form-control" onkeyup="checkpass(this.value)">
				<br>
				<span id="chck0" ></span>
				<input type="email" name="mail" placeholder="Email" required class="form-control" onblur="checkmail(this.value)">
				<br>
				<span id="chck1" ></span>
				<input type="number" name="mobile" placeholder="Mobile no." required class="form-control" onkeyup="checknum(this.value)">
				<br>
				<span id="chck2" ></span>
				<input type="number" name="year" placeholder="Year" required class="form-control">
				<br>
				<!--<input type="text" name="dept" placeholder="Department" list=list1 required class="form-control" onkeyup="getdept(this.value)">-->
				<fieldset>
				<legend>Department</legend>
				Physics <input type="checkbox" name="dept1" value="phy"> 
				Chemistry <input type="checkbox" name="dept2" value="chem"> 
				Statistics <input type="checkbox" name="dept2" value="stat"><br>
				Electronics <input type="checkbox" name="dept2" value="ele">
				Computer Application <input type="checkbox" name="dept2" value="CA"> 	
				Maths <input type="checkbox" name="dept3" value="maths"> 
				</fieldset>
				<br>
				<datalist id="list1"></datalist>
				<br>
				
<?php
		}
	}	
?>				