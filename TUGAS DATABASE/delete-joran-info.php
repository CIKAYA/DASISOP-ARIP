<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $joran_info=$joran_obj->delete_joran_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: index.php');
 }
 
 ?>
