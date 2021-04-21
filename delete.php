<?php
$con=mysqli_connect('localhost', 'root', '', 'insurance');
if(!$con){
die("Could not connect:".$con->connect_error());
}
$query="DELETE FROM vehicle WHERE 	VEHICLE_REGISTERATION_NUMBER='$_GET[	VEHICLE_REGISTERATION_NUMBER]'";
if(mysqli_query($con,$query))
	header("refresh:1; url=ALL_USER.php");
else{
	echo "not deleted";
}
?>