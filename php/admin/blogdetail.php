<?php
   include('../../core/db.php');
   session_start();
   include('../../core/session_admin.php');
?>
 <head>
    <meta charset="utf-8">
    <title>All blogs</title>
<?php 
include('../includes/imports.php');
?>
     <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

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

<main role="main" class="col-12">
  <div class="" id="hello">

  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h3>Измени текстовое задание:</h3><hr>
          <h5>Все задание:</h5>
          <div class="" >


          <?php
          $url = $_SERVER['REQUEST_URI'];
          $num = $_GET['id'];
          $_SESSION['post_id'] = $num;

          $con = new DB();
          $res = $con->selectWithIdVar("blogs","id",$num);

          // $dt = "SELECT * FROM `blogs` WHERE id=$num";
          // $result = mysqli_query($db,$dt) or die( mysqli_error($db));

          	while ($row = mysqli_fetch_array($res)) {
            		echo "<div id='rows' style='text-align: center;background-color: #E6E6FA;'><h6><a href='../blogdetail.php?id={$row['id']}'>{$row['title']}</a></h6>
            		Текст задания: {$row['body']}<div id='user'>В уроке: Урок номер : {$row['title']}</a></div><p id='user'>Место в уроке : {$row['title']}</p>
            		<br></div><hr>";

                 

        ?>
        <!-- </div> -->

<!-- form for the text messege -->

          <form method="post" action="../../core/admin/editblog.php">


              <div class="input-group">
                <input type="hidden" name="id" id="hiddenField" value="<?php echo $row['id']; ?>" />
              </div>

       <div class="mb-3">
         <label for="username">Имя</label>
         <div class="input-group">
           <input name="name" type="text" class="form-control" id="title" required value="<?php echo $row['title']; ?>">
         </div>
       </div>

       <div class="mb-3">
         <label for="text" >Текст задания</label>
         <textarea name="text" id="textinput" type="text" class="form-control" id="address" autocomplete="off" required ><?php echo $row['body']; ?></textarea>
       </div>

       <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Go!</button>
       </form>
<?php } ?>
<!--  -->

          </div>
        </div>
       
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="container">
      <p align="center">&copy;Made by <a href="https://www.freelancer.com/u/golubevstephan?w=f">Stephan</a></p>
  </div>
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
