<html>
<style>
button {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px solid cement;
    cursor: pointer;
	border-radius: 20px;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}
.backbtn{
    width: auto;
    padding: 10px 18px;
    background-color: ;
}

</style>
<head></head>

<body align="center" background="mini project 4.jpg">
<table border=2 align="center">
<tr>
<td> Company ID </td>
<td> Company Name </td>
<td> Gener </td>
<td> Number of posts </td>
<td> Last Date </td>
</tr>


<?php

include 'connect.php';

$vizianagaram="select * from companies where LOCATION_ID=4";
$vizquery=mysqli_query($conn,$vizianagaram);

if(mysqli_num_rows($vizquery) > 0)
{

	while($exevizianagaram= mysqli_fetch_assoc($vizquery))
	{
		echo "<tr><td>".$exevizianagaram['C_ID']."</td><td>".$exevizianagaram['C_NAME']."</td><td>".$exevizianagaram['GENER']."</td><td>".$exevizianagaram['No_of_Posts']."</td><td>".$exevizianagaram['Last_Date']."</td></tr>";
	}
	
}
else
{
echo "<script> alert('No data available in this section.Try in another section') </script>";
mysqli_error($conn);
}

?>
<form action="<?php $_PHP_SELF ?>" method="post">
<div class="container" style="background-color:" align="left">
    <button type="button" class="backbtn" onClick='window.location.href="mini project1.html";' >Back</button>
  </div>
</form>

</table>

</body>
</html>
