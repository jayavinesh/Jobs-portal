<!DOCTYPE html>
<html>
<style>
form{
 border: 3px solid #f1f1f1;
}

input[type=text],input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #6A11A7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px solid cement;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: red;
}

.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
@media screen and (max-width: 300px) {
    .cancelbtn {
       width: 100%;
    }

	.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

</style>
<body background="mini project 3.jpg">

<center><h2>USERS REGISTRATION FORM:</h2></center>

<?php

include 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$user=$_POST['name'];
	$mail=$_POST['mailid'];
	$gen=$_POST['gender'];
	$add=$_POST['address'];
	$exp=$_POST['experience'];
	$con=$_POST['contact'];
	$qua=$_POST['qualification'];
	$com=$_POST['companyid'];
	
	if(strlen($con) == 10)
		{
			if($com== 100)
				{
					$Com=100;
				}
				else if($com == 101)
				{
					$Com=101;
				}
				else if($com == 102)
				{
					$Com=102;
				}
				else if($com == 103)
				{
					$Com=103;
				}
				else if($com == 104)
				{
					$Com=104;
				}
				else if($com == 105)
				{
					$Com=105;
				}
				else if($com == 106)
				{
					$Com=106;
				}
				else if($com == 107)
				{
					$Com=107;
				}
				else if($com == 108)
				{
					$Com=108;
				}
				else if($com == 109)
				{
					$Com=109;
				}
				else if($com == 110)
				{
					$Com=110;
				}
				else
				{
					echo "<script> alert('Select valid comapny id') </script>";
				}
				
				
				
				$users="insert into users_table values('$user','$mail','$gen','$add',$exp,'$con','$qua','$Com')";
				$queryuser=mysqli_query($conn,$users);
		
				if(!$queryuser)
				{
					echo 'Error in registering'.'<br>'.mysqli_error($conn);
				}
				else
				{
					echo "Data registered successfully";
				}
			
		}
		else
		{
			echo "<script> alert('Enter valid phone number') </script>".mysqli_error($conn);
		}
}
else
{			

?>


<form action="<?php $_PHP_SELF ?>" method="post">

  <div class="container">
    <label><b>User Name:</b></label><br>
    <input type="text" placeholder="Enter User Name" name="name" required><br><br>
	
	<label><b>EMail ID:</b></label><br>
    <input type="mail" placeholder="Enter Mail ID" name="mailid" required><br><br>
	
    <label><b>Gender:</b></label><br>
    <input type="radio" name="gender" value="Male">Male<br>
	<input type="radio" name="gender" value="Female">Female<br><br>
        
    <label><b>Address:</b></label><br>
    <input type="text" placeholder="Enter address" name="address" required><br><br>    
  
    <label><b>Experience:</b></label><br>
    <input type="string" placeholder="Enter Experience" name="experience" required><br><br>

    <label><b>Contact_No:</b></label><br>
    <input type="number" placeholder="Enter Contact_No" name="contact" required><br><br>

    <label><b>Qualification:</b></label><br>
    <input type="text" placeholder="Enter Qualification" name="qualification" required><br>
	
<label><b>Company ID:</b></label><br>
<select name="companyid">
	<option value="-Com_ID-" selected>-Company ID-</option>
                <option value="100"> 100 </option>
	<option value="101"> 101 </option>
	<option value="102"> 102 </option>
	<option value="103"> 103 </option>
	<option value="104"> 104 </option>
	<option value="105"> 105 </option>
	<option value="106"> 106 </option>
	<option value="107"> 107 </option>
	<option value="108"> 108 </option>
	<option value="109"> 109 </option>
                <option value="110"> 110 </option>
</select><br><br>

    <button type="submit">REGISTER</button>
    </div>

  <div class="container" style="background-color:">
    <button type="button" class="cancelbtn" onClick='window.location.href="mini project1.html";' >Cancel</button>
  </div>
</form>

<?php
}
?>

</body>
</html>