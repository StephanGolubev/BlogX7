<?php
   include('../../core/db.php');
   session_start();
   include('../../core/session_admin.php');
?>

<!doctype html>
<html lang="en">
  <meta charset="utf-8">
    <title>All blogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/second.css">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style>
    #hello{
      margin: 76px;
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
    #rows{
      background-color: #f5f5f0;
      }
    #user{
      color:#595959;
      font-family: Courier New, monospace;
    }
    #button1{
      margin-left: 43%;
    }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="">Stephans site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="newblog.php">Creat new blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
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
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Creating new blog</h2>
    </div>
<a href="http://localhost/php/php/dashboard.php" type="button">Go home</a><br>
    <form method="post" action="createblog.php">

        <div class="mb-3">
          <label for="username">Title of your new post</label>
          <div class="input-group">
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="text" >Blog text</label>
          <input name="text" id="textinput" type="text" class="form-control" id="address" placeholder="your blog's text" required>
        </div>
        <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Post my blog!</button>
        </form>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;Stephans site</p>
  </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
