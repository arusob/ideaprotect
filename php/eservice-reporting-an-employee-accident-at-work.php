<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> reporting-an-employee-accident </title>
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
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
		<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script defer src="../js/bootstrap/bootstrap.min.js"></script>
		<script defer src="../js/script-scrolltop.js"></script>
		<script defer src="../js/print-document.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<section class="reporting-an-employee-accident">
				<div class="bg-con-1 service-offer">
					<h1 class="text-center headline non-printable"> Usługa e-formularz </h1>
					<h5 class="text-center pt-3 pb-3 non-printable"> Zgłoszenie wypadku przy pracy pracownika </h5>
					<div id="printableArea" class="mx-auto">
						<form id="content" class="px-auto mx-auto">
							<div id="printTable" class="white-paper">
								<div class="col mb-0 pb-0 py-3 mx-auto first-section">
									<div class="victim-data">
										<div class="person-data">
											<textarea type="text" name="" rows="3" columns=""></textarea>
										</div>
										<div class="person-data-description">
											<label class="mb-0 pb-0 mt-0 pt-0 text-center"> (imię i nazwisko oraz adres zamieszkania poszkodowanego) </label>
										</div>
									</div>
									<div class="distance-one"></div>
									<div class="box-place-data">
										<div class="input-place-data">
											<input class="place-input" type="text">,
											<span>dnia, </span>
											<input class="date-input" type="text">
											<span>r.</span>
										</div>
										<div class="description-place-data">
											<label class="mb-0 pb-0 mt-0 pt-1 text-center mx-auto"> </label>
										</div>
									</div>
								</div>							
								<div class="col second-section">
									<div class="distance-two"></div>
									<div class="box-recipient">
										<div>
											<input type="text" name="">
											<input type="text" name="">
											<input type="text" name="">	
										</div>
										<div class="addressee text-center">
											<label class="mb-0 pb-0 mt-0 pt-0">(oznaczenie pracodawcy lub innej osoby działającej w imieniu pracodawcy)</label>
										</div>
									</div>
								</div>
								<div class="col-lg-12 text-center py-3 third-section">
									<h5 class="pt-0 pb-0"><b> Zgłoszenie wypadku przy pracy pracownika </b></h5>
								</div>
								<div class="col-lg-12 fourth-section">
									<span>Informuję, że w dniu </span>
									<input type="text" name="protocolNumberThird" >
									<span> uległem wypadkowi w drodze do pracy (z pracy), który nastapił w nastepujących okolicznościach:  </span>
								</div>
								<div class="col-lg-12 fifth-section">
									<textarea type="text" name="protocolNumberFirst" rows="8" columns="" placeholder="................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................"></textarea>
									<label class="mb-0 pb-3 mt-0 pt-0 text-center">(oznaczenie pracodawcy lub innej osoby działającej w imieniu pracodawcy)</label>
								</div>
								<div class="col-lg-12 sixth-section">
									<span>W związku z w/w wypadkiem zostalem poszkodowany w następujący sposób: </span>
								</div>
								<div class="col-lg-12 text-center seventh-section">
									<textarea type="text" name="protocolNumberFirst" rows="8" columns="24" placeholder=".............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."></textarea>
									<label class="mb-0 pb-3 mt-0 pt-0">(scharakteryzować następstwa wypadku - rodzaj uszkodzeń organizmu)</label>
								</div>
								<div class="col-lg-12 eighth-section">
									<p class="pb-0 mb-0">Świadkami powyższego wypadku są: </p>
									<div class="accident-witness">
										<div><span>1. </span><input type="text" name="protocolNumberSecond"></div>
										<div class="text-center person-label"><label>(imię i nazwisko, adres zamieszkania)</label></div>
									</div>
									<div class="accident-witness">
										<div><span>2. </span><input type="text" name="protocolNumberSecond"></div>
										<div class="text-center person-label"><label>(imię i nazwisko, adres zamieszkania)</label></div>
									</div>
								</div>
								<div class="col-lg-12 ninth-section">
									<p class="pb-0 mb-0">Potwierdzeniem zaistniałych uszkodzeń ciała są następujące dokumenty medyczne: </p>
									<div class="documents">
										<div>
											<div><span>1. </span><input type="text" name="protocolNumberSecond">,</div>
										</div>
										<div>
											<div><span>2. </span><input type="text" name="protocolNumberSecond">,</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 text-right tenth-section mb-5 mt-5 pb-5">
									<div>
										<input type="text" name="protocolNumberSecond">
									</div>
									<div>
										<label class="text-center">(podpis poszkodowanego)</label>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="actions buttons text-center">
						<div class="mx-auto">
							<input class="non-printable btn btn-light mr-3" type="button" onclick="printDiv('printableArea')" value="Podgląd pdf" />
						</div>
					</div>
				</div>
			</section>
			<?php 
				require('footer.php');
			?>
		</main>				
	</body>
</html>