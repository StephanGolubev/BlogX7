<?php
   include('../core/db.php');
   session_start();
?>
 	<head>
    <meta charset="utf-8">
    <title>All blogs</title>
<?php 
include('includes/imports.php');
?>
<link rel="stylesheet" href="css/main.css">

  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <?php 
      include('includes/navbar.php');
    ?>
</header>


<main role="main" class="flex-shrink-0">
  <div class="container" id="hello">
    
  </div>

  <div class="container">
      <div class="row">
        <div class="col-lg-2" id="main">
          <?php 
          if (!isset($_SESSION['new_blog_title']) || $_SESSION['new_blog_title'] == '') {
            echo "<h6>You have not created any post today!</h6>";
          }else{
            echo "<h6>You have just created new post :<br><font size='5' color='red' face='Arial'>". $_SESSION['new_blog_title']."</font></h6>";
          }
           ?>
         </div> 
        <div class="col-10">
          <?php 
 				$url = $_SERVER['REQUEST_URI']; 
        $num = $_GET['id'];
        $_SESSION['post_id'] = $num;
        

        $con = new DB();
        $res = $con->selectWithIdVar("blogs","id",$num);
				// $dt = "SELECT * FROM `blogs` WHERE id=$num";
				// $result = mysqli_query($db,$dt) or die( mysqli_error($db));
				
		  ?> 	
		  <?php 
        	while ($row = mysqli_fetch_array($res)) {
          		echo "<div id='rows'><h4>{$row['title']}</h4><div id='user'></div><p id='user'>Created: {$row['created']}</p><br>{$row['body']}<br><div><hr>";
        }
        
		   ?>
		   <br><br>

         <?php 
            if (!isset($_SESSION['user_login']) || $_SESSION['user_login'] == '') {
              
          }else{
            if ($_SESSION['user_login'] == "true") {
              
            }

          }

          // защита!
            $token = md5(uniqid(rand(), TRUE));
            $_SESSION['token'] = $token;
           ?>

		<form method="post" action="../core/newcomment.php">
        <div class="mb-3">
          <label for="text">Comment</label>
          <input name="comment" id="textinput" type="text" class="form-control" id="address" placeholder="Your comment" required><br>
          <input name="user" id="textinput" type="text" class="form-control" id="user" placeholder="Your Name" required>
          <input type="hidden" name="number" id="hiddenField" value="<?php echo $num ?>" />
          <input type="hidden" name="token" value="<?php echo $token; ?>" />
        </div>
        <button id="button1" class="btn btn-primary btn-lg btn-sm" type="submit">Post my Comment!</button>
        </form>
        <div>
          <?php 
            if (!isset($_SESSION['status']) || $_SESSION['status'] == '') {
              unset($_SESSION['status']);
          }else{
            echo "<h6>". $_SESSION['status'].")</h6>";
            unset($_SESSION['status']);
          }
           ?>
        </div>
        <div>
          <?php 

        $res_comm = $con->selectWithIdVar("comment","post_id",$num);
    ?>
    <div>
        <?php
        while ($row_comm = mysqli_fetch_array($res_comm)) {
          echo "<div id='rows'><h6>{$row_comm['user']}</h6>
          <div id=''>{$row_comm['body']}</div><p id='user'>{$row_comm['user']}
          Created: {$row_comm['posted']}</p></div><hr>";
        }
        ?>
        </div>
        </div>
        </div>
        </div>
        
      </div><a href="$link"></a>

  </div>
  
</main>

<?php 
include('includes/footer.php');
?>
</body>
<?php 
include('includes/jsimport.php');
?>
</html>