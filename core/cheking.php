<?php
   include("config.php");
   session_start();
   $newURL = "../php/dashboard.php";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db, $_POST['firstname']);
      $mypassword = md5(mysqli_real_escape_string($db, $_POST['password'])); 
      
      $sql = "SELECT * FROM user WHERE fname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql) or die( mysqli_error($db));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $pass = $row['password'];
      $id = $row['id'];
      

      if($mypassword == $pass) {
         if ($row['status']) {
         $_SESSION['admin'] = "true";
      }else {
         $_SESSION['admin'] = "false";
      }
         $_SESSION['user_login'] = "true";
         header('Location: '.$newURL);

      }else{
         $error = "Your Login Name or Password is invalid";
         $_SESSION['error'] = $error;
         $page_referrer=$_SERVER['HTTP_REFERER'];
         header('Location: '.$page_referrer);
      }
   }
?>
