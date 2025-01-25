<?php 
	require 'connect.php';
?>
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

		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/calculator-summary.css">

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
		<script defer src="../js/bootstrap/bootstrap.min.js"></script>
		<script defer src="../js/print-document.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<?php 
				if(!empty($_POST['contract'])) {
					$contract = true;
				}

				if(!isset($_POST['checkboxRabat']) || $_POST['checkboxRabat'] != 'on' || empty($_POST['rabat'])) { 
					array_pop($_POST);
					array_pop($_POST);
				} 
				foreach($_POST as $serviceName => $serviceCount) {
					if(!empty($serviceCount) && !intval($serviceCount) && $serviceCount != '' && $serviceCount != 'on' && $serviceName != 'summary' && $serviceName != 'contract') {
						echo '<h1><a href="offer-calculator-fp.php"> Wprowadzono nieprawidłowe wartości do formularza. Wróć do formularza uzupełnić ponownie poprawnymi wartościami. </a></h1>';
					} 
				} 
				$hydrant_zewn_podz_DN80 = !empty($_POST['hydrant_zewn_podz_DN80']) ? $_POST['hydrant_zewn_podz_DN80'] : 0;
				$hydrant_zewn_nadzie_DN100 = !empty($_POST['hydrant_zewn_nadzie_DN100']) ? $_POST['hydrant_zewn_nadzie_DN100'] : 0;
				$hydrant_zewn_nadzie_DN80 = !empty($_POST['hydrant_zewn_nadzie_DN80']) ? $_POST['hydrant_zewn_nadzie_DN80'] : 0;
				$hydrant_wewn_DN52 = !empty($_POST['hydrant_wewn_DN52']) ? $_POST['hydrant_wewn_DN52'] : 0;
				$hydrant_wewn_DN33 = !empty($_POST['hydrant_wewn_DN33']) ? $_POST['hydrant_wewn_DN33'] : 0;
				$hydrant_wewn_DN25 = !empty($_POST['hydrant_wewn_DN25']) ? $_POST['hydrant_wewn_DN25'] : 0;
				$weze_dyrant_5_lat = !empty($_POST['weze_dyrant_5_lat']) ? $_POST['weze_dyrant_5_lat'] : 0;
				$inst_trysk_wodna = !empty($_POST['inst_trysk_wodna']) ? $_POST['inst_trysk_wodna'] : 0;
				$zest_hydrofor_wewn = !empty($_POST['zest_hydrofor_wewn']) ? $_POST['zest_hydrofor_wewn'] : 0;
				$zest_hydrofor_zewewn = !empty($_POST['zest_hydrofor_zewewn']) ? $_POST['zest_hydrofor_zewewn'] : 0;
				$IBP_ZL1 = !empty($_POST['IBP_ZL1']) ? $_POST['IBP_ZL1'] : 0;
				$IBP_ZL2 = !empty($_POST['IBP_ZL2']) ? $_POST['IBP_ZL2'] : 0;
				$IBP_ZL3 = !empty($_POST['IBP_ZL3']) ? $_POST['IBP_ZL3'] : 0;
				$IBP_ZL5 = !empty($_POST['IBP_ZL5']) ? $_POST['IBP_ZL5'] : 0;
				$IBP_PM = !empty($_POST['IBP_PM']) ? $_POST['IBP_PM'] : 0;
				$IBP_IN = !empty($_POST['IBP_IN']) ? $_POST['IBP_IN'] : 0;
				$analiza_stanu_ppoz = !empty($_POST['analiza_stanu_ppoz']) ? $_POST['analiza_stanu_ppoz'] : 0;
				$matryca_wysterowan = !empty($_POST['matryca_wysterowan']) ? $_POST['matryca_wysterowan'] : 0;
				$plan_ewakuacji = !empty($_POST['plan_ewakuacji']) ? $_POST['plan_ewakuacji'] : 0;
				$montaz_hydr_podziemny_DN_80 = !empty($_POST['montaz_hydr_podziemny_DN_80']) ? $_POST['montaz_hydr_podziemny_DN_80'] : 0;
				$montaz_hydr_nadziemny_DN_80 = !empty($_POST['montaz_hydr_nadziemny_DN_80']) ? $_POST['montaz_hydr_nadziemny_DN_80'] : 0;
				$montaz_hydr_nadziemny_DN_100 = !empty($_POST['montaz_hydr_nadziemny_DN_100']) ? $_POST['montaz_hydr_nadziemny_DN_100'] : 0;
				$montaz_hydr_wew_DN_25 = !empty($_POST['montaz_hydr_wew_DN_25']) ? $_POST['montaz_hydr_wew_DN_25'] : 0;
				$montaz_hydr_wew_DN_33 = !empty($_POST['montaz_hydr_wew_DN_33']) ? $_POST['montaz_hydr_wew_DN_33'] : 0;
				$montaz_hydr_wew_DN_52 = !empty($_POST['montaz_hydr_wew_DN_52']) ? $_POST['montaz_hydr_wew_DN_52'] : 0;
				$montaz_czujka_poz_staly_do_350 = !empty($_POST['montaz_czujka_poz_staly_do_350']) ? $_POST['montaz_czujka_poz_staly_do_350'] : 0;
				$montaz_czujka_poz_staly_pow_350 = !empty($_POST['montaz_czujka_poz_staly_pow_350']) ? $_POST['montaz_czujka_poz_staly_pow_350'] : 0;
				$montaz_czujka_poz_staly_pow_550 = !empty($_POST['montaz_czujka_poz_staly_pow_550']) ? $_POST['montaz_czujka_poz_staly_pow_550'] : 0;
				$montaz_czujka_poz_podwiesz_pow_350 = !empty($_POST['montaz_czujka_poz_podwiesz_pow_350']) ? $_POST['montaz_czujka_poz_podwiesz_pow_350'] : 0;
				$montaz_czujka_poz_staly_pow_550 = !empty($_POST['montaz_czujka_poz_staly_pow_550']) ? $_POST['montaz_czujka_poz_staly_pow_550'] : 0;
				$montaz_CSP = !empty($_POST['montaz_CSP']) ? $_POST['montaz_CSP'] : 0;
				$suma = 
				(70.00 * $hydrant_zewn_podz_DN80) + (65.00 * $hydrant_zewn_nadzie_DN100) + (60.00 * $hydrant_zewn_nadzie_DN80) +  
				(55.00 * $hydrant_wewn_DN52) + (50.00 * $hydrant_wewn_DN33) + (55.00 * $hydrant_wewn_DN25) + (50.00 * $weze_dyrant_5_lat) + 
				(00.50 * $inst_trysk_wodna) + (600.00 * $zest_hydrofor_wewn) + (700.00 * $zest_hydrofor_zewewn) +
				(2000.00 * $IBP_ZL1) + (2000.00 * $IBP_ZL2) + (2200.00 * $IBP_ZL3) + (2200.00 * $IBP_ZL5) + (2200.00 * $IBP_PM) + 
				(2000.00 * $IBP_IN) + (900.00 * $analiza_stanu_ppoz) + (1200.00 * $matryca_wysterowan) + (950.00 * $plan_ewakuacji) + 
				(8000.00 * $montaz_hydr_podziemny_DN_80) + (8400.00 * $montaz_hydr_nadziemny_DN_80) + (8600.00 * $montaz_hydr_nadziemny_DN_100) + 
				(1600.00 * $montaz_hydr_wew_DN_25) + (1800.00 * $montaz_hydr_wew_DN_33) + (2200.00 * $montaz_hydr_wew_DN_52) + 
				(140.00 * $montaz_czujka_poz_staly_do_350) + (160.00 * $montaz_czujka_poz_staly_pow_350) + (180.00 * $montaz_czujka_poz_staly_pow_550) + 
				(170.00 * $montaz_czujka_poz_podwiesz_pow_350) + (190.00 * $montaz_czujka_poz_staly_pow_550) + (1200.00 * $montaz_CSP);
				if(isset($_POST['checkboxRabat']) && $_POST['checkboxRabat'] == 'on' && !empty($_POST['rabat'])) {
					$sumaZRabatem = $suma - $suma * ($_POST['rabat']/100);
				}
				if(isset($contract)) {
					?>
						<section class="contract-page">
							<div class="row-content bg-con-1 service-offer contract-sheet">
								<div class="printableArea contract-area">
									<h4 class="headline text-center pb-4 pt-2"> Umowa na wykonanie usług <br>z zakresu ochrony przeciwpożarowej </h4>
									<div class="distance"></div>
									<table  class="col-lg-12 summary" cellpadding="5" cellspacing="10">
										<div class="white-paper">							
											<div class="col-lg-12 section-one">
												<div class="pb-3 place-data text-center">
													<p> zawarta w miejscowości </p>
													<input type="text" class="place">
													<p> w dniu  </p>
													<input type="text" class="time">
												</div>
												<div  class="pb-2 pt-2">
													<p> pomiędzy :  </p>
												</div>
												<div class="buyer">
													<div class="buyer-name">
														<input type="text">
														<label class="text-center"> (pełna nazwa podmiotu zlecającego wykonanie usług, firma, instytucja) </label>
													</div>
													<div class="buyer-in-person">
														<p>reprezentowanym przez</p>
														<div class="person-data">
															<input type="text">
															<label class="text-center">(osoba reprezentująca podmiot zlecający wykonanie usług)</label>
														</div>
													</div>
													<div class="address">
														<input type="text">
														<label class="text-center"> (adres siedziby firmy, instytucji) </label>
													</div>
													<div class="mb-3 text-between">
														<p> zwanym <b>"Zamawiającym"</b></p>
														<p> a </p>
													</div>
												</div>
											</div>
											<div class="col-lg-12 section-two">
												<div>
													<div class="executive">
														<input class="text-center" type="text" placeholder="ideaprotect Arkadiusz Sobczyk">
														<label class="text-center"> (pełna nazwa podmiotu realizującego wykonanie usług, firma) </label>
													</div>
													<div class="executive-person">
														<p> reprezentowanym przez </p>
														<div class="person-data">
															<input class="text-center" type="text" placeholder="Arkadiusz Sobczyk">
															<label class="text-center">(osoba reprezentująca podmiot realizujący wykonanie usług)</label>
														</div>	
													</div>
													<div  class="executive-address">
														<input class="text-center" type="text" placeholder="ul. Prymasa Augusta Hlonda 4B, 02-972 Warszawa">
														<label class="text-center"> (adres firmy) </label>
													</div>
													<div class="text-between mb-4">
														<p> zwanym <b>"Wykonawcą"</b></p>
													</div>
												</div>
											</div>
											<div class="col-lg-12 section-three">
												<p class="text-justify">Niniejsza umowa jest następstwem wyboru przez <b>Zamawiającego</b> oferty <b>Wykonawcy</b> w trybie zwolnionym ze stosowania 
													ustawy z dnia 29 stycznia 2004 r. – Prawo zamówień publicznych (tekst jednolity Dz. U. z 2018 r. poz. 1986 z późn. zm.) 
													na podstawie art. 4 pkt 8 tejże ustawy.</p>
											</div>
											<div class="col-lg-12 section-four">
												<p class="text-center">§ 1 (przedmiot zamówienia) </p>
												<p class="text-justify">Przedmiotem niniejszej Umowy jest świadczenie usług dotyczących zabezpieczeń przeciwpożarowych, w zakresie
													przeglądu, konserwacji, montażu i dokumentacji technicznej 
													zgodnie z Rozporządzeniem Ministra Spraw Wewnętrznych i Administracji z dnia 7 czerwca 2010 r. ws. ochrony przeciwpożarowej budynków, 
													innych obiektów budowlanych i terenów (Dz. U. z 2010 r. nr 109 poz. 719) oraz Rozporządzeniem Ministra Spraw Wewnętrznych 
													i Administracji z dnia 24 lipca 2009 r. ws. przeciwpożarowego zaopatrzenia w wodę oraz dróg pożarowych 
													(Dz. U. z 2009 r. nr 124 poz. 1030).</p>
											</div>
											<div class="col-lg-12 section-five">
												<p class="text-center">§ 2 (wykonanie usłg) </p>
												<p class="text-justify">1. <b>Wykonawca</b> dla <b>Zamawiającego</b> wykona usługi wskazane w <i>Załączniku nr 1. Zestawienie kosztorysu usługowego</i>, 
													stanowiącym integralną część niniejszej Umowy. W przypadku braku możliwości właściwego wykonania usługi na skutek braku dostępu 
													do hydrantów, braku wody, czy też innych okoliczności będących skutkiem niewłaściwej eksploatacji <b>Wykonawca</b> zgłosi pisemnie ten 
													fakt <b>Zamawiającemu</b>, odstępując od wykonania usługi.</p>
												<p class="text-justify">2. Usługa zostanie zrealizowana zgodnie z <i>Załącznikiem nr 2. Harmonogram prac.</i> W przypadku trudności technicznych 
													w wykonaniu badania, powstałych na skutek braku dostępu do instalacji czy też niepełnej sprawności zaworów hydrantowych powodującej, 
													że wykonanie usługi mogłoby doprowadzić do wycieku wody, termin wykonania usługi przedłuża się do końca roku kalendarzowego wskazanego
													w&nbsp;<i>Załączniku nr 2. Harmonogram prac.</i></p>
												<p class="text-justify">3. Ze zrealizowanych usług <b>Wykonawca</b> sporządzi protokół, który zawiera informacje na temat wykonanych czynności 
													zgodnie z&nbsp;obowiązującymi normami oraz zasadami wiedzy technicznej.</p>
												<p class="text-justify">4. Wykonana usługa musi zostać pisemnie potwierdzona przez pracownika firmy lub osobę upoważnioną przez <b>Zamawiającego</b>.</p>
												<p class="text-justify">5. <b>Wykonawca</b> zamieści w protokole numerację elementów rozpatrywanego zabezpieczenia przeciwpożarowego zgodną z numeracją znajdującą się na tych elmentach, 
													bądź w przypadku jej braku dokona nowej numeracji trwale oznaczając element. </p>
												<p class="text-justify">6. Protokół winien być wypełniony w sposób trwały tuszem czarnym bądź niebieskim oraz podpisany przez osobę 
													mającą odpowiednie uprawnienia. </p>
											</div>
											<div class="col-lg-12 section-six mb-4">
												<p class="text-center">§ 3 (wynagrodzenie i płatność)</p>
												<p class="text-justify"> 1. Ustala się wynagrodzenie ryczałtowe dla <b>Wykonawcy</b> w wysokości<input class="text-center amount" placeholder="98 550,00 ">zł brutto. Powyższa kwota stanowi jednocześnie maksymalną wartość umowy.</p> 
												<p class="text-justify"> 2. <b>Zamawiający</b> dokona zapłaty, przelewem na konto bankowe nr <input class="amount-number" placeholder="34 1050 1432 1000 0090 9598 0075"> za wykonane usługi z zakresu ochrony przeciwpożarowej w&nbsp;oparciu o protokół z 
													przeprowadzonych przeglądów, konserwacji oraz prawidłowo wystawioną fakturę, w&nbsp;kwocie podanej w&nbsp;ust. 1, po zakończeniu realizacji usługi.</p>
												<p class="text-justify purchaser-text"> 3. <b>Wykonawca</b> wystawi fakturę dla:</p>
													<input class="purchaser-name" placeholder="nazwa Zamawiającego">
													<input class="purchaser-address" placeholder="nazwa ulicy nr budynku / lokalu">
													<input class="purchaser-address" placeholder="kod pocztowy, nazwa miejscowości">
													<input class="purchaser-address" placeholder="NIP :">
													
												<p class="text-justify mt-3"> 4. Termin płatności ustala się na 30 dni od daty doręczenia prawidłowo wystawionej faktury do <b>Zamawiającego.</b></p>
												<p class="text-justify">5. Za dzień zapłaty uznaje się dzień obciążenia konta <b>Zamawiającego.</b></p>
											</div>
											<div class="col-lg-12 section-seven mb-4">
												<p class="text-center">§ 4 (kary umowne) </p>
												<p class="text-justify"> 1. W razie nie wykonania lub nienależytego wykonania umowy <b>Wykonawca</b> zobowiązuje się zapłacić <b>Zamawiającemu</b> kary umowne liczone od wartości umowy 
													określonej w § 3 ust. 1:</p>
												<p class="text-justify indention"> a) w wysokości 0,5% w przypadku opóźnienia w wykonaniu usługi, za każdy roboczy dzień opóźnienia, licząc od daty upływu terminu realizacji umowy 
													do dnia ostatecznego wykonania usługi,</p>
												<p class="text-justify indention"> b) w wysokości 10% wartości umowy brutto w przypadku odstąpienia od umowy z winy <b>Wykonawcy.</b></p>
												<p class="text-justify"> 2. Strony zastrzegają sobie prawo do odszkodowania uzupełniającego przewyższającego wysokość kar umownych do wysokości rzeczywiście poniesionej szkody.</p>
												<p class="text-justify"> 3. Kara pieniężna winna być zapłacona przez stronę, która naruszyła postanowienia Umowy w terminie 14 dni od złożenia na piśmie przez drugą stronę żądania zapłaty. </p>
											</div>
											<div class="col-lg-12 section-eight mb-4">
												<p class="text-center">§ 5 (okoliczności zmieniające Umowę) </p>
												<p class="text-justify">W przypadku remontu bądź wyłączenia z użytkowania budynku lub innych okoliczności powodujących brak konieczności czy też niemożność wykonania usługi, sporządzony 
													zostanie stosowny aneks do umowy, zmniejszający jej zakres wraz z proporcjonalnym zmniejszeniem wynagrodzenia, o którym mowa w § 3 ust. 1. Aneks wymaga formy 
													pisemnej pod rygorem nieważności.</p>
											</div>
											<div class="col-lg-12 section-nine mb-4">
												<p class="text-center">§ 6 (okres zawarcia umowy) </p>
												<p class="text-justify">Umowa zostaje zawarta na czas określony od dnia<input>do dnia<input>, z zastrzeżeniem o którym mowa w § 2 ust. 2.</p>
											</div>
											<div class="col-lg-12 section-ten mb-4">
												<p class="text-center">§ 7 (sprawy nieuregulowane) </p>
												<p class="text-justify">Sprawy nie objęte niniejszą umową regulują właściwe przepisy <i><b>Kodeksu Cywilnego</b></i>. Wszelkie ewentualne kwestie sporne powstałe na tle wykonania niniejszej umowy Strony 
													rozstrzygać będą polubownie. W przypadku nie dojścia do porozumienia spory podlegają rozstrzygnięciu przez właściwy rzeczowo Sąd dla siedziby <b>Zamawiającego</b>.</p>
											</div>
											<div class="col-lg-12 section-eleven mb-4">
												<p class="text-center">§ 8 (zmiany w Umowie) </p>
												<p class="text-justify">Wszelkie zmiany postanowień niniejszej Umowy mogą być dokonywane za porozumieniem stron, wyłącznie w formie pisemnej pod rygorem nieważności.</p>
											</div>
											<div class="col-lg-12 section-twelve mb-4">
												<p class="text-center">§ 9 (strony Umowy) </p>
												<p>Umowa sporządzona została w <u>dwóch jednobrzmiących egzemplarzach</u>, po jednym dla każdej ze stron.</p>
											</div>
											<div class="col-lg-12 section-thirteen ">
												<p class="text-center">§ 10</p>
												<p> Integralną część umowy stanowią załączniki nr 1 i nr 2.</p>
												<p class="indention"> Załącznik nr 1. Zestawienie kosztorysu usługowego. </p>
												<p class="indention"> Załącznik nr 2. Harmonogram prac. </p>
											</div>
										</div>
									</table>
								</div>
							</div>
						</section>
					<?php
				}
			?>
			<section class="summary-page">
				<div class="row-content bg-con-1 service-offer pt-5 pb-2">
					<div class="distance-cost-estimate"></div>
					<div class="attachment printableArea">
						<h5 class="pt-2 pb-2"> Załącznik nr 1. Kosztorys usług dotyczących ochrony przeciwpożarowej </h5>
						<table  class="col-lg-12 summary" cellpadding="5" cellspacing="10">
							<thead>
								<tr>
									<th class="th-1"> Nazwa usługi </th>
									<th class="th-2"> PLN / j.m. </th>
									<th class="th-3"> ilość </th>
								</tr>
							</thead>
							<?php
								if($hydrant_zewn_podz_DN80) {
									echo '<tr><td class="td-1"> Hydranty zewnętrzne podziemne DN 80. Badanie wydajności i ciśnienia. </td>
									<td class="td-2">(70,00 PLN/szt):</td><td class="td-3">'.$hydrant_zewn_podz_DN80.'</td></tr>';
								}
								if($hydrant_zewn_nadzie_DN100) {
									echo '<tr></td><td class="td-1"> Hydranty zewnętrzne nadziemne DN 100. Badanie wydajności i ciśnienia. </td>
									<td class="td-2">(65,00 PLN/szt):</td><td class="td-3">'.$hydrant_zewn_nadzie_DN100.'</td></tr>';
								} 
								if($hydrant_zewn_nadzie_DN80) {
									echo '<tr></td><td class="td-1"> Hydranty zewnętrzne nadziemne DN 80. Badanie wydajności i ciśnienia. </td>
									<td class="td-2">(60,00 PLN/szt):</td><td class="td-3">'.$hydrant_zewn_nadzie_DN80.'</td></tr>';
								}
								if($hydrant_wewn_DN52) {
									echo '<tr></td><td class="td-1"> Hydranty wewnętrzne DN 52. Badanie wydajności i ciśnienia. </td> 
									<td class="td-2">(55,00 PLN/szt):</td><td class="td-3">'.$hydrant_wewn_DN52.'</td></tr>';
								}
								if($hydrant_wewn_DN33) {
									echo '<tr><td class="td-1"> Hydranty wewnętrzne DN 33. Badanie wydajności i ciśnienia. </td>
									<td class="td-2">(50,00 PLN/szt):</td><td class="td-3">'.$hydrant_wewn_DN33.'</td></tr>';
								}
								if($hydrant_wewn_DN25 ) {
									echo '<tr><td class="td-1"> Hydranty wewnętrzne DN 25. Badanie wydajności i ciśnienia. </td>
									<td class="td-2">(50,00 PLN/szt):</td><td class="td-3">'.$hydrant_wewn_DN25.'</td></tr>';
								} 
								if($weze_dyrant_5_lat ) {
									echo '<tr><td class="td-1"> Badanie okresowe 5-cio letnie. Badanie ciśnieniowe węży hydrantów wewnętrznych. </td>
									<td class="td-2">(50,00 PLN/szt):</td><td class="td-3">'.$weze_dyrant_5_lat.'</td></tr>';
								}
								if($inst_trysk_wodna ) {
									echo '<tr><td class="td-1"> Przegląd okresowy instalacji tryskaczowej (wodnej). </td>
									<td class="td-2">(0,50 PLN/m2):</td><td class="td-3">'.$inst_trysk_wodna.'</td></tr>';
								} 
								if($zest_hydrofor_wewn ) {
									echo '<tr><td class="td-1"> Przegląd okresowy zestawu hydroforowego do zasilania inst. ppoż. wewnątrz budynku<br>
									(np. zasilające hydranty wewnętrzne, tryskacze). </td>
									<td class="td-2">(600,00 PLN/zestaw):</td><td class="td-3">'.$zest_hydrofor_wewn.'</td></tr>';
								} 
								if($zest_hydrofor_zewewn) {
									echo '<tr><td class="td-1"> Przegląd okresowy pompowni do zasilania instalacji przeciwpożarowych zewnętrznych<br>
									(np. pompownie zasilające hydranty zewnętrzne). </td>
									<td class="td-2">(700,00 PLN/zestaw):</td><td class="td-3">'.$zest_hydrofor_zewewn.'</td></tr>';
								} 
								if($IBP_ZL1) {
									echo '<tr><td class="td-1"> Instrukcja bezpieczeństwa pożarowego budynku. Strfa głównie ZL I, <br>
									(np. centrum handlowe, duże sklepy, teatry, kina, szkoły - sale ponad 50 osób). </td>
									<td class="td-2">(2000,00 PLN/szt.):</td><td class="td-3">'.$IBP_ZL1.'</td></tr>';
								} 
								if($IBP_ZL2) {
									echo '<tr><td class="td-1"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL II, <br>
									(np. żłobek, przedszkole, szpital, hospicjum, dom spokojnej starości). </td>
									<td class="td-2">(2000,00 PLN/szt.):</td><td class="td-3">'.$IBP_ZL2.'</td></tr>';
								} 
								if($IBP_ZL3) {
									echo '<tr><td class="td-1"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL III, <br>
									(np. apteki, biura, szkoły, banki, restauracje, lokale usługowe). </td>
									<td class="td-2">(2200,00 PLN/szt.):</td><td class="td-3">'.$IBP_ZL3.'</td></tr>';
								} 
								if($IBP_ZL5) {
									echo '<tr><td class="td-1"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL V, <br>
									(np. dom dziecka, hotele, pensjonaty, domy wczasowe). </td>
									<td class="td-2">(2200,00 PLN/szt.):</td><td class="td-3">'.$IBP_ZL5.'</td></tr>';
								} 
								if($IBP_PM) {
									echo '<tr><td class="td-1"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie PM, <br>
									(np. magazyn, biblioteka, hala sklepu części składowej). </td>
									<td class="td-2">(2200,00 PLN/szt.):</td><td class="td-3">'.$IBP_PM.'</td></tr>';
								}
								if($IBP_IN) {
									echo '<tr><td class="td-1"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie IN, <br>
									(np. budynki inwentarskie przeznaczone do chowu zwierząt). </td>
									<td class="td-2">(2000,00 PLN/szt.):</td><td class="td-3">'.$IBP_IN.'</td></tr>';
								} 
								if($analiza_stanu_ppoz) {
									echo '<tr><td class="td-1"> Analiza stanu ochrony przeciwpożarowej (nie jest wymagana prawnie). </td>
									<td class="td-2">(900,00 PLN/szt.):</td><td class="td-3">'.$analiza_stanu_ppoz.'</td></tr>';
								} 
								if($matryca_wysterowan) {
									echo '<tr><td class="td-1"> Matryca wysterowań urządzeń przeciwpożarowych na wypadek pożaru. </td>
									<td class="td-2">(1200,00 PLN/szt.):</td><td class="td-3">'.$matryca_wysterowan.'</td></tr>';
								}
								if($plan_ewakuacji) {
									echo '<tr><td class="td-1"> Plan ewakuacji budynku. Graficzny rzut kondygnacji. </td>
									<td class="td-2">(950,00 PLN/szt.):</td><td class="td-3">'.$plan_ewakuacji.'</td></tr>';
								} 
								if($montaz_hydr_podziemny_DN_80) {
									echo '<tr><td class="td-1"> Hydrant zewnętrzny podziemny - DN80 <br>
									(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
									<td class="td-2">(8000,00 PLN/szt.):</td><td class="td-3">'.$montaz_hydr_podziemny_DN_80.'</td></tr>';
								}
								if($montaz_hydr_nadziemny_DN_80) {
									echo '<tr><td class="td-1"> Hydrant zewnętrzny nadziemny - DN80 <br>
									(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
									<td class="td-2">(8400,00 PLN/szt.):</td><td class="td-3">'.$montaz_hydr_nadziemny_DN_80.'</td></tr>';
								}
								if($montaz_hydr_nadziemny_DN_100) {
									echo '<tr><td class="td-1"> Hydrant zewnętrzny nadziemny - DN100 <br> 
									(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
									<td class="td-2">(8600,00 PLN/szt.):</td><td class="td-3">'.$montaz_hydr_nadziemny_DN_100.'</td></tr>';
								}
								if($montaz_hydr_wew_DN_25) {
									echo '<tr><td class="td-1"> Hydrant wewnętrzny - DN25 <br> 
									(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
									<td class="td-2">(1600,00 PLN/szt.):</td><td class="td-3">'.$montaz_hydr_wew_DN_25.'</td></tr>';
								} 
								if($montaz_hydr_wew_DN_33) {
									echo '<tr><td class="td-1"> Hydrant wewnętrzny - DN33 <br> 
									(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
									<td class="td-2">(1800,00 PLN/szt.):</td><td class="td-3">'.$montaz_hydr_wew_DN_33.'</td></tr>';
								} 
								if($montaz_hydr_wew_DN_52) {
									echo '<tr><td class="td-1"> Hydrant wewnętrzny - DN52 <br> 
									(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
									<td class="td-2">(2200,00 PLN/szt.):</td><td class="td-3">'.$montaz_hydr_wew_DN_52.'</td></tr>';
								} 
								if($montaz_czujka_poz_staly_do_350) {
									echo '<tr><td class="td-1"> Czujka pożaru (montaż do stałego sufitu, do wys. 3,5 m). </td>
									<td class="td-2">(140,00 PLN/szt.):</td><td class="td-3">'.$montaz_czujka_poz_staly_do_350.'</td></tr>';
								} 
								if($montaz_czujka_poz_staly_pow_350) {
									echo '<tr><td class="td-1"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 3,5 m). </td>
									<td class="td-2">(160,00 PLN/szt.):</td><td class="td-3">'.$montaz_czujka_poz_staly_pow_350.'</td></tr>';
								} 
								if($montaz_czujka_poz_staly_pow_550) {
									echo '<tr><td class="td-1"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 5,5 m). </td>
									<td class="td-2">(180,00 PLN/szt.):</td><td class="td-3">'.$montaz_czujka_poz_staly_pow_550.'</td></tr>';
								}
								if($montaz_czujka_poz_podwiesz_pow_350) {
									echo '<tr><td class="td-1"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 3,5 m). </td>
									<td class="td-2">(170,00 PLN/szt.):</td><td class="td-3">'.$montaz_czujka_poz_podwiesz_pow_350.'</td></tr>';
								} 
								if($montaz_czujka_poz_staly_pow_550) {
									echo '<tr><td class="td-1"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 5,5 m). </td>
									<td class="td-2">(190,00 PLN/szt.):</td><td class="td-3">'.$montaz_czujka_poz_staly_pow_550.'</td></tr>';
								} 
								if($montaz_CSP) {
									echo '<tr><td class="td-1"> Montaż centrali sygnalizacji pożaru. </td>
									<td class="td-2">(1200,00 PLN/szt.):</td><td class="td-3">'.$montaz_CSP.'</td></tr>';

								} 
								
								echo '<tr><td class="td-1">SUMA</td><td class="td-2">'.$suma.' PLN <td class="td-3"></tr>';
								if(isset ($sumaZRabatem)) {
								echo '<tr><td class="td-1">SUMA Z RABATEM</td><td class="td-2">'.$sumaZRabatem.' PLN<td class="td-3"></tr>';
								}
							?>
						</table>
					</div>
				</div>
			</section>
			<?php
				if(isset($contract)) {
				$orderCounter = 1;
			?>
			<section class="timetable">
				<div class="row-content bg-con-1 service-offer pt-2 pb-2">
					<div class="timetable-sheet printableArea" >
						<h5 class="pt-2 pb-2"> Załącznik nr 2. Harmonogram prac. </h5>
						<div class="distance"></div>
						<table  class="col-lg-12 summary" cellpadding="5" cellspacing="10">
							<thead>
								<tr>
									<th class="th-1"> Lp. </th>
									<th class="th-2"> Nazwa usługi </th>
									<th class="th-3"> Data realizacji <span id="date-info">(data pierwszego rekordu zostanie skopiowana do pozostałych)</span></th>
								</tr>
							</thead>
							<?php
							if($hydrant_zewn_podz_DN80) {
								for($i=0; $i<$hydrant_zewn_podz_DN80; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2">Hydranty zewnętrzne podziemne DN 80. Badanie wydajności i ciśnienia.</td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
									echo '</td></tr>';
									$orderCounter += 1;
								}								
							} 
							if($hydrant_zewn_nadzie_DN100) {
								for($i=0; $i<$hydrant_zewn_nadzie_DN100; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydranty zewnętrzne nadziemne DN 100. Badanie wydajności i ciśnienia. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
									echo '</td></tr>';
									$orderCounter += 1;
								}	
							} 
							if($hydrant_zewn_nadzie_DN80) {
								for($i=0; $i<$hydrant_zewn_nadzie_DN80; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydranty zewnętrzne nadziemne DN 80. Badanie wydajności i ciśnienia. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
									echo '</td></tr>';
									$orderCounter += 1;
								}	
							} 
							if($hydrant_wewn_DN52) {
								for($i=0; $i<$hydrant_wewn_DN52; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydranty wewnętrzne DN 52. Badanie wydajności i ciśnienia. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($hydrant_wewn_DN33) {
								for($i=0; $i<$hydrant_wewn_DN33; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydranty wewnętrzne DN 33. Badanie wydajności i ciśnienia. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($hydrant_wewn_DN25) {
								for($i=0; $i<$hydrant_wewn_DN25; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydranty wewnętrzne DN 25. Badanie wydajności i ciśnienia. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($weze_dyrant_5_lat ) {
								for($i=0; $i<$weze_dyrant_5_lat; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Badanie okresowe 5-cio letnie. Badanie ciśnieniowe węży hydrantów wewnętrznych. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($inst_trysk_wodna ) {
								for($i=0; $i<$inst_trysk_wodna; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Przegląd okresowy instalacji tryskaczowej (wodnej). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';											
									$orderCounter += 1;
								}
							} 
							if($zest_hydrofor_wewn ) {
								for($i=0; $i<$zest_hydrofor_wewn; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Przegląd okresowy zestawu hydroforowego do zasilania inst. ppoż. wewnątrz budynku<br>
									(np. zasilające hydranty wewnętrzne, tryskacze). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($zest_hydrofor_zewewn) {
								for($i=0; $i<$zest_hydrofor_zewewn; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Przegląd okresowy pompowni do zasilania instalacji przeciwpożarowych zewnętrznych<br>
									(np. pompownie zasilające hydranty zewnętrzne). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($IBP_ZL1) {
								for($i=0; $i<$IBP_ZL1; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strfa głównie ZL I, <br>
									(np. centrum handlowe, duże sklepy, teatry, kina, szkoły - sale ponad 50 osób). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($IBP_ZL2) {
								for($i=0; $i<$IBP_ZL2; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL II, <br>
									(np. żłobek, przedszkole, szpital, hospicjum, dom spokojnej starości). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($IBP_ZL3) {
								for($i=0; $i<$IBP_ZL3; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL III, <br>
									(np. apteki, biura, szkoły, banki, restauracje, lokale usługowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($IBP_ZL5) {
								for($i=0; $i<$IBP_ZL5; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL V, <br>
									(np. dom dziecka, hotele, pensjonaty, domy wczasowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($IBP_PM) {
								for($i=0; $i<$IBP_PM; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie PM, <br>
									(np. magazyn, biblioteka, hala sklepu części składowej). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($IBP_IN) {
								for($i=0; $i<$IBP_IN; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie IN, <br>
									(np. budynki inwentarskie przeznaczone do chowu zwierząt). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($analiza_stanu_ppoz) {
								for($i=0; $i<$analiza_stanu_ppoz; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Analiza stanu ochrony przeciwpożarowej (nie jest wymagana prawnie). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($matryca_wysterowan) {
								for($i=0; $i<$matryca_wysterowan; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Matryca wysterowań urządzeń przeciwpożarowych na wypadek pożaru. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($plan_ewakuacji) {
								for($i=0; $i<$plan_ewakuacji; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Plan ewakuacji budynku. Graficzny rzut kondygnacji. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($montaz_hydr_podziemny_DN_80) {
								for($i=0; $i<$montaz_hydr_podziemny_DN_80; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydrant zewnętrzny podziemny - DN80 <br>
									(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($montaz_hydr_nadziemny_DN_80) {
								for($i=0; $i<$montaz_hydr_nadziemny_DN_80; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydrant zewnętrzny nadziemny - DN80 <br>
									(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($montaz_hydr_nadziemny_DN_100) {
								for($i=0; $i<$montaz_hydr_nadziemny_DN_100; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydrant zewnętrzny nadziemny - DN100 <br> 
									(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($montaz_hydr_wew_DN_25) {
								for($i=0; $i<$montaz_hydr_wew_DN_25; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydrant wewnętrzny - DN25 <br> 
									(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($montaz_hydr_wew_DN_33) {
								for($i=0; $i<$montaz_hydr_wew_DN_33; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydrant wewnętrzny - DN33 <br> 
									(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($montaz_hydr_wew_DN_52) {
								for($i=0; $i<$montaz_hydr_wew_DN_52; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2">Hydrant wewnętrzny - DN52 <br> 
									(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($montaz_czujka_poz_staly_do_350) {
								for($i=0; $i<$montaz_czujka_poz_staly_do_350; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, do wys. 3,5 m). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($montaz_czujka_poz_staly_pow_350) {
								for($i=0; $i<$montaz_czujka_poz_staly_pow_350; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 3,5 m). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							if($montaz_czujka_poz_staly_pow_550) {
								for($i=0; $i<$montaz_czujka_poz_staly_pow_550; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 5,5 m). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($montaz_czujka_poz_podwiesz_pow_350) {
								for($i=0; $i<$montaz_czujka_poz_podwiesz_pow_350; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 3,5 m). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($montaz_czujka_poz_staly_pow_550) {
								for($i=0; $i<$montaz_czujka_poz_staly_pow_550; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 5,5 m). </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							}
							if($montaz_CSP) {
								for($i=0; $i<$montaz_CSP; $i++) {
									echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Montaż centrali sygnalizacji pożaru. </td><td class="td-3">';
									echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
									echo '</td></tr>';
									$orderCounter += 1;
								}
							} 
							?>
						</table>
					</div>
				</div>
			</section>
			<?php						
				}
			?>
			<div class="actions buttons bg-con-1 row-content">
				<div class="back-offer">
					<a href="offer-calculator-fp.php" class="non-printable "> << Powrót do kalkulatora ofert</a>
				</div>
				<div class="text-center">
					<input class="non-printable btn btn-light mt-4 mb-4" type="button" onclick="printDiv('printableArea')" value="Podgląd pdf" />
				</div>
			</div>
			<?php 
				require('footer.php');
			?>
		</main>
	</body>
</html>

