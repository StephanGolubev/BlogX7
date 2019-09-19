<?php
   include("config.php");
   session_start();
   $newURL = "dashboard.php";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   	$creater = $_SESSION["login_user"];
      
    $mytitle = mysqli_real_escape_string($db, $_POST['title']);
    $mytext = mysqli_real_escape_string($db, $_POST['text']);
    $myusername = mysqli_real_escape_string($db, $creater);
    $id = $_SESSION['user_id'];
      
    $sql= "INSERT INTO blogs (`title`, `body`, `user`, `user_id`) VALUES ('$mytitle', '$mytext', '$myusername', '$id')";
    if ($db->query($sql)==TRUE) {
		$_SESSION['new_blog_title'] = $_POST['title'];
        header('Location: '.$newURL);
		}
	} else {
		echo "Something went wrong, try again later!";
	}
	$db->close();

		
    
 ?>