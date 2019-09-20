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

    <style>
    #textinput{
    height:150px;
    font-size:14pt;
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

  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Creating new blog</h2>
    </div>
    <form method="post" action="../../core/admin/createblog.php">

        <div class="mb-3">
          <label for="username">Title of your new post</label>
          <div class="input-group">
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="text" >Blog text</label>
          <textarea name="text" id="textinput" type="text" class="form-control" id="address" autocomplete="off" required ></textarea>

        </div>
        <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Post my blog!</button>
        </form>
    </div>

  <?php 
include('../includes/footer.php');
?>
</body>
<?php 
include('../includes/jsimport.php');
?>
</html>
