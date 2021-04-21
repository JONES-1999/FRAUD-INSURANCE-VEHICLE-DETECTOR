<?php
$conn=mysql_connect('localhost','root',"")or die('error');
mysql_select_db('insurance') or die('error');
$VEHICLE_REGISTERATION_NUMBER=$_POST['myselect0'];
$LICENSE_NUMBER=$_POST['LICENSE_NUMBER'];
$query="delete from vehicle where VEHICLE_REGISTERATION_NUMBER='$VEHICLE_REGISTERATION_NUMBER' and LICENSE_NUMBER='$LICENSE_NUMBER'";
$result=mysql_query($query) or die (mysql_error());
echo "DELETED SUCCESFULLY";
?>
