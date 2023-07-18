<?php 
    require 'connect.php';
    
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
    $surname = htmlspecialchars($_POST["surname"], ENT_QUOTES);
    $position = htmlspecialchars($_POST["position"], ENT_QUOTES);
    $city = htmlspecialchars($_POST["city"], ENT_QUOTES);
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
    $phone = htmlspecialchars($_POST["phone"], ENT_QUOTES);
    $companyId = $_SESSION["id"];
	$result = mysqli_query($conn, "INSERT INTO `workers`(`id`, `name`, `surname`, `city`, `email`, `phone`, `position`, `company_id`) 
    VALUES (NULL, '".$name."', '".$surname."', '".$city."', '".$email."', '".$phone."', '".$position."', ".$companyId.")");
    header('Location: my-account.php');
?>