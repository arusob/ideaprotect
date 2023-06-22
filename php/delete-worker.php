<?php 
    require 'php/connect.php';
    if(empty($_SESSION["id"])){
        header("Location: php/login.php");
      } else {
      $workerId = $_POST['workerId'];
      mysqli_query($conn, 'DELETE FROM `workers` WHERE id = '.$workerId);
      header('Location: php/my-account.php');
      }

?>