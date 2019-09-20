<?php
  require('../db.php');
  $con = new DB();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form


    $id = mysqli_real_escape_string($con->_link, $_POST['id']);
    $name = mysqli_real_escape_string($con->_link, $_POST['name']);
    $text = mysqli_real_escape_string($con->_link, $_POST['text']);

    // $myusername = mysqli_real_escape_string($db, $creater);
    // $id = $_SESSION['user_id'];

    // $sql= "UPDATE blogs SET title='".$name."',body='".$text."' WHERE id=$id";
    $res = $con->update("blogs","title","body",$name, $text, $id);

    if ($res==TRUE) {
		// $_SESSION['new_blog_title'] = $_POST['title']
        $page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
		}
	} else {
		$page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
	}


 ?>
