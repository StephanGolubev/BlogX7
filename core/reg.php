<?php 
include("config.php");
session_start();

$first = $_POST['fname'];
$password = $_POST['pass1'];
$password2 = $_POST['pass2'];

if ($password != $password2) {
  
  $error = '<div style="color: red;">Password does not match, Try again</div>';
	$_SESSION["status_login"] = $error;
	$page_referrer=$_SERVER['HTTP_REFERER'];
  header('Location: '.$page_referrer);

}else{

if (null !==(trim($first))) {

	  $fname = mysqli_real_escape_string($db, $first);
    $pass = md5(mysqli_real_escape_string($db, $password)); 
      
      $sql = "SELECT * FROM user WHERE fname = '$fname'";
      $result = mysqli_query($db,$sql) or die( mysqli_error($db));
      $row_cnt = $result->num_rows;

      if ($row_cnt > 0) {
        $error = "<h2>Try to use anouther user name! This one is bussy</2>";
        $_SESSION["status_login"] = $error;
	      $page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
      }else{
      	$sql= "INSERT INTO user (`fname`, `password`,`status`) VALUES ('$fname', '$pass','0')";
      	if ($db->query($sql)==TRUE) {
      
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
