<?php
  include '../include/connection.php';
  $id = (int) $_GET['id'];
  $sql = "delete from items where id ='$id' ";
  $ret = mysqli_query($connection,$sql);

  if($ret){
    header("Location:items.php");
  }
?>
