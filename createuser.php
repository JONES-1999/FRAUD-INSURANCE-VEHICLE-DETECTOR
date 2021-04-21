<?php
   include("register.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $ADMIN_NAME = mysqli_real_escape_string($db,$_POST['ADMIN_NAME']);
      $ADMIN_PASSWORD = mysqli_real_escape_string($db,$_POST['ADMIN_PASSWORD']); 
      
      $sql = "SELECT ADMIN_NAME FROM admin WHERE ADMIN_NAME = '$myADMIN_NAME' and ADMIN_PASSWORD = '$myADMIN_PASSWORD'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myUSER_ID and $myPASSWORD, table row must be 1 row
		
      if($count == 1) {
         session_register("myADMIN_NAME");
         $_SESSION['login_user'] = $myADMIN_NAME;
         
         header("location:adminlogin.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
