<?php
   require('../db.php');
     $con = new DB();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $mytitle = mysqli_real_escape_string($con->_link, $_POST['title']);
    $mytext = mysqli_real_escape_string($con->_link, $_POST['text']);
      
    $insert_vals = array();

        $tables = array('title', 'body');
        array_push($insert_vals, $mytitle);
        array_push($insert_vals, $mytext);

        $query =  $con->insert('blogs',$tables,$insert_vals);
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