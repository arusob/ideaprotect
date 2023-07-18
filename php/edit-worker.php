<?php 
    require 'connect.php';
    if (empty($_SESSION["id"])) {
        header("Location: login.php");
    } else {
        $workerId = htmlspecialchars($_POST["workerId"], ENT_QUOTES);
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $surname = htmlspecialchars($_POST["surname"], ENT_QUOTES);
        $position = htmlspecialchars($_POST["position"], ENT_QUOTES);
        $city = htmlspecialchars($_POST["city"], ENT_QUOTES);
        $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
        $phone = htmlspecialchars($_POST["phone"], ENT_QUOTES);
        mysqli_query($conn, 'UPDATE `workers` SET `name`="'.$name.'",`surname`="'.$surname.'",`city`="'.$city.'",`email`="'.$email.'",`phone`="'.$phone.'",`position`="'.$position.'" WHERE id = '.$workerId);
        header('Location: my-account.php');
    }
?>