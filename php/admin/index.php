 <head>
    <meta charset="utf-8">
    <title>All blogs</title>
<?php 
session_start();
include('../../core/session_admin.php');
include('../includes/imports.php');


?>
<link rel="stylesheet" href="css/blog.css">
<script src="js/blog.js"></script>
<link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body class="d-flex flex-column h-100">
    <header>
    <?php 
      include('navbar.php');
    ?>
    </header>

<div class="container">
  <div class="row">
      <div class="col-6">
        <p><h4>New blog: <a href="newblog.php">Create new blog</a></h4></p>
      </div>
      <div class="col-6">
        <p><h4>New blog: <a href="newcomment.php">Create new comment</a></h4></p>
      </div>
  </div>
    
</div>
