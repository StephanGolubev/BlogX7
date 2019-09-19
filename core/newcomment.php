<?php
   include('session.php');
?>
<?php 
	$comment =  mysqli_real_escape_string($db, $_POST['comment']);
	$user =  mysqli_real_escape_string($db, $_POST['user']);
	$number =  mysqli_real_escape_string($db, $_POST['number']);
	$sql = "INSERT INTO comment (`user`, `body`, `post_id`) VALUES ('$user', '$comment', '$number')";

	if (!isset($_SESSION['user_login']) || $_SESSION['user_login'] == '') {

                $page_referrer=$_SERVER['HTTP_REFERER'];
				$suc = '<div style="color: red;">You have to login first!</div>';
				$_SESSION["status"] = $suc;
				header('Location: '.$page_referrer);
				   
          }else{
            if ($_SESSION['user_login'] == "true") {
			  $result = $db->query($sql);

			  if ($result) {
		$page_referrer=$_SERVER['HTTP_REFERER'];
		$suc = '<div style="color: green;">Your comment has been saved!</div>';
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
		  

	

 ?>