<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
die('could not connect:' .mysql_error());
}
mysql_select_db("insurance",$con);
$result=mysql_query("SELECT * FROM register WHERE  USER='$_POST[USER]' and PASSWORD='$_POST[PASSWORD]'",$con);
$count=mysql_num_rows($result);
if($count==1)
{
session_start();
$_SESSION['USER']=$_POST[USER];
session_register('USER'); 
session_register('PASSWORD');
header("location:insuranceregister.html");
}
{
echo "invalid password";
}
mysql_close($con);
?>