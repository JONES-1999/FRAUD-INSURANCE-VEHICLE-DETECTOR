<html>
<center>
<style>
body{
background-image:url("bike2.JPG");
background-repeat:no-repeat;
background-size:cover;
}

h1{
padding:10px;
font-style:inherit;
color:black;
background-color:white;
text-shadow:2px 2px 2px #F33;
opacity:0.7;
}
a{
background-color:grey;
color:black;
text-decoration:none;
}
div{
margin-top:100px;
padding:20px;
width:30%;
position:relative;
border-radius:5px;
display:inline-block;
background-color:#cedcff;
box-shadow:20px 20px 20px #194f90;
opacity:0.7;
}
input[type=text]{
padding:5px;
}
input[type=submit]{
padding:5px;
font-family:forte;
box-shadow:2px 5px;
}
label{
padding:5px;
font-size:20px;

}

div{
margin-top:150px;
padding:20px;
width:60%;
position:relative;
text-align:left;
border-radius:5px;
display:inline-block;
background-color:#cedcff;
box-shadow:20px 20px 20px #194f90;
opacity:0.7;
}
input[type=text]{
padding:5px;
}
input[type=submit]{
text-align:center;
padding:5px;
font-family:forte;
box-shadow:2px 5px;
}
label{
padding:5px;
font-size:20px;

}
</style>
</head>
<body>
<center>
<div>
<form method="post" action="update.php">

<?php
$conn=mysql_connect('localhost','root',"") or die ('error');
mysql_select_db('insurance')or die ('error');
$id=$_POST['myselect'];
$query="select *from vehicle where VEHICLE_REGISTERATION_NUMBER='$id'";
$result=mysql_query($query)or die (mysql_error());
if(mysql_num_rows($result)>0)
{
echo"<b>VEHICLE REGISTERATION NUMBER:";
echo"<br>";
echo'<select VEHICLE_REGISTERATION_NUMBER="myselect" name="myselect" class="f">';
while($row=mysql_fetch_array($result))
{ 
    echo'<option name="option[]" value="'.$row['VEHICLE_REGISTERATION_NUMBER'].'"VEHICLE_REGISTERATION_NUMBER="'.$row['VEHICLE_REGISTERATION_NUMBER'].'">'.$row['VEHICLE_REGISTERATION_NUMBER'].'</option>';
    echo'</select>';
	echo"<br>";
	echo"<br>";
	echo"OWNER NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=OWNER_NAME value='$row[0]'><br>";
	echo"OWNER ADDRESS:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=OWNER_ADDRESS value='$row[1]'><br>";
	echo"VEHICLE REGISTERATION NUMBER:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=VEHICLE_REGISTERATION_NUMBER maxlength= 10 value='$row[2]'><br>";
	echo"INSURANCE COMPANY:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=INSURANCE_COMPANY maxlength= 30 value='$row[3]'><br>";
	echo"INSURANCE NUMBER:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=INSURANCE_NUMBER value='$row[4]'><br>";
	echo"LICENSE NUMBER:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=LICENSE_NUMBER maxlength= 10 value='$row[5]'><br>";
	echo"VEHICLE NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=VEHICLE_NAME value='$row[6]'><br>";
	echo"VEHICLE MODEL:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=VEHICLE_MODEL value='$row[7]'><br>";
	echo"VEHICLE COLOUR:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=VEHICLE_COLOUR maxlength=8 value='$row[8]'><br>";
echo"REGISTERED DATE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =date name=REGISTERED_DATE maxlength=10 value='$row[9]'><br>";
echo"INSURENCE STARTING DATE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =date name=INSURENCE_STARTING_DATE maxlength=10 value='$row[10]'><br>";
echo"INSURENCE EXPIRY DATE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =date name=INSURENCE_EXPIRY_DATE maxlength=10 value='$row[11]'><br>";

echo"<input type =submit  value=update></b>";
}
}

else
{
	echo"No data found";
}
?>
</div>
</center>
</form>
</body>
</html>
