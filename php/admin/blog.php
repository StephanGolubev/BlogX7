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
  </head>

  <body class="d-flex flex-column h-100">
    <header>
    <?php 
      include('navbar.php');
    ?>
    </header>
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
      #table{
        width: 100px;
      }
    </style>


<body>
<div class="container">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php
    $con = new DB();
    $res = $con->BuildSelect("blogs");
// $dt = "SELECT * FROM blogs ORDER BY created";
// $result = mysqli_query($db,$dt) or die( mysqli_error($db));


while ($row = mysqli_fetch_array($res)) {
         echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['body']}</td>
                <td>{$row['created']}</td>";
        echo "<td><a href='../../core/admin/deleteblog.php?id={$row['id']}'>Delete
        </a><br><a href='blogdetail.php?id={$row['id']}'>Edit</a></td></tr>";          

}
           
?>
        </tbody>
        <tfoot>
           <tr>
                <th>Id</th>
                <th>Страница</th>
                <th>Номер</th>
                <th>Дата</th>
                <th>Action</th>

            </tr>
        </tfoot>
    </table>
    
    <br><br><br><br><br>
    
    
    </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>
</body>

</html>