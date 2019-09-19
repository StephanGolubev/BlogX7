<?php
   session_start();
   
   if(session_destroy()) {
      $page_referrer=$_SERVER['HTTP_REFERER'];
      header('Location: '.$page_referrer);
   }
?>