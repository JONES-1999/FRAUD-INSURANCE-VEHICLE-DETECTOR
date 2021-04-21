<html>
<head>
<title>Fetch data</title>
<style type="text/css">
body{
     background-image: url(bike.jpg);
background-size:cover;
     background-attachment:fixed;
}
a:link,a:visited{
  display:block;
  front-weight:bold;
  color:#FFFFFF;
  background-color:#d96459;
  width:90px;
  text-aliogn:center;
  padding:2px;
  text-decoration:none;
  }
a:hover,a:active{
  background-color:#BDBDBD;
  }
h1{
   height:80px;
   font-size:46;
   color:#FFFF;
   text-align:center;
   line-height:80px;
   }
table{
      border-collapse: collapse;
      width: 100%;
      color: #d96459;
      font-family: monospace;
      text-align: center;
      line-height:40px;
      margin-top: 50px;
      }
th{
   background-color: #d96459;
   color: white;
   font-size: 17px;
   }
td{
   font-size: 17px;
   background-color: white;
  }
</style>
</head>
<body>
<h1 style=background-color:#d96459><b><center><font color="white">LIST OF USERS</style></center></h1>
<?php
session_start();
$_POST[EMAIL]=$_SESSION['RECUITER'];
?>
<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("could not connect:" .mysql_error());
}
mysql_select_db("insurance",$con);
echo "<h1><center><center></h1>";
$result=mysql_query("SELECT * FROM `vehicle` ",$con);
echo "<table border=3>";

echo "<tr>
<td><b>OWNER NAME</b></td><td>
<b>OWNER ADDRESS</b></td>
<td><b>VEHICLE REGISTERATION NUMBER</b></td>
<td><b>INSURANCE COMPANY</b></td>
<td><b>INSURANCE NUMBER</b></td>
<td><b>LICENSE NUMBER</b></td>


</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr> <td>".$row[OWNER_NAME]."</td>
<td>".$row[OWNER_ADDRESS]."</td> <td>".$row[VEHICLE_REGISTERATION_NUMBER]."</td>
<td>".$row[INSURANCE_COMPANY]."</td>
<td>".$row[INSURANCE_NUMBER]."</td>
<td>".$row[LICENSE_NUMBER]."</td></tr>";
}

echo "<table>";
?>

  