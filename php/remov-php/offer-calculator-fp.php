<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> ideaprotect | klakulator oferty ppoż. </title>
		<link rel="icon" type="image/x-icon" href="img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">

		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/calculator.css">
		<link rel="stylesheet" href="../css/uslugi.css">

		<script src="../js/bootstrap/bootstrap.min.js"></script>
		

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
</head>

<body>
	<main class="pr-0 mr-0">
		<!--| NAVIGATION |-->
		<?php
		require('./navbar.php');
		?>
		<!--| CONTENT |-->
		<section class="calculator-page">
			<div class="row-content bg-con-1 service-offer">
				<h1 class="headline text-center">Kalkulator ofert usług ppoż. </h1>
				<form action="order-fp.php" method="post">
					
					<h4>Przeglądy okresowe urządzeń przeciwpożarowych </h4>
				
					<div class="row pt-1 pb-1">
						<label class="col-lg-10">1. Hydranty zewnętrzne podziemne DN 80. 
							Badanie wydajności i ciśnienia. (70,00 PLN/szt): </label>
						<input class="col-lg-2" type="text" name="hzpzdn80" />	
					</div>
					<div class="row pt-1 pb-1">
						<label class="col-lg-10">2. Hydranty zewnętrzne nadziemne DN 100. 
							Badanie wydajności i ciśnienia. (65,00 PLN/szt): </label>  
						<input class="col-lg-2" type="text" name="hznzdn100" />
					</div>
					<div class="row pt-1 pb-1">
						<label class="col-lg-10">3. Hydranty zewnętrzne nadziemne DN 80. 
							Badanie wydajności i ciśnienia. (60,00 PLN/szt): </label>  
						<input class="col-lg-2" type="text" name="hznzdn80" />
					</div>
					<div class="row pt-1 pb-1">
						<label class="col-lg-10">4. Hydranty wewnętrzne DN 52. 
							Badanie wydajności i ciśnienia. (55,00 PLN/szt): </label>  
						<input class="col-lg-2" type="text" name="hwdn52" />
					</div>
					<div class="row pt-1 pb-1">
						<label class="col-lg-10">5. Przegląd hydrantów wewnętrznych DN 33. 
							Badanie wydajności i ciśnienia. (50,00 PLN/szt): </label>  
						<input class="col-lg-2" type="text" name="hwdn33" />
					</div>
					<div class="row pt-1 pb-1">
						<label class="col-lg-10">6. Przegląd hydrantów wewnętrznych DN 25. 
							Badanie wydajności i ciśnienia. (55,00 PLN/szt): </label>  
						<input class="col-lg-2" type="text" name="hwdn25" />
					</div>

					<div class="pt-5 pb-5 text-right mb-0">
						<input class="btn btn-success" type="submit" value="Podsumuj zamówienie">
					</div>
				</form>
			</div>
		</section>
		<!-- | FOOTER | -->
		<?php 
		require('footer.php');
		?>
		<!-- | FOOTER-END | -->
	</main>
</body>
</html>