<?php
  require('../db.php');
  $con = new DB();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

    $id = mysqli_real_escape_string($con->_link, $_POST['id']);
    $name = mysqli_real_escape_string($con->_link, $_POST['name']);
    $text = mysqli_real_escape_string($con->_link, $_POST['text']);

     $res = $con->update("comment","body","user",$name, $text, $id);

    if ($res==TRUE) {
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
