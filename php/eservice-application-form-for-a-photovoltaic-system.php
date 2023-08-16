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
		<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script defer src="../js/bootstrap/bootstrap.min.js"></script>
		<script defer src="../js/script-scrolltop.js"></script>
		<script defer src="../js/print-document.js"></script>
		<script defer src="../js/striked-content.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<section class="photovoltaic-system">
				<div class="bg-con-1 service-offer">
					<h1 class="text-center headline non-printable"> Usługa e-formularz </h1>
					<h5 class="text-center pt-3 pb-3 non-printable"> Wzór zgłoszenia instalacji fotowoltaicznej. </h5>
					<div id="printableArea" class="mx-auto pb-3">		
						<form id="content" class="printableArea px-auto mx-auto">
							<div class="white-paper mb-4 pb-2">
								<div class="col-lg-12 first-section pt-2">
									<div class="inwestor">
										<input>
										<label class="text-center">  </label>
									</div>
									<div class="distance"></div>
									<div class="place-date">
										<input>
										<label class="text-center"> (miejsce, data) </label>
									</div>
								</div>
								<div class="col-lg-12 second-section">
									<div class="inwestors-address">
									<div class="inwestor">
										<input>
										<label> </label>
									</div>
									<div class="inwestor">
										<input>
										<label class="text-center"> (inwestor) </label>
									</div>
									<div class="inwestor">
										<input>
										<label class="text-center"> (telefon kontaktowy) </label>
									</div>
									</div>
									<div class="distance"></div>
								</div>
								<div class="col-lg-12 third-section">
									<div class="distance"></div>
									<div class="addressee">
										<p><b>Komenda Miejska <br>
										Państwowej Straży Pożarnej <br>
 										m.st. Warszawy </b></p>
									</div>
								</div>
								<div class="col-lg-12 fourth-section">
									<div class="title">
										<h5 class="text-center"><b>ZAWIADOMIENIE</b></h5>
									</div>
									<div class="text-paragraph">
										<p>Na podstawie art. 56 ust. 1a ustawy – Prawo budowlane (Dz. U. z 2020 r., poz. 1333) 
											zawiadamiam o zakończeniu budowy instalacji fotowoltaicznej:</p>
									</div>
									<div class="investment-data">
										<div class="inwestor">
											<input>
											<label class="text-center"> (nazwa obiektu – inwestycji) </label>
										</div>
										<div class="inwestor">
											<input>
											<label class="text-center"> (adres) </label>
										</div>
										<div class="inwestor">
											<input>
											<label class="text-center"> (nr działki budowlanej w obrębie nr) </label>
										</div>
										<div class="inwestor">
											<input>
											<label class="text-center"> (moc instalacji) </label>
										</div>
									</div>
									<div>
										<p>i zamiarze przystąpienia do jej użytkowania.</p>
									</div>
								</div>
								<div class="col-lg-12 fifth-section mb-5">
									<p class="pt-3"><b><u>Dane o obiekcie zawarte w projekcie budowlanym:</u></b></p>
									<table class="text-center mx-auto">
										<tr class="first-row">
											<td> Wysokość <br>obiektu [m]</td>
											<td><input type="number" min="0"></td>
											<td>Powierzchnia <br>całkowita [m<sup>2</sup>]</td>
											<td><input type="number" min="0"></td>
											<td> Kubatura [m<sup>3</sup>]</td>
											<td><input type="number" min="0"></td>
										</tr>
										<tr class="second-row">
											<td ColSpan=2> Kwalifikacja pożarowa <br> (ZL I-IV, PM, IN) </td>
											<td><label for="names"></label> 
												<select name="names" id="names"> 
													<option value="ZL1">ZL I</option> 
													<option value="ZL2">ZL II</option> 
													<option value="ZL3">ZL III</option> 
													<option value="ZL4">ZL IV</option> 
													<option value="ZL5">ZL V</option> 
													<option value="PM">PM</option> 
													<option value="IN">IN</option> 
												</select> </td>
											<td ColSpan=2> Gęstość obciążenia <br>ogniowego dla PM [MJ/m<sup>2</sup>]</td>
											<td><input type="number" min="0"></td>
										</tr>
										<tr class="third-row">
											<td ColSpan=2> Liczba kondygnacji </td>
											<td><input type="number" min="0"></td>
											<td ColSpan=2> w tym kondygnacji <br>podziemnych </td>
											<td><input type="number" min="0"></td>
										</tr>
										<tr class="fourth-row">
											<td ColSpan=2> przewidywana liczba <br>osób w obiekcie </td>
											<td><input type="number" min="0"></td>
											<td ColSpan=2> zagrożenie wybuchem </td>
											<td>
												<label for="names"></label> 
												<select name="names" id="names"> 
													<option value="NO" default>NIE</option> 
													<option value="YES">TAK</option> 
												</select> 
											</td>
										</tr>
										<tr class="fifth-row">
											<td ColSpan=5> uzgodnienie projektu budowlanego przez rzeczoznawcę <br>do spraw zabezpieczeń przeciwpożarowych </td>
											<td>
												<label for="names"></label> 
												<select name="names" id="names"> 
													<option value="NO" default>NIE</option> 
													<option value="YES">TAK</option> 
												</select> 
											</td>
										</tr>
										<tr class="sixth-row">
											<td ColSpan=6> Informacja o uzyskanych odstępstwach od przepisów (m.in. data wydania i nr postanowienia KW PSP): 
												<br><textarea rows="4" placeholder="........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................"></textarea>
											</td>
										</tr>
										<tr>
											<td> Informacja dotycząca garażu: </td>
											<td><span>brak*</span></td>
											<td><span>podziemny*</span></td>
											<td><span>nadziemny*</span></td>
											<td><span>otwarty*</span></td>
											<td><span>zamknięty*</span></td>
										</tr>
										<tr>
											<td> liczba kondygnacji </td>
											<td> <input type="number" min="0"> </td>
											<td> powierzchnia [m2]: </td>
											<td> <input type="number" min="0"> </td>
											<td> liczba miejsc postojowych </td>
											<td> <input type="number" min="0"> </td>
										</tr>
									</table>
								</div>
								<div class="col-lg-12 sixth-section">
									<div class="inwestor"></div>
									<div class="distance"></div>
									<div class="place-date">
										<input>
										<label class="text-center"> (miejsce, data) </label>
									</div>
								</div>
								<div class="col-lg-12 seventh-section">
									<p> Załączniki: </p>
									<p class="ml-3"> 1. Kserokopia projektu instalacji wraz z uzgodnieniem rzeczoznawcy do spraw zabezpieczeń przeciwpożarowych. </p>
									<div class="ml-3 hor-line"> </div>
									<p class="ml-3"> * niepotrzebne skreślić </p>
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