<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<?php 
include('includes/imports.php');
session_start();
?>

</head>
<body style="background-color: #E5E7E9;">
	
<div>
	<div id="welcome" class="container" style="text-align: center;">
		<h1>Hello to my web site</h1>
		<h4>Please, register here:</h4>
	</div>
	<div class="container data" style="color: red;">
	
</div>
<div class="container col-lg-6 col-md-12" style="border: 2px solid black;border-radius: 10px;background-color: white;"><br><br>

<form method="post" action="../core/reg.php">
	<div id="inputs">
	<h5>First name:</h5><br>
	<input id="fname" type="text" name="fname" class="form-control" placeholder="Your name!" required autofocus>
	<br>
	<h5>Password:</h5><br>
	<input id="pass1" type="password" name="pass1" class="form-control" placeholder="Your password" required autofocus>
	<br>
	<h5>Password again:</h5><br>
	<input  type="password" id="pass2" name="pass2" class="form-control" placeholder="Password again" required autofocus>
	<br><br>
	<div class="row">
		<div id="int" class="col-12" style="text-align: center;">
      <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Go</button>
    </div><br><br>
    </form>
     <?php 
            if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] == '') {
              unset($_SESSION['status_login']);
          }else{
            echo "<h6>". $_SESSION['status_login'].")</h6>";
            unset($_SESSION['status_login']);
          }
           ?>
    <div id="int" class="col-12" style="text-align: center;">
	<h4>Or login here...</h4>
<a class="btn btn-primary" onclick="location.href='login.php';" role="button">Login hear</a>
</div>
	</div>
	</div>
	

<br><br>
</div>
</div>

</body>
</html>
		