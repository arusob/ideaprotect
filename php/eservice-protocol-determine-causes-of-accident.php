<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> ideaprotect | usługi </title>
		<link rel="icon" type="image/x-icon" href="img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">

		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/eservices.css">

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

		<script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>				
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script defer src="../js/bootstrap/bootstrap.min.js"></script>
		<script defer src="../js/script-scrolltop.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<section class="services-page">
				<div class="row-content bg-con-1 service-offer">
					<h1 class="text-center headline">Usługa e-formularz</h1>
					<h5 class="">Formularz. Protokół ustalania przyczyn i okoliczności wypadku przy pracy. Format A4.</h5>
					<form method="post" action="accident-report.php">
						<div class="row mx-auto" style="width: calc(210mm*1.2); height: calc(297mm*1.2); background-color:white; color: black; margin-top: 20mm; padding-bottom: 20mm;">
							<div class="col-lg-12 pb-3 pt-3 mx-auto" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 50mm;">
								<span> Protokół nr </span>
								<input type="text" name="protocolNumberFirst" style="width: 25px;">
								<input type="text" name="protocolNumberSecond" style="width: 25px;">
								<input type="text" name="protocolNumberThird" style="width: 25px;">
								<span> / </span>
								<input type="text" name="yearThousands" style="width: 25px;">
								<input type="text" name="yearHundreds" style="width: 25px;">
								<input type="text" name="yearTens" style="width: 25px;">
								<input type="text" name="yearUnity" style="width: 25px;">
							</div>
							<div class="col-lg-12 pb-3 mx-auto">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<input type="text" name="" style="width: 25px;">
								<p>PESEL</p>
							</div>
							<div class="col-lg-12 pb-3 pt-3 mx-auto">
								<input type="text" name="">
								<p style="width: 225px; border-top: 1px black dotted;">PESEL</p>
							</div>
							<div class="col-lg-12 pb-3 pt-3 mx-auto">
								<input type="text" name="protocolNumber">
								<input type="text" name="year">
								<input type="text" name="employerData">
							</div>
						</div>
						<div class="text-right mb-0 pt-5 pb-5">
							<input class="btn btn-success" type="submit" value="Wyświetl pdf">	
							<input class="btn btn-success" type="submit" value="Pobierz pdf">	
						</div>
					</form>
				</div>		
			</section>
			<?php 
				require('footer.php');
			?>
		</main>				
		<button id="topBtn"><i class="fas fa-arrow-up"></i></button>
	</body>
</html>