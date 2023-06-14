<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> ideaprotect | podsumowanie oferty </title>
		<link rel="icon" type="image/x-icon" href="img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="navbar.css">
		<link rel="stylesheet" href="calculator.css">
		<link rel="stylesheet" href="footer.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,500;1,700;1,900&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,700&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
	<style>


	</style>
</head>

<body>
<main class="pr-0 mr-0">
	<!--| NAVIGATION |-->
	<?php
	require('navbar.php');
	?>

	<?php 
		
		$hzpzdn80 = $_POST['hzpzdn80'];
		$hznzdn100 = $_POST['hznzdn100'];
		$hznzdn80 = $_POST['hznzdn80'];
		$hwdn52 = $_POST['hwdn52'];
		$hwdn33 = $_POST['hwdn33'];
		$hwdn25 = $_POST['hwdn25'];


		$suma = (70.00 * $hzpzdn80) + (65.00 * $hznzdn100) + (60.00 * $hznzdn80) + (55.00 * $hwdn52) + (50.00 * $hwdn33) + (55.00 * $hwdn25);
		
		echo<<<END

		<!--| CONTENT |-->
		<section class="calculator-page">
			<div class="row-content bg-con-1 service-offer">
				<h1 class="headline text-center">Podsumowanie kosztorysu usługowego</h1>
				<div class="distance"></div>
				<table border="1" cellpadding="10" cellspacing="0">
				<tr>
					<td>Hydranty zewnętrzne podziemne DN 80. Badanie wydajności i cisnienia. (70,00 PLN/szt):</td> <td>$hzpzdn80</td>
				</tr>
				<tr>
					<td>Hydranty zewnętrzne nadziemne DN 100. Badanie wydajności i ciśnienia. (65,00 PLN/szt): </td> <td>$hznzdn100</td>
				</tr>
				<tr>
					<td>Hydranty zewnętrzne nadziemne DN 80. Badanie wydajności i ciśnienia. (60,00 PLN/szt): </td> <td>$hznzdn80</td>
				</tr>
				<tr>
					<td>Hydranty wewnętrzne DN 52. Badanie wydajności i ciśnienia. (55,00 PLN/szt): </td> <td>$hwdn52</td>
				</tr>
				<tr>
					<td>Hydranty wewnętrzne DN 33. Badanie wydajności i ciśnienia. (50,00 PLN/szt): </td> <td>$hwdn33</td>
				</tr>
				<tr>
					<td>Hydranty wewnętrzne DN 25. Badanie wydajności i ciśnienia. (50,00 PLN/szt): </td> <td>$hwdn25</td>
				</tr>

				<tr>
					<td>SUMA</td> <td>$suma PLN</td>
				</tr>	
				</table>

				
				<br /><a href="offer-calculator-fp.php">Powrót do kalkulatora ofert</a>
			</div>
		</section>
	END;

	?>

	<!-- | FOOTER | -->
	<?php 
	require('footer.php');
	?>
	<!-- | FOOTER-END | -->
</main>
</body>
</html>