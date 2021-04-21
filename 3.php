<html>
<head>
<title>SEARCH USER INFORMATION</title>
<style type="text/css">
body{
     background-image: url(bike.jpg);
 background-size:cover;
     background-attachment:fixed;

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
      margin-top: 200px;
      }
th{
   background-color: WHITE;
   color: RED;
   font-size: 17px;
   }
td{
   font-size: 20px;
background-color: WHITE;
color: RED;  
}
</style>
</head>
<body>
  <h1 style=background-color:#d96459><b><center><font color="white">VEHICLE DETAILS</style></center></h1>
<table border="5px">
<tr>
<th>OWNER NAME</th>
<th>VEHICLE REGISTERATION NUMBER</th>
<th>INSURANCE NUMBER</th>
<th>REGISTERED DATE</th>
<th>INSURENCE STARTING DATE</th>
<th>INSURENCE ENDING DATE</th>
</tr>

<?php
$con=mysqli_connect('localhost', 'root', '', 'insurance');
if(!$con){
die("Could not connect:".$con->connect_error());
}
$query="SELECT * FROM vehicle WHERE VEHICLE_REGISTERATION_NUMBER	='".$_POST['VEHICLE_REGISTERATION_NUMBER']."'";
$result= mysqli_query($con,$query);
while($row= mysqli_fetch_array($result)){
echo "<tr><td>".$row["OWNER_NAME"]."</td><td>".$row["VEHICLE_REGISTERATION_NUMBER"]."</td><td>".$row["INSURANCE_NUMBER"]."</td><td>".$row["REGISTERED_DATE"]."</td><td>".$row["INSURENCE_STARTING_DATE"]."</td><td>".$row["INSURENCE_EXPIRY_DATE"]."<td></tr>";
}
?>
