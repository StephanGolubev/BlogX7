<?php
   include("db.php");
   session_start();
   $newURL = "../php/dashboard.php";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $con = new DB();

      $myusername = mysqli_real_escape_string($con->_link, $_POST['firstname']);
      $mypassword = md5(mysqli_real_escape_string($con->_link, $_POST['password'])); 

      $res = $con->BuildSelectDouble("user","fname","password",$myusername,$mypassword);

      $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
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
