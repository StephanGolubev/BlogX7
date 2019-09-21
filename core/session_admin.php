<?php 
// проверяем что в админ панели админ а не кто-то другой
 if (!isset($_SESSION['user_login']) || $_SESSION['user_login'] == '') {
              header("location:../dashboard.php");
              die();
          }else{
            if ($_SESSION['admin'] == "true") {
            }else {
                header("location:../dashboard.php");
              die();
                }
            }
?>