<?php
require('../db.php');
$con = new DB();

$id=$_REQUEST['id'];
$res = $con->deleteSom("comment","id",$id);
$page_referrer=$_SERVER['HTTP_REFERER'];
header('Location: '.$page_referrer);
?>