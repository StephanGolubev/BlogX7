<?php 
include("db.php");
session_start();

$first = htmlspecialchars($_POST['fname']);
$password = htmlspecialchars($_POST['pass1']);
$password2 = htmlspecialchars($_POST['pass2']);

if ($password != $password2) {
  
  $error = '<div style="color: red;">Password does not match, Try again</div>';
	$_SESSION["status_login"] = $error;
	$page_referrer=$_SERVER['HTTP_REFERER'];
  header('Location: '.$page_referrer);

}else{

if (null !==($first)) {

     $con = new DB();

    $fname = mysqli_real_escape_string($con->_link, $first);
    // $fname = $first;
    $pass = md5(mysqli_real_escape_string($con->_link, $password)); 
    $insert_vals = array();

    if (!filter_var($fname, FILTER_VALIDATE_EMAIL)) {
        $error = "<h4>Not email</4>";
        $_SESSION["status_login"] = $error;
	      $page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
    }else {

      // проверяем если такой есть юзер
      $res = $con->selectWithIdVar("user","fname" ,$fname);
      $res_count = mysqli_num_rows($res);
      
      if ($res_count > 0) {
        $error = "<h4>Try to use anouther user name! This one is bussy</4>";
        $_SESSION["status_login"] = $error;
	      $page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
      }else{

        // данные для записи
        $tables = array('fname', 'password', 'status');
        array_push($insert_vals, $fname);
        array_push($insert_vals, $pass);
        array_push($insert_vals, "0");

        $query =  $con->insert('user',$tables,$insert_vals);
          if ($query==TRUE) {
      
          $_SESSION["user_login"] = "true";
          $_SESSION["status_login"] = "true";
          $page_referrer=$_SERVER['HTTP_REFERER'];
          header('Location: ../php/dashboard.php');

		} else {
		echo "Error" . $sql . "<br>" . $db->error;
		}
      }
		
    } 	
  }
}
