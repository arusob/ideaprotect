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
		<link rel="stylesheet" href="../css/calculator.css">
		
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
		<script defer src="../js/navigation-horizontal-tabs.js"></script>
		<script defer src="../js/script.js"></script>

	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<section class="calculator-page">
				<div class="row-content bg-con-1 service-offer">
					<h1 class="text-center headline">Kalulator oferty usług <br>z zakresu BHP</h1>
					<div class="row">
						<div class="col-lg-12 tabs">
							<form action="order-hse.php" method="post">
								<div class="container">
									<a href="#tab-1" data-tab="tab-1" class="b-nav-tab active"><div>Usługi BHP</div></a>
									<a href="#tab-2" data-tab="tab-2" class="b-nav-tab"><div>Dokumentacja BHP</div></a>
									<a href="#tab-3" data-tab="tab-3" class="b-nav-tab"><div>Szkolenia BHP & PPOŻ.</div></a>
									<div id="tab-1" class="b-tab active">
										<h4> Ocena ryzyka zawodowego. </h4>
										<table class="content-table">
											<thead>
												<tr>
													<th class="th-1"> Lp. </th>
													<th class="th-2"> Nazwa usługi </th>
													<th class="th-3"> PLN / j.m. </th>
													<th class="th-4"> ilość </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="td-1"> 1. </td>
													<td class="td-2"> Analiza stanu bezpieczeństwa i higieny pracy. Raport roczny. </td>
													<td class="td-3"> 1400,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="analiza_BHP"></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Ocena ryzyka zawodowego. Wykonanie nowej dokumentacji. </td>
													<td class="td-3"> 240,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="ORZ_nowa_dok"></td>
												</tr>
												<tr>
													<td class="td-1"> 3. </td>
													<td class="td-2"> Ocena ryzyka zawodowego. Aktualizacja istniejącej dokumentacji. </td>
													<td class="td-3"> 160,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="ORZ_aktualizacja"></td>
												</tr>
												<tr>
													<td class="td-1"> 4. </td>
													<td class="td-2"> Ocena warunków pracy przy monitorach ekranowych. </td>
													<td class="td-3"> 160,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="ocena_warunkow_monitor"></td>
												</tr>
											</tbody>
										</table>
										
										<h4> Wypadki. </h4>
										<table class="content-table">
											<thead>
												<tr>
													<th class="th-1"> Lp. </th>
													<th class="th-2"> Nazwa usługi </th>
													<th class="th-3"> PLN / j.m. </th>
													<th class="th-4"> ilość </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="td-1"> 5. </td>
													<td class="td-2"> Protokół z ustalenia okoliczności i przyczyn wypadku przy pracy. </td>
													<td class="td-3"> 450,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="protok_ustal_przycz_wyp"></td>
												</tr>
												<tr>
													<td class="td-1"> 6. </td>
													<td class="td-2"> Karta wypadku w drodze do pracy lub z pracy. </td>
													<td class="td-3"> 380,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="karta_wyp_w_drodze"></td>
												</tr>
												<tr>
													<td class="td-1"> 7. </td>
													<td class="td-2"> Dokumentacja wypadkowa dla wypadków w delegacji (zrównane). </td>
													<td class="td-3"> 520,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="wypadek_w_delegacji"></td>
												</tr>
												<tr>
													<td class="td-1"> 8. </td>
													<td class="td-2"> Rejestr wypadków przy pracy. </td>
													<td class="td-3"> 180,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="rejestr_wypadkow"></td>
												</tr>
											</tbody>
										</table>

										<h4> Regulaminy. Plany. Instrukcje. </h4>
										<table class="content-table">
											<thead>
												<tr>
													<th class="th-1"> Lp. </th>
													<th class="th-2"> Nazwa usługi </th>
													<th class="th-3"> PLN / j.m. </th>
													<th class="th-4"> ilość </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="td-1"> 9. </td>
													<td class="td-2"> Instrukcja bezpiecznego wykonania robót (IBWR). </td>
													<td class="td-3"> 700,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="IBWR"></td>
												</tr>
												<tr>
													<td class="td-1"> 10. </td>
													<td class="td-2"> Plan bezpieczeństwa i ochrony zdrowia (Plan BIOZ). </td>
													<td class="td-3"> 1600,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="plan_BIOZ"></td>
												</tr>
												<tr>
													<td class="td-1"> 11. </td>
													<td class="td-2"> Regulamin pracy. </td>
													<td class="td-3"> 390,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="reg_pracy"></td>
												</tr>
												<tr>
													<td class="td-1"> 12. </td>
													<td class="td-2"> Sprawozdanie z posiedzeń komisji BHP (dla zakładu pracy pow. 250 pracowników). </td>
													<td class="td-3"> 250,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="sprawozd_komis_bhp"></td>
												</tr>
											</tbody>
										</table>

									</div>

									<div id="tab-2" class="b-tab">
										<h4> Dokumentacja BHP. Wykazy. </h4>
										<table class="content-table">
											<thead>
												<tr>
													<th class="th-1"> Lp. </th>
													<th class="th-2"> Nazwa usługi </th>
													<th class="th-3"> PLN / j.m. </th>
													<th class="th-4"> ilość </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="td-1"> 1. </td>
													<td class="td-2"> Wykaz osób wyznaczonych do udzielenia pierwszej pomocy. </td>
													<td class="td-3"> 90,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="wykaz_os_pierw_pom"></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Wykaz osób wyznaczonych do zwalczania pożarów oraz osób <br/>do prowadzenia ewakuacji zakladu. </td>
													<td class="td-3"> 90,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="wykaz_os_gasz_pozar"></td>
												</tr>
												<tr>
													<td class="td-1"> 3. </td>
													<td class="td-2"> Wykaz prac które powinny być wykonywane przez co najmniej 2 osoby. </td>
													<td class="td-3"> 90,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="prace_dla_2_os"></td>
												</tr>
												<tr>
													<td class="td-1"> 4. </td>
													<td class="td-2"> Wykaz prac szczególnie niebezpiecznych występujących w zakaładzie pracy. </td>
													<td class="td-3"> 190,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="wykaz_prac_szczeg_niebezp"></td>
												</tr>
												<tr>
													<td class="td-1"> 5. </td>
													<td class="td-2"> Wykaz prac szczególnie uciążliwych i szkodliwych dla zdrowia kobiet. <br/>Załącznik regulaminu. </td>
													<td class="td-3"> 190,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="wykaz_prac_szkod_dla_kob"></td>
												</tr>
												<tr>
													<td class="td-1"> 6. </td>
													<td class="td-2"> Wykaz prac wzbronionych młodocianym. Załącznik regulaminu. </td>
													<td class="td-3"> 90,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="wykaz_prac_wzbr_mlod"></td>
												</tr>
												<tr>
													<td class="td-1"> 7. </td>
													<td class="td-2"> Wykaz poleceniodawców określający zakres udzielonego im upoważnienia. </td>
													<td class="td-3"> 250,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="udziel_upowaznienia"></td>
												</tr>
											</tbody>
										</table>

									</div>

									<div id="tab-3" class="b-tab">
										<h4> Szkolenia z zakresu PPOŻ. </h4>
										<table class="content-table">
											<thead>
												<tr>
													<th class="th-1"> Lp. </th>
													<th class="th-2"> Nazwa usługi </th>
													<th class="th-3"> PLN / j.m. </th>
													<th class="th-4"> ilość </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="td-1"> 1. </td>
													<td class="td-2"> Szkolenie dla pracowników z zakresu przeciwdziałania powstawania pożarów. </td>
													<td class="td-3"> 90,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_z_gasz_pozarow"></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Szkolenie dla pracowników z zakresu prowadzenia ewakuacji w zakładzie pracy. </td>
													<td class="td-3"> 70,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_z_ewakuacji"></td>
												</tr>
												<tr>
													<td class="td-1"> 3. </td>
													<td class="td-2"> Przeprowadzenie próbnej ewakuacji budynku. (1 raz na 2 lata). </td>
													<td class="td-3"> 450,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="probna_ewak"></td>
												</tr>
												<tr>
													<td class="td-1"> 4. </td>
													<td class="td-2"> Szkolenie dla pracowników portiernii, dozorców 24h z zakresu obsługi central pożarowych. </td>
													<td class="td-3"> 80,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_obslugi_csp"></td>
												</tr>
												<tr>
													<td class="td-1"> 5. </td>
													<td class="td-2"> Rejestr szkoleń z dziedziny BHP. Prowadzenie dokumentacji. </td>
													<td class="td-3"> 190,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="rej_szkol_bhp"></td>
												</tr>
											</tbody>
										</table>
										<h4> Szkolenia z zakresu BHP. </h4>
										<table class="content-table">
											<thead>
												<tr>
													<th class="th-1"> Lp. </th>
													<th class="th-2"> Nazwa usługi </th>
													<th class="th-3"> PLN / j.m. </th>
													<th class="th-4"> ilość </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="td-1"> 6. </td>
													<td class="td-2"> Szkolenie wstępne BHP dla pracownika (w przypadku nowozatrudnionych). </td>
													<td class="td-3"> 150,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_bhp_wstepne"></td>
												</tr>
												<tr>
													<td class="td-1"> 7. </td>
													<td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracodawców i kierujących pracownikami. </td>
													<td class="td-3"> 300,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_bhp_okr_kier_prac"></td>
												</tr>
												<tr>
													<td class="td-1"> 8. </td>
													<td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników administracyjno-biurowych. </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_bhp_okr_adm"></td>
												</tr>
												<tr>
													<td class="td-1"> 9. </td>
													<td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników inżynieryjno-technicznych. </td>
													<td class="td-3"> 120,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_bhp_okr_inz_tech"></td>
												</tr>
												<tr>
													<td class="td-1"> 10. </td>
													<td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników robotniczych. </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_bhp_okr_robotn"></td>
												</tr>
												<tr>
													<td class="td-1"> 11. </td>
													<td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników służby BHP. </td>
													<td class="td-3"> 480,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_bhp_okr_prac_sluzby_bhp"></td>
												</tr>
												<tr>
													<td class="td-1"> 12. </td>
													<td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników wykonujących zadania <br>
													szczególnie narażone na działanie niebezpiecznych czynników. </td>
													<td class="td-3"> 90,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="szkol_bhp_okr_prac_niebezp_czynn"></td>
												</tr>
											</tbody>
										</table>	
									</div>		
								</div>

								<div class="text-right mb-0 pt-5 pb-5">
									<input class="rabat" name="checkboxRabat" type="checkbox"> Nalicz rabat
									<input class="mr-5" name="rabat" type="number" value="Wpisz rabat" min="0" max="35">%
									<input class="btn btn-success mr-3" id="viewPdf" name="summary" type="submit" disabled value="Generuj koszotrys">
								</div>
								<div class="text-right mb-0 pt-5 pb-5">
									<span> Utwórz umowę na podstawie kosztorysu wraz z harmonogramem prac*.</span>
									<input class="btn btn-warning ml-3" id="viewDocs" name="contract" disabled type="submit" value="Utwórz umowę">
								</div>

							</form>
						</div>
					</div>
				</div>
			</section>
			<?php 
				require('footer.php');
			?>
		</main>				
		<button id="topBtn"><i class="fas fa-arrow-up"></i></button>
	</body>
</html>