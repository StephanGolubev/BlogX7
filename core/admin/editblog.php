<?php
   include("../config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form


    $id = mysqli_real_escape_string($db, $_POST['id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $text = mysqli_real_escape_string($db, $_POST['text']);

    // $myusername = mysqli_real_escape_string($db, $creater);
    // $id = $_SESSION['user_id'];

    $sql= "UPDATE blogs SET title='".$name."',body='".$text."' WHERE id=$id";
    if ($db->query($sql)==TRUE) {
		// $_SESSION['new_blog_title'] = $_POST['title'];
        $page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
		}
	} else {
		$page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
	}
	$db->close();


 ?>
