<?php 
    require 'php/connect.php';
    if(empty($_SESSION["id"])){
      header("Location: php/login.php");
    } else {
    $workerId = $_POST['workerId'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $position = $_POST['position'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    mysqli_query($conn, 'UPDATE `workers` SET `name`="'.$name.'",`surname`="'.$surname.'",`city`="'.$city.'",`email`="'.$email.'",`phone`="'.$phone.'",`position`="'.$position.'" WHERE id = '.$workerId);
    header('Location: php/my-account.php');
    }
?>