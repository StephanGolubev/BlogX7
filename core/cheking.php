<?php
   include("db.php");
   session_start();
   $newURL = "../php/dashboard.php";

   // проверка токеном
   if ($_POST['token'] == $_SESSION['token']){
   
      // если пост метод
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $con = new DB();

      $myusername = mysqli_real_escape_string($con->_link, $_POST['firstname']);
      // кодируем строку
      $mypassword = md5(mysqli_real_escape_string($con->_link, $_POST['password'])); 

      $res = $con->BuildSelectDouble("user","fname","password",$myusername,$mypassword);

      $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
      $pass = $row['password'];
      $id = $row['id'];
      

      // если админ, то сохраняем как админ
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
}else {
   header('Location: ../php/blogs.php');
}
?>
