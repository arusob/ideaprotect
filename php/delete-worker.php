<?php 
    require 'connect.php';
    if (empty($_SESSION["id"])) {
        header("Location: login.php");
    } else {
        $workerId = htmlspecialchars($_POST["workerId"], ENT_QUOTES);
        mysqli_query($conn, 'DELETE FROM `workers` WHERE id = '.$workerId);
        header('Location: my-account.php');
    }
?>