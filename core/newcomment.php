<?php 
include("db.php");
session_start();

	$con = new DB();

	$comment =  htmlspecialchars(mysqli_real_escape_string($con->_link, $_POST['comment']));
	$user =  htmlspecialchars(mysqli_real_escape_string($con->_link, $_POST['user']));
	$number =  mysqli_real_escape_string($con->_link, $_POST['number']);

	if (!isset($_SESSION['user_login']) || $_SESSION['user_login'] == '') {

                $page_referrer=$_SERVER['HTTP_REFERER'];
				$suc = '<div style="color: red;">You have to login first!</div>';
				$_SESSION["status"] = $suc;
				header('Location: '.$page_referrer);
				   
          }else{
            if ($_SESSION['user_login'] == "true") {
				$insert_vals = array();

				$tables = array('user', 'body', 'post_id');
        		array_push($insert_vals, $user);
        		array_push($insert_vals, $comment);
        		array_push($insert_vals, $number);

			  $query =  $con->insert('comment',$tables,$insert_vals);

			  if ($query==TRUE) {
		$page_referrer=$_SERVER['HTTP_REFERER'];
		$suc = '<div style="color: green;">Your comment has been saved '.$comment.'</div>';
		$_SESSION["status"] = $suc;
        header('Location: '.$page_referrer);
			}else{
		$error = '<div style="color: red;">Something went wrong, please try again later</div>';
		$_SESSION["status"] = $error;
		$page_referrer=$_SERVER['HTTP_REFERER'];
        header('Location: '.$page_referrer);
				}
            }
		  }
		  