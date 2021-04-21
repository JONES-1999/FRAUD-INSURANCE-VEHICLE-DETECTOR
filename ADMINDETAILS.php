<?php
$FIRST_NAME=$_POST['FIRST_NAME'];
$LAST_NAME=$_POST['LAST_NAME'];
$DOB=$_POST['DOB'];
$ADMIN_POSITION=$_POST['ADMIN_POSITION'];
$ADDRESS=$_POST['ADDRESS'];
$UNIQUE_REGISTERATION_NUMBER=$_POST['UNIQUE_REGISTERATION_NUMBER'];
$ADMIN=$_POST['ADMIN'];
$PASSWORD=$_POST['PASSWORD'];
$a=mysqli_connect("localhost","root","","insurance");
if(!$a)
{
echo "error";
}
else
{
$sql="INSERT INTO ADMINDEATILS VALUES('".$FIRST_NAME."','".$LAST_NAME."','".$DOB."','".$ADMIN_POSITION."','".$ADDRESS."','".$UNIQUE_REGISTERATION_NUMBER."','".$ADMIN."','".$PASSWORD."')";


if (!mysqli_query($a,$sql))
{
die ("error".mysqli_error($a));
}
else
{
header('location:ADMINREGISTER.html');
}

}
?>
