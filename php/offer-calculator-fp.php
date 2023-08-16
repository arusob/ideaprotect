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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>				
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="../js/bootstrap/bootstrap.min.js"></script>
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
					<h1 class="text-center headline">Kalulator oferty usług <br>z zakresu ochrony przeciwpożarowej</h1>
					<div class="row">
						<div class="col-lg-12 tabs">
							<form action="order-fp.php" method="post">
								<div class="container">
									<a href="#tab-1" data-tab="tab-1" class="b-nav-tab active"><div>Przeglądy urządzeń </div></a>
									<a href="#tab-2" data-tab="tab-2" class="b-nav-tab"><div>Dokumentacja techniczna </div></a>
									<a href="#tab-3" data-tab="tab-3" class="b-nav-tab"><div>Montaż urządzeń </div></a>
									<div id="tab-1" class="b-tab active">
										<h4> Hydranty, zestawy hydroforowe i pompownie. </h4>
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
													<td class="td-2">Przegląd hydrantów zewnętrznych podziemnych (DN80). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 70,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="hydrant_zewn_podz_DN80"></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Przegląd hydrantów zewnętrznych nadziemnych (DN100). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 65,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="hydrant_zewn_nadzie_DN100"></td>
												</tr>
												<tr>
													<td class="td-1"> 3. </td>
													<td class="td-2"> Przegląd hydrantów zewnętrznych nadziemnych (DN80). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="hydrant_zewn_nadzie_DN80"></td>
												</tr>
												<tr>
													<td class="td-1"> 4. </td>
													<td class="td-2"> Przegląd hydrantów wewnętrznych (DN52). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 55,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="hydrant_wewn_DN52"></td>
												</tr>
												<tr>
													<td class="td-1"> 5. </td>
													<td class="td-2"> Przegląd hydrantów wewnętrznych (DN33). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="hydrant_wewn_DN33"></td>
												</tr>
												<tr>
													<td class="td-1"> 6. </td>
													<td class="td-2"> Przegląd hydrantów wewnętrznych (DN25). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 55,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="hydrant_wew_DN25"></td>
												</tr>
												<tr>
													<td class="td-1"> 7. </td>
													<td class="td-2"> Badanie okresowe 5-cio letnie. Badanie ciśnieniowe węży hydrantów wewnętrznych. </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="weze_dyrant_5_lat"></td>
												</tr>
												<tr>
													<td class="td-1"> 8. </td>
													<td class="td-2"> Przegląd okresowy instalacji tryskaczowej (wodnej). </td>
													<td class="td-3"> 0,50 / m2 </td>
													<td class="td-4"><input type="number" min="0" name="inst_trysk_wodna"></td>
												</tr>
												<tr>
													<td class="td-1"> 9. </td>
													<td class="td-2"> Przegląd okresowy zestawu hydroforowego do zasilania inst. ppoż. wewnątrz budynku<br>
																	  (np. zasilające hydranty wewnętrzne, tryskacze). </td>
													<td class="td-3"> 600,00 / zestaw </td>
													<td class="td-4"><input type="number" min="0" name="zest_hydrofor_wewn"></td>
												</tr>
												<tr>
													<td class="td-1"> 10. </td>
													<td class="td-2"> Przegląd okresowy pompowni do zasilania instalacji przeciwpożarowych zewnętrznych<br>
																	  (np. pompownie zasilające hydranty zewnętrzne). </td>
													<td class="td-3"> 700,00 / zestaw </td>
													<td class="td-4"><input type="number" min="0" name="zest_hydrofor_zewewn"></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div id="tab-2" class="b-tab">
										<h4> Dokumentacja techniczna i projektowa dot. ochrony przeciwpożarowej. </h4>
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
													<td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strfa głównie ZL I, <br>
													(np. centrum handlowe, duże sklepy, teatry, kina, szkoły - sale ponad 50 osób). </td>
													<td class="td-3"> od 2000,00 / szt.</td>
													<td class="td-4"><input type="number" min="0" name="IBP_ZL1"></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL II, <br>
													(np. żłobek, przedszkole, szpital, hospicjum, dom spokojnej starości). </td>
													<td class="td-3"> od 2000,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="IBP_ZL2"></td>
												</tr>
												<tr>
													<td class="td-1"> 3. </td>
													<td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL III, <br>
													(np. apteki, biura, szkoły, banki, restauracje, lokale usługowe).  </td>
													<td class="td-3"> od 2200,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="IBP_ZL3"></td>
												</tr>
												<tr>
													<td class="td-1"> 4. </td>
													<td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL V, <br>
													(np. dom dziecka, hotele, pensjonaty, domy wczasowe). </td>
													<td class="td-3"> od 2200,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="IBP_ZL5"></td>
												</tr>
												<tr>
													<td class="td-1"> 5. </td>
													<td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie PM, <br>
													(np. magazyn, biblioteka, hala sklepu części składowej). </td>
													<td class="td-3"> od 2200,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="IBP_PM"></td>
												</tr>
												<tr>
													<td class="td-1"> 6. </td>
													<td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie IN, <br>
													(np. budynki inwentarskie przeznaczone do chowu zwierząt). </td>
													<td class="td-3"> od 2000,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="IBP_IN"></td>
												</tr>
												<tr>
													<td class="td-1"> 7. </td>
													<td class="td-2"> Analiza stanu ochrony przeciwpożarowej (nie jest wymagana prawnie). </td>
													<td class="td-3"> od 900,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="analiza_stanu_ppoz"></td>
												</tr>
												<tr>
													<td class="td-1"> 8. </td>
													<td class="td-2"> Matryca wysterowań urządzeń przeciwpożarowych na wypadek pożaru. </td>
													<td class="td-3"> od 1200,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="matryca_wysterowan"></td>
												</tr>
												<tr>
													<td class="td-1"> 9. </td>
													<td class="td-2"> Plan ewakuacji budynku. Graficzny rzut kondygnacji.  </td>
													<td class="td-3"> od 950,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="plan_ewakuacji"></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div id="tab-3" class="b-tab">
										<h4> Montaż hydrantów. </h4>
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
													<td class="td-2"> Hydrant zewnętrzny podziemny - DN80 <br>
													(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
													<td class="td-3"> od 8000,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_hydr_podziemny_DN_80"></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Hydrant zewnętrzny nadziemny - DN80 <br>
													(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
													<td class="td-3"> od 8400,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_hydr_nadziemny_DN_80"></td>
												</tr>
												<tr>
													<td class="td-1"> 3. </td>
													<td class="td-2"> Hydrant zewnętrzny nadziemny - DN100 <br> 
													(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
													<td class="td-3"> od 8600,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_hydr_nadziemny_DN_100"></td>
												</tr>
												<tr>
													<td class="td-1"> 4. </td>
													<td class="td-2"> Hydrant wewnętrzny - DN25 <br> 
													(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
													<td class="td-3"> od 1600,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_hydr_wew_DN_25"></td>
												</tr>
												<tr>
													<td class="td-1"> 5. </td>
													<td class="td-2"> Hydrant wewnętrzny - DN33 <br> 
													(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
													<td class="td-3"> od 1800,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_hydr_wew_DN_33"></td>
												</tr>
												<tr>
													<td class="td-1"> 6. </td>
													<td class="td-2"> Hydrant wewnętrzny - DN52 <br> 
													(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
													<td class="td-3"> od 2200,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_hydr_wew_DN_52"></td>
												</tr>
											</tbody>
										</table>
										<h4> Montaż instalacji sygnalizacji pożarowej. </h4>
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
													<td class="td-1"> 7. </td>
													<td class="td-2"> Czujka pożaru (montaż do stałego sufitu, do wys. 3,5 m). </td>
													<td class="td-3"> 140,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_czujka_poz_staly_do_350"></td>
												</tr>
												<tr>
													<td class="td-1"> 8. </td>
													<td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 3,5 m). </td>
													<td class="td-3"> 160,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_czujka_poz_staly_pow_350"></td>
												</tr>
												<tr>
													<td class="td-1"> 9. </td>
													<td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 5,5 m). </td>
													<td class="td-3"> 180,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_czujka_poz_staly_pow_550"></td>
												</tr>
												<tr>
													<td class="td-1"> 10. </td>
													<td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 3,5 m). </td>
													<td class="td-3"> 170,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_czujka_poz_podwiesz_pow_350"></td>
												</tr>
												<tr>
													<td class="td-1"> 11. </td>
													<td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 5,5 m). </td>
													<td class="td-3"> 190,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_czujka_poz_staly_pow_550"></td>
												</tr>
												<tr>
													<td class="td-1"> 12. </td>
													<td class="td-2"> Montaż centrali sygnalizacji pożaru. </td>
													<td class="td-3"> 1200,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name="montaz_CSP"></td>
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