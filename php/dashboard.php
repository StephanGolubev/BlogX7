<?php
   include('../core/session.php');
?>

  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
<?php 
include('includes/imports.php');
?>

    <style>
    #hello{
    	align-items: 50%;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
 <?php 
 include('includes/navbar.php');
 ?>
</header>
<br><br><br><br>

<main role="main" class="col-12">
  <div class="container" id="hello">
    
    <?php 
            if (!isset($_SESSION['user_login']) || $_SESSION['user_login'] == '') {
              echo "<h6>Not Logged in</h6>";
          }else{
            if ($_SESSION['user_login'] == "true") {
              echo "<h6>Logged in!</h6>";
            }
          }
           ?>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <p>
    </p>
        </div>
        <div class="col-lg-4 col-md-12" id="main">
          <?php 
          if (!isset($_SESSION['new_blog_title']) || $_SESSION['new_blog_title'] == '') {
            echo "<h6>You have not created any post yet!</h6>";
          }else{
            echo "<h6>You have just created new post :<br><font size='5' color='red' face='Arial'>". $_SESSION['new_blog_title']."</font></h6>";
          }

           ?>
          
        </div>
      </div>
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