<?php
   include('../core/db.php');
   session_start();
    $con = new DB();  
?>
  <head>
    <meta charset="utf-8">
    <title>All blogs</title>
    <?php 
      include('includes/imports.php');
    ?>
      <link rel="stylesheet" href="css/blog.css">   
      <script src="js/blog.js"></script>
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
            echo "<h6>You have not created any post yet!</h6>";
          }else{
            echo "<h6>You have just created new post :<br><font size='5' color='red' face='Arial'>". $_SESSION['new_blog_title']."</font></h6>";
          }
           ?>
         </div> <hr>
        <div class="col-lg-10 col-md-12">
          <?php 
         $newURL = "dashboard.php";

        //  страницы
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
         $total_records_per_page = 10;//10 записей на странице

        $offset = ($page_no-1) * $total_records_per_page; //всего
        $previous_page = $page_no - 1;
        $next_page = $page_no + 1;
         
        $result_count = $con->tableNum("blogs");
        $total_records = mysqli_fetch_array($result_count);
        $total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
        $second_last = $total_no_of_pages - 1; // все страницы -1

    ?>
    <div>
        <?php

        // получаем блоги
        $res = $con->BuildSelectLim("blogs",$offset,$total_records_per_page);

        while ($row = mysqli_fetch_array($res)) {
          $get = array("id"=>"{$row['id']}");
          $out = http_build_query($get);
          $url = "blogdetail.php?".$out."";
          echo "<div id='rows'><h4><a href='$url'>{$row['title']}</a></h4><div id='user'>
        </div><p id='user'>Created: {$row['created']}</p><br>
        ";
        $text_cropped = substr($row['body'],0,500);
        echo "{$text_cropped}...
        <br>
        <h5><a href='$url'>Читать дальше...</a></h5>
        <div><hr>";
        }
        ?>
        </div>
        </div>
        
      </div>
      

<div>
    <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>


<!-- Страницы -->

<ul class="pagination">
  <?php if($page_no > 1){
    echo "&nbsp;&nbsp;<li><a href='?page_no=1'> &nbsp;|&nbsp; Первая страница &nbsp;|&nbsp; </a></li>";
  } ?>
    
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
  <a <?php if($page_no > 1){
    echo "href='?page_no=$previous_page'";
  } ?>>    Предыдущая    </a>
</li>
    <?php echo "&nbsp;|&nbsp;";
     ?>
<li <?php if($page_no >= $total_no_of_pages){
      echo "class='disabled'";} ?>>
  <a <?php if($page_no < $total_no_of_pages) {
    echo "href='?page_no=$next_page'";} ?>>  Следущая   </a>
</li>
 
<?php if($page_no < $total_no_of_pages){
    echo "&nbsp;|&nbsp;<li><a href='?page_no=$total_no_of_pages'>  &nbsp;&nbsp; Последняя>>  &nbsp; </a></li>";
  } ?>
</ul>

</main>

<?php 
  include('includes/footer.php');
?>
</body>
<?php 
  include('includes/jsimport.php');
?>
</html>