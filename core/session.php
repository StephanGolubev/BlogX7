<?php
   // include('config.php');
   session_start();
   $_SESSION['login_user'] = "null";
   
   if ($_SESSION['login_user']=='null') {
      # code...
   }else {
      $_SESSION['login_user'] = "null";
   }

   
   // $ses_sql = mysqli_query($db,"select fname from user where fname= '$user_check' ");
   
   // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   // $login_session = $row['fname'];
   
   // if(!isset($_SESSION['login_user'])){
         // header("location:login.php");
         // die();
   // }
?>