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
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <?php
         if (!isset($_SESSION['admin']) || $_SESSION['admin'] == '') {
          }else{
             if ($_SESSION['admin'] == "true") {
                echo " <li class='nav-item'>
                  <a class='nav-link' href='admin/index.php'>Admin panel</a>
                  </li>";
                  echo " <li class='nav-item'>
                  <a class='nav-link' href='admin/blog.php'>Admin blogs</a>
                  </li>";
                  echo " <li class='nav-item'>
                  <a class='nav-link' href='admin/comment.php'>Admin comments</a>
                  </li>";
             }
          }
        ?>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>