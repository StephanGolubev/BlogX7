<?php
     require('../db.php');
     $con = new DB();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $mytitle = mysqli_real_escape_string($con->_link, $_POST['user']);
    $mytext = mysqli_real_escape_string($con->_link, $_POST['text']);
    $blog_id = mysqli_real_escape_string($con->_link, $_POST['blog_id']);
    $insert_vals = array();
      
    // $sql= "INSERT INTO comment (`user`, `body`,`post_id`) VALUES ('$mytitle', '$mytext', '$blog_id')";
    // if ($db->query($sql)==TRUE) {

         // данные для записи
        $tables = array('user', 'body', 'post_id');
        array_push($insert_vals, $mytitle);
        array_push($insert_vals, $mytext);
        array_push($insert_vals, $blog_id);

        $query =  $con->insert('comment',$tables,$insert_vals);
          if ($query==TRUE) {
		    $_SESSION['new_blog_title'] = $_POST['title'];
            $page_referrer=$_SERVER['HTTP_REFERER'];
            header('Location: '.$page_referrer);
		}
	} else {
		echo "Something went wrong, try again later!";
	}
	$db->close();
 ?>