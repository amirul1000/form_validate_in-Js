<script language="javascript">
  function validate(){
     first_name  = document.getElementById("first_name").value;
	 last_name   = document.getElementById("last_name").value;
	 email       = document.getElementById("email").value;
	 if(first_name=='')
	 {
		 alert("First Name is empty");
		 return false;
	 }
	 
	 if(last_name=='')
	 {
		 alert("Last Name is empty");
		 return false;
	 }
	 
	 if(email=='')
	 {
		 alert("Email is empty");
		 return false;
	 }
	 
	 return true;
  }
	 
</script> 
<form action="submit.php" method="post" onSubmit="return validate()">
   First Name
   <input type="text" name="first_name" id="first_name" value=""><br><br>
    Last Name
   <input type="text" name="last_name" id="last_name" value=""><br><br>
   Email
   <input type="text" name="email" id="email" value=""><br><br>
   <input type="submit" value="Submit">
</form>