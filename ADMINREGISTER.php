<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
die('could not connect:' .mysql_error());
}
mysql_select_db("insurance",$con);
$result=mysql_query("SELECT * FROM admindeatils WHERE  ADMIN='$_POST[ADMIN]' and PASSWORD='$_POST[PASSWORD]'",$con);
$count=mysql_num_rows($result);
if($count==1)
{
session_start();
$_SESSION['ADMIN']=$_POST[ADMIN];
session_register('ADMIN'); 
session_register('PASSWORD');
header("location:ADMINVIEW.html");
}
{
echo "invalid password";
}
mysql_close($con);
?>