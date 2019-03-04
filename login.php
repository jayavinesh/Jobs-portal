<html>
<style>
form{
 border: 3px solid #f1f1f1;
}

input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: blue;
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
    background-color: black;
}

</style>
<body align="center" background="http://www.qygjxz.com/data/out/187/5023864-plain-wallpaper.jpg">



<?php

include 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$compin=$_POST['pin'];
	$pwd=$_POST['psw'];
	
	$check="select Company_Pin,Password from companies where Company_Pin=$compin and Password=$pwd";
	$query=mysqli_query($conn,$check);
	$querycheck=mysqli_fetch_assoc($query);
	if($querycheck['Company_Pin'] == $compin && $querycheck['Password'] == $pwd)
	{
	$logg="select USERS_NAME,EMAIL_ID,GENDER,ADDRESS,EXPERIENCE,CONTACT_NO,QUALIFICATION from users_table where Com_ID in(select C_ID from companies where Company_Pin='$compin' and Password='$pwd')";
	$querylog=mysqli_query($conn,$logg);
		echo "<table border=2 align='center'>
<tr>
<td> NAME </td>
<td> MAIL ID </td>
<td> GENDER </td>
<td> ADDRESS </td>
<td> EXPEREINCE </td>
<td> PHONE NUMBER </td>
<td> QUALIFICATION </td>
</tr>";
	while($sql=mysqli_fetch_assoc($querylog))
	{
		echo "<tr><td>".$sql['USERS_NAME']."</td><td>".$sql['EMAIL_ID']."</td><td>".$sql['GENDER']."</td><td>".$sql['ADDRESS']."</td><td>".$sql['EXPERIENCE']."</td><td>".$sql['CONTACT_NO']."</td><td>".$sql['QUALIFICATION']."</td></tr>";
		
	}
	}
	else 
	{
		echo 'enter valid details';
	}
}
else
{
	

?>
<h2>Company Login</h2>

<form action="" method="post" align="center">

  <div class="container"> 
      <center>
    <label><b>Company Pin:</b></label><br>
    <input type="number" placeholder="Enter Company Pin" name="pin" required><br><br>
	
	<label><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>
      </center>
    
    <input type="submit" value="Login"><br>
    </div>
</form>
</table>
<?php
}
?>

</body>
</html>

