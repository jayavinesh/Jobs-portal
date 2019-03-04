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
    background-color: #f44336;
}

</style>
<body>


<?php

include 'connect.php';

if(isset($_POST['sub']))
{
	$upd=$_POST['Updation'];
	$dat=$_POST['last'];
	$compin=$_POST['pin'];
	$psw=$_POST['password'];
	
		$update="update companies set No_of_Posts=$upd , Last_Date='$dat' where Company_Pin=$compin and Password=$psw";
		$queryu=mysqli_query($conn,$update);
		
		if($queryu)
		{
			echo "<script> alert('Updated successfully')</script>";
			include 'dd.php';
			
		}
		else
		{
			echo 'Error in updating'.'<br>'.mysqli_error($conn);
		}
	
}
		
else
{	

?>
<h1>Updation</h1>

<form action="" method="post" align="center">

  <div class="container"> 
        <center>
    <label><b>Updation of No.of Posts:</b></label>
    <input type="number" placeholder="Update the posts" name="Updation" required><br><br>
	
	<label><b>Updation of Last_Date:</b></label>
    <input type="date" placeholder="Update the date" name="last" required><br><br>
	
	<label><b>Company_Pin:</b></label><br>
    <input type="number" placeholder="Enter Company pin" name="pin" required><br><br>
	
	
	<label><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>
	    </center>

    <input type="submit" value="Submit" name="sub" onclick="window.location='login.php';"/>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onClick="window.location.href='frame.html';">Cancel</button>
  </div>
</form>

<?php
}
?>

</body>
</html>

