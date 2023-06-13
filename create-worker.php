<?php 
require 'connect.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $position = $_POST['position'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $companyId = $_SESSION["id"];
	$result = mysqli_query($conn, "INSERT INTO `workers`(`id`, `name`, `surname`, `city`, `email`, `phone`, `position`, `company_id`) 
    VALUES (NULL, '".$name."', '".$surname."', '".$city."', '".$email."', '".$phone."', '".$position."', ".$companyId.")");
    header('Location: my-account.php');
