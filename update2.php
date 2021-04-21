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
color:red;
background-color:white;
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
<form method="post" action="update1.php">

<hr>
<center>
<h1>SELECT THE VEHICLE REGISTRATION NUMBER</h1>
</center>
<?php
echo "<center>";
$conn=mysql_connect('localhost','root',"") or die ('error');
mysql_select_db('insurance')or die ('error');
$query="select * from vehicle";
$result=mysql_query($query)or die ('error');
echo'<select VEHICLE_REGISTERATION_NUMBER="myselect" name="myselect">';
while($row=mysql_fetch_array($result))
{ 
    echo'<option name="option[]" value="'.$row['VEHICLE_REGISTERATION_NUMBER'].'"VEHICLE_REGISTERATION_NUMBER="'.$row['VEHICLE_REGISTERATION_NUMBER'].'">'.$row['VEHICLE_REGISTERATION_NUMBER'].'</option>';
	$i++;
}
echo'</select>';
echo"<br>";
?>
<br>
<input type= submit value=submit>


</a>
</div>
</center>
</form>
</body>
</html>
