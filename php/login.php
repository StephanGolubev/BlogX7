<?php
 session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body class="text-center" style="background-color: #E5E7E9;"><br><br>
   <header> 
       <header> 
 <?php 
 include('includes/navbar.php');
 ?>
</header><br>
	<h2>To log in fill this form:</h2><br><br>


<div class="container" >
	<?php 
if (isset($_SESSION['error'])) {
	echo '<h4 style="color: red"><li>'.$_SESSION['error'].'</h4>';
	unset($_SESSION['error']);
}else{
	
}
	 ?>
</div>
	<div class="container col-lg-6 col-md-12">
		<div style="border: 2px solid black;border-radius: 8px; background-color: white"><br><br>
	<div><a class="btn btn-primary" href="register.php" role="button">Or register hear</a></div><br>

<form class="form-signin" action="../core/cheking.php" method="post" >
	<h1 class="h3 mb-3 font-weight-normal">Email<br></h1>
	<input type="email" name="firstname" class="form-control" placeholder="Your email!" required autofocus>
	<br>
	<h1 class="h3 mb-3 font-weight-normal">Password:<br></h1>
	<input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
	<br><br>
	<button class="btn btn-lg btn-primary btn-block" type="sudmit">Sudmit</button>
	<label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
</form><br><br>
<div>
<a href="adminlogin.php">Login as Admin</a>
</div>
</div>
</div>
</body><br><br><br><br>
<?php 
include('includes/footer.php');
?>
</body>
<?php 
include('includes/jsimport.php');
?>
</html>