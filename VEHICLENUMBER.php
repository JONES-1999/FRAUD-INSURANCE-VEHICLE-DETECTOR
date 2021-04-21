<?php
session_start();
$a=mysqli_connect("localhost","root","","insurance");
if(!$a)
{
die("couldn't connect:".mysqli_error($a));
}
else
{
if (isset($_POST['SUBMIT']))
{ 
$sql="SELECT * FROM vehicle WHERE VEHICLE_REGISTERATION_NUMBER='".$_POST['VEHICLE_REGISTERATION_NUMBER']."'";
$_SESSION['editid']=$_POST['VEHICLE_REGISTERATION_NUMBER'];
$res=mysqli_query($a,$sql);

if (!$res)
{
die("couldn't connect:".mysql_error());
}
while ($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
$OWNER_NAME=$row['OWNER_NAME'];
$OWNER_ADDRESS=$row['OWNER_ADDRESS'];
$VEHICLE_REGISTERATION_NUMBER=$row['VEHICLE_REGISTERATION_NUMBER'];
$VEHICLE_NAME=$row['VEHICLE_NAME'];
$VEHICLE_MODEL=$row['VEHICLE_MODEL'];
$VEHICLE_COLOUR=$row['VEHICLE_COLOUR'];
$REGISTERED_DATE=$row['REGISTERED_DATE'];
$INSURENCE_STARTING_DATE=$row['INSURENCE_STARTING_DATE'];
$INSURENCE_EXPIRY_DATE=$row['INSURENCE_EXPIRY_DATE'];

echo '<table border="0" cellspacing="10" cellpadding="8">
<tr><td>
<font face="Arial"><b>OWNER NAME</b></font></td>
<td>
<font face="Arial">:</font>
</td>
<td>
<font face="Arial">'.$OWNER_NAME.'</font>
</td></tr>
<tr>
<td>
<font face="Arial"><b>OWNER ADDRESS</b></font>
</td>
<td>:</td>
<td><font face="Arial">'.$OWNER_ADDRESS.'</font></td>
</tr>
<tr>
<td><font face="Arial"><b>VEHICLE REGISTERATION NUMBER</b></font></td>
<td>:</td>
<td><font face="Arial">'.$VEHICLE_REGISTERATION_NUMBER.'</font></td>
</tr>
<tr>
<td><font face="Arial"><b>VEHICLE NAME</b></font></td>
<td>:</td>
<td><font face="Arial">'.$VEHICLE_NAME.'</font></td>
</tr>
<tr>
<td><font face="Arial"><b>VEHICLE MODEL</b></font></td>
<td>:</td>
<td><font face="Arial">'.$VEHICLE_MODEL.'</font></td>
</tr>
<tr>
<td><font face="Arial"><b>VEHICLE COLOUR</b></font></td>
<td>:</td>
<td><font face="Arial">'.$VEHICLE_COLOUR.'</font></td>
</tr>
<tr>
<td><font face="Arial"><b>REGISTERED DATE</b></font></td>
<td>:</td>
<td><font face="Arial">'.$REGISTERED_DATE.'</font></td>
</tr>
<tr>
<td><font face="Arial"><b>INSURENCE STARTING DATE</b></font></td>
<td>:</td>
<td><font face="Arial">'.$INSURENCE_STARTING_DATE.'</font></td>
</tr>
<tr>
<td><font face="Arial"><b>INSURENCE EXPIRY DATE:</b></font></td>
<td>:</td>
<td><font face="Arial">'.$INSURENCE_EXPIRY_DATE.'</font></td>
</tr>';
		
}
}
}

?> 
