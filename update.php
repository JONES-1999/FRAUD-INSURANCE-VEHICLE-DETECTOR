<html>
<?php
$conn=mysql_connect('localhost','root',"") or die ('error');
mysql_select_db('insurance')or die ('error');
$VEHICLE_REGISTERATION_NUMBER=$_POST['myselect'];
$OWNER_NAME=$_POST['OWNER_NAME'];
$OWNER_ADDRESS=$_POST['OWNER_ADDRESS'];
$VEHICLE_REGISTERATION_NUMBER=$_POST['VEHICLE_REGISTERATION_NUMBER'];
$INSURANCE_COMPANY=$_POST['INSURANCE_COMPANY'];
$INSURANCE_NUMBER=$_POST['INSURANCE_NUMBER'];
$LICENSE_NUMBER=$_POST['LICENSE_NUMBER'];
$VEHICLE_NAME=$_POST['VEHICLE_NAME'];
$VEHICLE_MODEL=$_POST['VEHICLE_MODEL'];
$VEHICLE_COLOUR=$_POST['VEHICLE_COLOUR'];
$REGISTERED_DATE=$_POST['REGISTERED_DATE'];
$INSURENCE_STARTING_DATE=$_POST['INSURENCE_STARTING_DATE'];
$INSURENCE_EXPIRY_DATE=$_POST['INSURENCE_EXPIRY_DATE'];

$query="update vehicle set OWNER_NAME='$OWNER_NAME' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set OWNER_ADDRESS='$OWNER_ADDRESS' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set INSURANCE_COMPANY='$INSURANCE_COMPANY' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set INSURANCE_NUMBER='$INSURANCE_NUMBER' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set LICENSE_NUMBER='$LICENSE_NUMBER' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set VEHICLE_NAME='$VEHICLE_NAME' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set VEHICLE_MODEL='$VEHICLE_MODEL' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set VEHICLE_COLOUR='$VEHICLE_COLOUR' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set REGISTERED_DATE='$REGISTERED_DATE' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set INSURENCE_STARTING_DATE='$INSURENCE_STARTING_DATE' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

$query="update vehicle set INSURENCE_EXPIRY_DATE='$INSURENCE_EXPIRY_DATE' where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER'";
$result=mysql_query($query) or die(mysql_error());

echo"updated Successfully";


?>
