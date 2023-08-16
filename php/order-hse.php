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
						echo '<h1><a href="offer-calculator-hse.php"> Wprowadzono nieprawidłowe wartości do formularza. Wróć do formularza uzupełnić ponownie poprawnymi wartościami. </a></h1>';
					} 
				}
				$analiza_BHP = !empty($_POST['analiza_BHP']) ? $_POST['analiza_BHP'] : 0;
				$ORZ_nowa_dok = !empty($_POST['ORZ_nowa_dok']) ? $_POST['ORZ_nowa_dok'] : 0;
				$ORZ_aktualizacja = !empty($_POST['ORZ_aktualizacja']) ? $_POST['ORZ_aktualizacja'] : 0;
				$ocena_warunkow_monitor = !empty($_POST['ocena_warunkow_monitor']) ? $_POST['ocena_warunkow_monitor'] : 0;
				$protok_ustal_przycz_wyp = !empty($_POST['protok_ustal_przycz_wyp']) ? $_POST['protok_ustal_przycz_wyp'] : 0;
				$karta_wyp_w_drodze = !empty($_POST['karta_wyp_w_drodze']) ? $_POST['karta_wyp_w_drodze'] : 0;
				$wypadek_w_delegacji = !empty($_POST['wypadek_w_delegacji']) ? $_POST['wypadek_w_delegacji'] : 0;
				$rejestr_wypadkow = !empty($_POST['rejestr_wypadkow']) ? $_POST['rejestr_wypadkow'] : 0;
				$IBWR = !empty($_POST['IBWR']) ? $_POST['IBWR'] : 0;
				$plan_BIOZ = !empty($_POST['plan_BIOZ']) ? $_POST['plan_BIOZ'] : 0;
				$reg_pracy = !empty($_POST['reg_pracy']) ? $_POST['reg_pracy'] : 0;
				$sprawozd_komis_bhp = !empty($_POST['sprawozd_komis_bhp']) ? $_POST['sprawozd_komis_bhp'] : 0;	
				$wykaz_os_pierw_pom = !empty($_POST['wykaz_os_pierw_pom']) ? $_POST['wykaz_os_pierw_pom'] : 0;
				$wykaz_os_gasz_pozar = !empty($_POST['wykaz_os_gasz_pozar']) ? $_POST['wykaz_os_gasz_pozar'] : 0;
				$prace_dla_2_os = !empty($_POST['prace_dla_2_os']) ? $_POST['prace_dla_2_os'] : 0;
				$wykaz_prac_szczeg_niebezp = !empty($_POST['wykaz_prac_szczeg_niebezp']) ? $_POST['wykaz_prac_szczeg_niebezp'] : 0;
				$wykaz_prac_szkod_dla_kob = !empty($_POST['wykaz_prac_szkod_dla_kob']) ? $_POST['wykaz_prac_szkod_dla_kob'] : 0;
				$wykaz_prac_wzbr_mlod = !empty($_POST['wykaz_prac_wzbr_mlod']) ? $_POST['wykaz_prac_wzbr_mlod'] : 0;
				$udziel_upowaznienia = !empty($_POST['udziel_upowaznienia']) ? $_POST['udziel_upowaznienia'] : 0;
				$szkol_z_gasz_pozarow = !empty($_POST['szkol_z_gasz_pozarow']) ? $_POST['szkol_z_gasz_pozarow'] : 0;
				$szkol_z_ewakuacji = !empty($_POST['szkol_z_ewakuacji']) ? $_POST['szkol_z_ewakuacji'] : 0;
				$probna_ewak = !empty($_POST['probna_ewak']) ? $_POST['probna_ewak'] : 0;
				$szkol_obslugi_csp = !empty($_POST['szkol_obslugi_csp']) ? $_POST['szkol_obslugi_csp'] : 0;
				$rej_szkol_bhp = !empty($_POST['rej_szkol_bhp']) ? $_POST['rej_szkol_bhp'] : 0;
				$szkol_bhp_wstepne = !empty($_POST['szkol_bhp_wstepne']) ? $_POST['szkol_bhp_wstepne'] : 0;
				$szkol_bhp_okr_kier_prac = !empty($_POST['szkol_bhp_okr_kier_prac']) ? $_POST['szkol_bhp_okr_kier_prac'] : 0;
				$szkol_bhp_okr_adm = !empty($_POST['szkol_bhp_okr_adm']) ? $_POST['szkol_bhp_okr_adm'] : 0;
				$szkol_bhp_okr_inz_tech = !empty($_POST['szkol_bhp_okr_inz_tech']) ? $_POST['szkol_bhp_okr_inz_tech'] : 0;
				$szkol_bhp_okr_robotn = !empty($_POST['szkol_bhp_okr_robotn']) ? $_POST['szkol_bhp_okr_robotn'] : 0;
				$szkol_bhp_okr_prac_sluzby_bhp = !empty($_POST['szkol_bhp_okr_prac_sluzby_bhp']) ? $_POST['szkol_bhp_okr_prac_sluzby_bhp'] : 0;
				$szkol_bhp_okr_prac_niebezp_czynn = !empty($_POST['szkol_bhp_okr_prac_niebezp_czynn']) ? $_POST['szkol_bhp_okr_prac_niebezp_czynn'] : 0;
				$suma = 
				(1400.00 * $analiza_BHP) + (240.00 * $ORZ_nowa_dok) + (160.00 * $ORZ_aktualizacja) + 	(160.00 * $ocena_warunkow_monitor) + 
				(450.00 * $protok_ustal_przycz_wyp) + (380.00 * $karta_wyp_w_drodze) + (520.00 * $wypadek_w_delegacji) + (180.00 * $rejestr_wypadkow) + 
				(700.00 * $IBWR) + (1600.00 * $plan_BIOZ) + (390.00 * $reg_pracy) + (250.00 * $sprawozd_komis_bhp) + 
				(90.00 * $wykaz_os_pierw_pom) + (90.00 * $wykaz_os_gasz_pozar) + (90.00 * $prace_dla_2_os) + (190.00 * $wykaz_prac_szczeg_niebezp) + 
				(190.00 * $wykaz_prac_szkod_dla_kob) + (90.00 * $wykaz_prac_wzbr_mlod) + (250.00 * $udziel_upowaznienia) + 
				(90.00 * $szkol_z_gasz_pozarow) + (70.00 * $szkol_z_ewakuacji) + (450.00 * $probna_ewak) + (80.00 * $szkol_obslugi_csp) + 
				(190.00 * $rej_szkol_bhp) + 
				(150.00 * $szkol_bhp_wstepne) + (300.00 * $szkol_bhp_okr_kier_prac) + (60.00 * $szkol_bhp_okr_adm) + (120.00 * $szkol_bhp_okr_inz_tech) + 
				(60.00 * $szkol_bhp_okr_robotn) + (480.00 * $szkol_bhp_okr_prac_sluzby_bhp) + (90.00 * $szkol_bhp_okr_prac_niebezp_czynn);
				if(isset($_POST['checkboxRabat']) && $_POST['checkboxRabat'] == 'on' && !empty($_POST['rabat'])) {
					$sumaZRabatem = $suma - $suma * ($_POST['rabat']/100);
				}
				if(isset($contract)) {
					?>
						<section class="contract-page">
							<div class="row-content bg-con-1 service-offer pt-5 pb-5">
								<div class="calc-result printableArea" >
									<h4 class="headline text-center pb-4 pt-4"> Umowa na wykonanie usług <br>z zakresu BHP </h4>
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
												<p class="text-justify">1. Przedmiotem umowy jest świadczenie kompleksowej obsługi w zakresie BHP (zgodnie z rozporządzeniem Rady Ministrów z dnia 2 września 1997 roku w sprawie służby bezpieczeństwa i higieny pracy 
													(Dz.U. z 1997r., Nr 109, poz. 704 ze zm.) oraz ochrony przeciwpożarowej zgodnie z Ustawą z dnia 24 sierpnia 1991 r., o ochronie przeciwpożarowej (t.j. Dz.U. z 2017r., poz. 736 ze zm.).
													</p>
												<p class="text-justify">2. Zakres bezpieczeństwa i higieny pracy o których mowa w ust. 1 realizowane są zgodnie z przepisami:<br>
												• ustawy z dnia 26 czerwca 1974r. Kodeks pracy (t.j. Dz. U. z 2016r., poz. 1666 ze zm.),<br>
												• rozporządzenia Ministra Gospodarki i Pracy z dnia 27 lipca 2004r w sprawie szkolenia w dziedzinie bezpieczeństwa i higieny pracy &nbsp;&nbsp;&nbsp;(Dz.U.2004.180.1860 ze zm.),<br>
												• rozporządzenia Rady Ministrów z dnia 2 września 1997r. w sprawie służby bezpieczeństwa i higieny pracy (Dz.U. 1997.109.704 ze zm.),<br>
												• rozporządzenie Ministra Pracy i Polityki Socjalnej z dnia 1 grudnia 1998r. w sprawie bezpieczeństwa i higieny pracy na stanowiskach &nbsp;&nbsp;&nbsp;wyposażonych w monitory ekranowe (Dz.U.1998.148.973),<br>
												• rozporządzenie Ministra Gospodarki i Pracy z dnia 16 września 2004r. w sprawie wzoru protokołu ustalenia okoliczności i przyczyn &nbsp;&nbsp;&nbsp;wypadku przy pracy (Dz.U.2004.227.2298),<br>
												• rozporządzenie Rady Ministrów z dnia 1 lipca 2009r. w sprawie ustalania okoliczności i przyczyn wypadków przy pracy &nbsp;&nbsp;&nbsp;&nbsp;(Dz.U.2009.105.870),<br>
												• pozostałych aktów wykonawczych zakresu bhp.</p>
											</div>
											<div class="col-lg-12 section-five">
												<p class="text-center">§ 2 (wykonanie usłg) </p>
												<p class="text-justify">1. <b>Wykonawca</b> dla <b>Zamawiającego</b> wykona usługi wskazane w <i>Załączniku nr 1. Zestawienie kosztorysu usługowego</i>, 
													stanowiącym integralną część niniejszej Umowy. W przypadku braku możliwości właściwego wykonania usługi na skutek braku dostępu 
													do informacji nt. organizacji, pracowników czy procesów pracy <b>Wykonawca</b> zgłosi pisemnie ten 
													fakt <b>Zamawiającemu</b>, odstępując od wykonania usługi.</p>
												<p class="text-justify">2. Usługa zostanie zrealizowana zgodnie z <i>Załącznikiem nr 2. Harmonogram prac.</i> W przypadku trudności tj. braku dostępu do informacji niezbędnych do realizacji 
												 usługi termin realizacji przedłuża się do końca roku kalendarzowego wskazanego w <i>Załączniku nr 2. Harmonogram prac.</i></p>
												<p class="text-justify">3. Ze zrealizowanych usług <b>Wykonawca</b> sporządzi protokół, który zawiera informacje na temat wykonanych czynności 
													zgodnie z&nbsp;obowiązującymi przepisami i normami.</p>
												<p class="text-justify">4. Wykonana usługa musi zostać pisemnie potwierdzona przez pracownika firmy lub osobę upoważnioną przez <b>Zamawiającego</b>.</p>
												<p class="text-justify">5. Dokumentacja BHP winna być wypełniona w sposób trwały tuszem czarnym bądź niebieskim oraz podpisana przez osobę 
													mającą odpowiednie uprawnienia. </p>
											</div>
											<div class="col-lg-12 section-six mb-4">
												<p class="text-center">§ 3 (wynagrodzenie i płatność)</p>
												<p class="text-justify"> 1. Ustala się wynagrodzenie ryczałtowe dla <b>Wykonawcy</b> w wysokości<input class="text-center amount" placeholder="98 550,00 ">zł brutto. Powyższa kwota stanowi jednocześnie maksymalną wartość umowy.</p> 
												<p class="text-justify"> 2. <b>Zamawiający</b> dokona zapłaty, przelewem na konto bankowe nr <input class="amount-number" placeholder="34 1050 1432 1000 0090 9598 0075"> za wykonane usługi z zakresu BHP w&nbsp;oparciu o protokół z 
													przeprowadzonych usług BHP oraz prawidłowo wystawioną fakturę, w&nbsp;kwocie podanej w&nbsp;ust. 1, po zakończeniu realizacji usługi.</p>
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
											<div class="col-lg-12 section-thirteen mb-4">
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
					<div class="row-content bg-con-1 service-offer pt-5 pb-5" >
						<div class="attachment printableArea">
							<h5 class="text-center pt-2 pb-4"> Załącznik nr 1. Zestawienie kosztorysu usługowego. </h5>
							<div class="distance"></div>
							<table  class="col-lg-12" cellpadding="5" cellspacing="10">
								<thead>
									<tr>
										<th class="th-1"> Nazwa usługi </th>
										<th class="th-2"> PLN / j.m. </th>
										<th class="th-3"> ilość </th>
									</tr>
								</thead>
								<?php
									if($analiza_BHP) {
										echo '<tr><td class="td-1"> Analiza stanu bezpieczeństwa i higieny pracy. Raport roczny. </td>
										<td class="td-2">(1400,00 PLN/szt):</td><td class="td-3">'.$analiza_BHP.'</td></tr>';
									} 
									if($ORZ_nowa_dok) {
										echo '<tr><td class="td-1"> Ocena ryzyka zawodowego. Wykonanie nowej dokumentacji. </td>
										<td class="td-2">(240,00 PLN/szt):</td><td class="td-3">'.$ORZ_nowa_dok.'</td></tr>';
									} 
									if($ORZ_aktualizacja) {
										echo '<tr><td class="td-1"> Ocena ryzyka zawodowego. Aktualizacja istniejącej dokumentacji. </td>
										<td class="td-2">(160,00 PLN/szt):</td><td class="td-3">'.$ORZ_aktualizacja.'</td></tr>';
									} 
									if($ocena_warunkow_monitor) {
										echo '<tr><td class="td-1"> Ocena warunków pracy przy monitorach ekranowych. </td> 
										<td class="td-2">(160,00 PLN/szt):</td><td class="td-3">'.$ocena_warunkow_monitor.'</td></tr>';
									} 
									if($protok_ustal_przycz_wyp) {
										echo '<tr><td class="td-1"> Protokół z ustalenia okoliczności i przyczyn wypadku przy pracy. </td>
										<td class="td-2">(450,00 PLN/szt):</td><td class="td-3">'.$protok_ustal_przycz_wyp.'</td></tr>';
									} 
									if($karta_wyp_w_drodze) {
										echo '<tr><td class="td-1"> Karta wypadku w drodze do pracy lub z pracy. </td>
										<td class="td-2">(380,00 PLN/szt):</td><td class="td-3">'.$karta_wyp_w_drodze.'</td></tr>';
									} 
									if($wypadek_w_delegacji) {
										echo '<tr><td class="td-1"> Dokumentacja wypadkowa dla wypadków w delegacji (zrównane). </td>
										<td class="td-2">(520,00 PLN/szt):</td><td class="td-3">'.$wypadek_w_delegacji.'</td></tr>';
									} 
									if($rejestr_wypadkow) {
										echo '<tr><td class="td-1"> Rejestr wypadków przy pracy. </td>
										<td class="td-2">(180,00 PLN/szt):</td><td class="td-3">'.$rejestr_wypadkow.'</td></tr>';
									} 
									if($IBWR) {
										echo '<tr><td class="td-1">Instrukcja bezpiecznego wykonania robót (IBWR). </td>
										<td class="td-2">(700,00 PLN/szt):</td><td class="td-3">'.$IBWR.'</td></tr>';
									} 
									if($plan_BIOZ) {
										echo '<tr><td class="td-1"> Plan bezpieczeństwa i ochrony zdrowia (Plan BIOZ). </td>
										<td class="td-2">(1600,00 PLN/szt):</td><td class="td-3">'.$plan_BIOZ.'</td></tr>';
									} 
									if($reg_pracy) {
										echo '<tr><td class="td-1"> Regulamin pracy. </td>
										<td class="td-2">(390,00 PLN/szt):</td><td class="td-3">'.$reg_pracy.'</td></tr>';
									} 
									if($sprawozd_komis_bhp) {
										echo '<tr><td class="td-1"> Sprawozdanie z posiedzeń komisji BHP (dla zakładu pracy pow. 250 pracowników). </td>
										<td class="td-2">(250,00 PLN/szt):</td><td class="td-3">'.$sprawozd_komis_bhp.'</td></tr>';
									} 
									if($wykaz_os_pierw_pom) {
										echo '<tr><td class="td-1"> Wykaz osób wyznaczonych do udzielenia pierwszej pomocy. </td>
										<td class="td-2">(90,00 PLN/szt):</td><td class="td-3">'.$wykaz_os_pierw_pom.'</td></tr>';
									} 
									if($wykaz_os_gasz_pozar) {
										echo '<tr><td class="td-1"> Wykaz osób wyznaczonych do zwalczania pożarów oraz osób <br/>do prowadzenia ewakuacji zakladu. </td>
										<td class="td-2">(90,00 PLN/szt):</td><td class="td-3">'.$wykaz_os_gasz_pozar.'</td></tr>';
									} 
									if($prace_dla_2_os) {
										echo '<tr><td class="td-1"> Wykaz prac które powinny być wykonywane przez co najmniej 2 osoby. </td>
										<td class="td-2">(90,00 PLN/szt):</td><td class="td-3">'.$prace_dla_2_os.'</td></tr>';
									} 
									if($wykaz_prac_szczeg_niebezp) {
										echo '<tr><td class="td-1"> Wykaz prac szczególnie niebezpiecznych występujących w zakaładzie pracy. </td>
										<td class="td-2">(190,00 PLN/szt):</td><td class="td-3">'.$wykaz_prac_szczeg_niebezp.'</td></tr>';
									} 
									if($wykaz_prac_szkod_dla_kob) {
										echo '<tr><td class="td-1"> Wykaz prac szczególnie uciążliwych i szkodliwych dla zdrowia kobiet. <br/>Załącznik regulaminu. </td>
										<td class="td-2">(190,00 PLN/szt):</td><td class="td-3">'.$wykaz_prac_szkod_dla_kob.'</td></tr>';
									} 
									if($wykaz_prac_wzbr_mlod) {
										echo '<tr><td class="td-1"> Wykaz prac wzbronionych młodocianym. Załącznik regulaminu. </td>
										<td class="td-2">(90,00 PLN/szt):</td><td class="td-3">'.$wykaz_prac_wzbr_mlod.'</td></tr>';
									} 
									if($udziel_upowaznienia) {
										echo '<tr><td class="td-1"> Wykaz poleceniodawców określający zakres udzielonego im upoważnienia. </td>
										<td class="td-2">(250,00 PLN/szt):</td><td class="td-3">'.$udziel_upowaznienia.'</td></tr>';
									} 
									if($szkol_z_gasz_pozarow) {
										echo '<tr><td class="td-1"> Szkolenie dla pracowników z zakresu przeciwdziałania powstawania pożarów. </td>
										<td class="td-2">(90,00 PLN/szt):</td><td class="td-3">'.$szkol_z_gasz_pozarow.'</td></tr>';
									} 
									if($szkol_z_ewakuacji) {
										echo '<tr><td class="td-1"> Szkolenie dla pracowników z zakresu prowadzenia ewakuacji w zakładzie pracy. </td>
										<td class="td-2">(70,00 PLN/szt):</td><td class="td-3">'.$szkol_z_ewakuacji.'</td></tr>';
									} 
									if($probna_ewak) {
										echo '<tr><td class="td-1"> Przeprowadzenie próbnej ewakuacji budynku (1 raz na 2 lata). </td>
										<td class="td-2">(450,00 PLN/szt):</td><td class="td-3">'.$probna_ewak.'</td></tr>';
									} 
									if($szkol_obslugi_csp) {
										echo '<tr><td class="td-1"> Szkolenie dla pracowników portiernii, dozorców 24h z zakresu obsługi central pożarowych. </td>
										<td class="td-2">(80,00 PLN/szt):</td><td class="td-3">'.$szkol_obslugi_csp.'</td></tr>';
									} 
									if($rej_szkol_bhp) {
										echo '<tr><td class="td-1"> Rejestr szkoleń z dziedziny BHP. Prowadzenie dokumentacji. </td>
										<td class="td-2">(190,00 PLN/szt):</td><td class="td-3">'.$rej_szkol_bhp.'</td></tr>';
									} 
									if($szkol_bhp_wstepne) {
										echo '<tr><td class="td-1"> Szkolenie wstępne BHP dla pracownika (w przypadku nowozatrudnionych). </td>
										<td class="td-2">(150,00 PLN/szt):</td><td class="td-3">'.$szkol_bhp_wstepne.'</td></tr>';
									} 
									if($szkol_bhp_okr_kier_prac) {
										echo '<tr><td class="td-1"> Szkolenie z dziedziny BHP okresowe dla pracodawców i kierujących pracownikami. </td>
										<td class="td-2">(300,00 PLN/szt):</td><td class="td-3">'.$szkol_bhp_okr_kier_prac.'</td></tr>';
									} 
									if($szkol_bhp_okr_adm) {
										echo '<tr><td class="td-1"> Szkolenie z dziedziny BHP okresowe dla pracowników administracyjno-biurowych. </td>
										<td class="td-2">(60,00 PLN/szt):</td><td class="td-3">'.$szkol_bhp_okr_adm.'</td></tr>';
									} 
									if($szkol_bhp_okr_inz_tech) {
										echo '<tr><td class="td-1"> Szkolenie z dziedziny BHP okresowe dla pracowników inżynieryjno-technicznych. </td>
										<td class="td-2">(120,00 PLN/szt):</td><td class="td-3">'.$szkol_bhp_okr_inz_tech.'</td></tr>';
									} 
									if($szkol_bhp_okr_robotn) {
										echo '<tr><td class="td-1"> Szkolenie z dziedziny BHP okresowe dla pracowników robotniczych. </td>
										<td class="td-2">(60,00 PLN/szt):</td><td class="td-3">'.$szkol_bhp_okr_robotn.'</td></tr>';
									} 
									if($szkol_bhp_okr_prac_sluzby_bhp) {
										echo '<tr><td class="td-1"> Szkolenie z dziedziny BHP okresowe dla pracowników służby BHP. </td>
										<td class="td-2">(480,00 PLN/szt):</td><td class="td-3">'.$szkol_bhp_okr_prac_sluzby_bhp.'</td></tr>';
									} 
									if($szkol_bhp_okr_prac_niebezp_czynn) {
										echo '<tr><td class="td-1"> Szkolenie z dziedziny BHP okresowe dla pracowników wykonujących zadania <br>
										szczególnie narażone na działanie niebezpiecznych czynników. </td>
										<td class="td-2">(90,00 PLN/szt):</td><td class="td-3">'.$szkol_bhp_okr_prac_niebezp_czynn.'</td></tr>';

									}  
									echo '<tr><td class="td-1">SUMA</td><td class="td-2">'.$suma.' PLN</td><td class="td-3"></tr>';
									if(isset ($sumaZRabatem)) {
										echo '<tr><td class="td-1">SUMA Z RABATEM </td><td class="td-2">'.$sumaZRabatem.' PLN</td><td class="td-3"></tr>';
									}
								?>
							</table>
							<div>
								<div class="col-6 float-left">
									<a href="offer-calculator-hse.php">Powrót do kalkulatora ofert</a>
									<input id="viewPdf" class="non-printable pt-0 mt-0 pb-0 mb-0 d-none" type="button" onclick="printDiv('printableArea')" value="Podgląd pdf" />
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php	
					if(isset($contract)) {
					$orderCounter = 1;
				?>
				<section class="timetable">
					<div class="row-content bg-con-1 service-offer pt-5 pb-5">
						<div class="attachment printableArea" >
							<h5 class="headline text-center pt-4 pb-4"> Załącznik nr 2. Harmonogram prac. </h5>
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
								if($analiza_BHP) {
									for($i=0; $i<$analiza_BHP; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Analiza stanu bezpieczeństwa i higieny pracy. Raport roczny. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
										echo '</td></tr>';
										$orderCounter += 1;
									}								
								} 
								if($ORZ_nowa_dok) {
									for($i=0; $i<$ORZ_nowa_dok; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Ocena ryzyka zawodowego. Wykonanie nowej dokumentacji. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
										echo '</td></tr>';
										$orderCounter += 1;
									}	
								} 
								if($ORZ_aktualizacja) {
									for($i=0; $i<$ORZ_aktualizacja; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Ocena ryzyka zawodowego. Aktualizacja istniejącej dokumentacji. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
										echo '</td></tr>';
										$orderCounter += 1;
									}	
								} 
								if($ocena_warunkow_monitor) {
									for($i=0; $i<$ocena_warunkow_monitor; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Ocena warunków pracy przy monitorach ekranowych. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($protok_ustal_przycz_wyp) {
									for($i=0; $i<$protok_ustal_przycz_wyp; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Protokół z ustalenia okoliczności i przyczyn wypadku przy pracy. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($karta_wyp_w_drodze) {
									for($i=0; $i<$karta_wyp_w_drodze; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2">Karta wypadku w drodze do pracy lub z pracy. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($wypadek_w_delegacji ) {
									for($i=0; $i<$wypadek_w_delegacji; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Dokumentacja wypadkowa dla wypadków w delegacji (zrównane). </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($rejestr_wypadkow ) {
									for($i=0; $i<$rejestr_wypadkow; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Rejestr wypadków przy pracy. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';											
										$orderCounter += 1;
									}
								} 
								if($IBWR ) {
									for($i=0; $i<$IBWR; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Instrukcja bezpiecznego wykonania robót (IBWR). </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($plan_BIOZ) {
									for($i=0; $i<$plan_BIOZ; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Plan bezpieczeństwa i ochrony zdrowia (Plan BIOZ). </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								}  
								if($reg_pracy) {
									for($i=0; $i<$reg_pracy; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Regulamin pracy. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($sprawozd_komis_bhp) {
									for($i=0; $i<$sprawozd_komis_bhp; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2">Sprawozdanie z posiedzeń komisji BHP (dla zakładu pracy pow. 250 pracowników). </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($wykaz_os_pierw_pom) {
									for($i=0; $i<$wykaz_os_pierw_pom; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Wykaz osób wyznaczonych do udzielenia pierwszej pomocy. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($wykaz_os_gasz_pozar) {
									for($i=0; $i<$wykaz_os_gasz_pozar; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Wykaz osób wyznaczonych do zwalczania pożarów oraz osób <br/>do prowadzenia ewakuacji zakladu. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($prace_dla_2_os) {
									for($i=0; $i<$prace_dla_2_os; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Wykaz prac które powinny być wykonywane przez co najmniej 2 osoby. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($wykaz_prac_szczeg_niebezp) {
									for($i=0; $i<$wykaz_prac_szczeg_niebezp; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Wykaz prac szczególnie niebezpiecznych występujących w zakaładzie pracy. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($wykaz_prac_szkod_dla_kob) {
									for($i=0; $i<$wykaz_prac_szkod_dla_kob; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Wykaz prac szczególnie uciążliwych i szkodliwych dla zdrowia kobiet. <br/>Załącznik regulaminu. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($wykaz_prac_wzbr_mlod) {
									for($i=0; $i<$wykaz_prac_wzbr_mlod; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Wykaz prac wzbronionych młodocianym. Załącznik regulaminu. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($udziel_upowaznienia) {
									for($i=0; $i<$udziel_upowaznienia; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Wykaz poleceniodawców określający zakres udzielonego im upoważnienia. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								}
								if($szkol_z_gasz_pozarow) {
									for($i=0; $i<$szkol_z_gasz_pozarow; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie dla pracowników z zakresu przeciwdziałania powstawania pożarów. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_z_ewakuacji) {
									for($i=0; $i<$szkol_z_ewakuacji; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie dla pracowników z zakresu prowadzenia ewakuacji w zakładzie pracy. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($probna_ewak) {
									for($i=0; $i<$probna_ewak; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Przeprowadzenie próbnej ewakuacji budynku. (1 raz na 2 lata). </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_obslugi_csp) {
									for($i=0; $i<$szkol_obslugi_csp; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie dla pracowników portiernii, dozorców 24h z zakresu obsługi central pożarowych. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($rej_szkol_bhp) {
									for($i=0; $i<$rej_szkol_bhp; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Rejestr szkoleń z dziedziny BHP. Prowadzenie dokumentacji. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_bhp_wstepne) {
									for($i=0; $i<$szkol_bhp_wstepne; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie wstępne BHP dla pracownika (w przypadku nowozatrudnionych). </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_bhp_okr_kier_prac) {
									for($i=0; $i<$szkol_bhp_okr_kier_prac; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracodawców i kierujących pracownikami. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_bhp_okr_adm) {
									for($i=0; $i<$szkol_bhp_okr_adm; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników administracyjno-biurowych. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_bhp_okr_inz_tech) {
									for($i=0; $i<$szkol_bhp_okr_inz_tech; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników inżynieryjno-technicznych. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_bhp_okr_robotn) {
									for($i=0; $i<$szkol_bhp_okr_robotn; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników robotniczych. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_bhp_okr_prac_sluzby_bhp) {
									for($i=0; $i<$szkol_bhp_okr_prac_sluzby_bhp; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników służby BHP. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								if($szkol_bhp_okr_prac_niebezp_czynn) {
									for($i=0; $i<$szkol_bhp_okr_prac_niebezp_czynn; $i++) {
										echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników wykonujących zadania <br>
										szczególnie narażone na działanie niebezpiecznych czynników. </td><td class="td-3">';
										echo $orderCounter === 1 ? '<input type="date" id="firstInputToCopyDate">' : '<input class="inputsNotToCopy" type="date">';	
										echo '</td></tr>';
										$orderCounter += 1;
									}
								} 
								?>
							</table>
						</div>
						<div class="actions buttons text-center mt-5">
							<div>
								<input class="non-printable btn btn-light mr-3" type="button" onclick="printDiv('printableArea')" value="Podgląd pdf" />
							</div>
						</div>
					</div>
				</section>
			<?php						
				}
			?>
			<?php 
				require('footer.php');
			?>
		</main>
	</body>
	<?php 
		if(!empty($_POST["summary"])) {
			echo '<script>setTimeout(function(){document.querySelector("#viewPdf").click()}, 500);</script>';
		}
	?>
</html>