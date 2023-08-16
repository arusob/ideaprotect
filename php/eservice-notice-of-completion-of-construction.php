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
		<script defer src="../js/print-document.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<section class="completion-of-construction">
				<div class="bg-con-1 service-offer">
					<h1 class="text-center headline non-printable"> Usługa e-formularz </h1>
					<h5 class="text-center pt-2 pb-3 non-printable"> Zawiadomienie o zakończeniu budowy. </h5>
					<div id="printableArea" class="mx-auto">		
						<form id="content" class="printableArea px-auto mx-auto">
							<div class="white-paper">
								<div class="col-lg-12 first-section pt-4">
									<div class="investor">
										<input>
										<label class="text-center"> (inwestor lub pełnomocnik) </label>
									</div>
									<div class="distance"></div>
									<div class="place-data">
										<input>
										<label class="text-center"> (miejscowość, data) </label>
									</div>
								</div>
								<div class="col-lg-12 second-section">
								<div class="investor">
										<input>
										<label class="text-center"> (adres, siedziba) </label>
										<input>
										<label class="text-center"> (miejscowość, kod pocztowy) </label>
										<input>
										<label class="text-center"> (telefon kontaktowy) </label>
									</div>
									<div class="distance"></div>
									<div class="distance"></div>
								</div>
								<div class="col-lg-12 third-section">
									<div class="distace"></div>
									<div class="fire-dept">
										<h4><b> Komendant Miejski <br>
											Państwowej Straży Pożarnej <br>
											m.st. Warszawy <br>
											ul. Polna 1 <br>
											00-622 Warszawa </b></h6>
									</div>
								</div>
								<div class="col-lg-12 fourth-section">
									<p> Na podstawie art. 56 ust. 1 pkt 4, w związku z art. 55 ustawy z dnia 7 lipca 1994 r. Prawo budowlane 
										(tekst jednolity Dz. U. z 2019 r. poz. 1186 z późn. zm.) zgłaszam zakończenie budowy/rozbudowy/przebudowy* </p>
									<textarea rows="3" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."></textarea>
									<label class="text-center">(dokładna nazwa i adres zgłaszanego obiektu)</label>
								</div>
								<div class="col-lg-12 fifth-section">
									<p> Podstawowe dane o realizacji inwestycji: </p>
									<div class="line item-a">
										<span> a) przeznaczenie obiektu </span>
										<input><span>,</span>
									</div>
									<div class="line item-b">
										<span> b) powierzchnia użytkowa </span>
										<input><span>,</span>
									</div>
									<div class="line item-c">
										<span> c) kubatura </span>
										<input><span>,</span>
									</div>
									<div class="line item-d">
										<span> d) wysokość </span>
										<input><span>,</span>
									</div>
									<div class="line item-e">
										<span> e) ilość kondygnacji nadziemnych </span>
										<input><span>,</span>
									</div>
									<div class="line item-f">
										<span> f) ilość kondygnacji podziemnych </span>
										<input><span>,</span>
									</div>
									<div class="line item-g">
										<span> g) odstępstwa od przepisów przeciwpożarowych (opinie w sprawie dróg pożarowych, ekspertyzy techniczne,
										itp.) – określić zakres odstępstw </span>
										<input>
									</div>
									<textarea rows="3" placeholder="..............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."></textarea>
								</div>
								<div class="col-lg-12 sixth-section">
									<div class="distance"></div>
									<div class="applicant-signature">
										<input>
										<label class="text-center"> (podpis wnioskodawcy) </label>
									</div>
								</div>
								<div class="col-lg-12 seventh-section">
									<p class="attachments"> Załączniki: </p>
									<p class="item"> a) &nbsp; kopia <b>ostatecznej decyzji o pozwoleniu na budowę</b>,</p>
									<p class="item"> b) &nbsp; kopia <b>oświadczenia kierownika budowy o zakończeniu budowy (wzór PINB 2A lub 2B)</b>,</p>
									<p class="item"> c) &nbsp; pełnomocnictwo w przypadku osoby upoważnionej. </p>
									<p> *) – niepotrzebne skreślić </p>
								</div>
							</div>
						</form>
					</div>	
					<div class="actions buttons text-center mt-5">
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