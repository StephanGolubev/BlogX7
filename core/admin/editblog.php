<?php
  require('../db.php');
  $con = new DB();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = mysqli_real_escape_string($con->_link, $_POST['id']);
    $name = mysqli_real_escape_string($con->_link, $_POST['name']);
    $text = mysqli_real_escape_string($con->_link, $_POST['text']);

    $res = $con->update("blogs","title","body",$name, $text, $id);

    if ($res==TRUE) {
		    $_SESSION['new_blog_title'] = $name;
        $page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
		}
	} else {
		$page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
	}


 ?>
