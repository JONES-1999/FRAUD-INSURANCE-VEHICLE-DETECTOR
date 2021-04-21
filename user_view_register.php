<?php
$FIRST_NAME=$_POST['FIRST_NAME'];
$LAST_NAME=$_POST['LAST_NAME'];
$AGE=$_POST['AGE'];
$VEHICLE_TYPE=$_POST['VEHICLE_TYPE'];
$AADHAR_NO=$_POST['AADHAR_NO'];
$DATE_OF_BIRTH=$_POST['DATE_OF_BIRTH'];
$MOBILE=$_POST['MOBILE'];
$USER=$_POST['USER'];
$PASSWORD=$_POST['PASSWORD'];
$a=mysqli_connect("localhost","root","","insurance");
if(!$a)
{
echo "error";
}
else
{
$sql="INSERT INTO register VALUES('".$FIRST_NAME."','".$LAST_NAME."','".$AGE."','".$VEHICLE_TYPE."','".$AADHAR_NO."','".$DATE_OF_BIRTH."','".$MOBILE."','".$USER."','".$PASSWORD."')";

if (!mysqli_query($a,$sql))
{
die ("error".mysqli_error($a));
}
else
{
header('location:user_view_register.html');
}

}
?>
