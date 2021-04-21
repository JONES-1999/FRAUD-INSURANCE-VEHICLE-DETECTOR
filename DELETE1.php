<html>
<center>
<style>
body{
background-image:url("bike3.JPG");
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
margin-top:50px;
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
margin-top:50px;
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
<form method="POST" action="DELETE2.php">


<hr>
<center>
<h1> SELECT THE VEHICLE REGISTRATION NUMBER</h1><br>
<?php
$conn=mysql_connect('localhost','root',"")or die('error');
mysql_select_db('insurance') or die('error');
$query="select*from vehicle";
$result=mysql_query($query)or die('error');
echo'<select VEHICLE_REGISTERATION_NUMBER="myselect0" name="myselect0"required>';
while($row=mysql_fetch_array($result))
{
	echo'<option name="option[]" value="'.$row['VEHICLE_REGISTERATION_NUMBER'].'"VEHICLE_REGISTERATION_NUMBER="'.$row['VEHICLE_REGISTERATION_NUMBER'].'">'.$row['VEHICLE_REGISTERATION_NUMBER'].'</option>';
	$i++;
}
echo'</select>';
echo"<br>";
?>
<br>
<input type=text name=LICENSE_NUMBER maxlength= 10 placeholder="Enter the LICENSE NUMBER" required="required"/>
<br><br>
<input type=submit value=Delete >
<a href="DELETE1.php"></a>
</div>
</center>
</form>
</body>
</html>
