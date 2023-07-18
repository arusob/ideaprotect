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
		<script defer src="../js/bootstrap/bootstrap.min.js"></script>
		<script defer src="../js/print-document.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<?php 
				if(!isset($_POST['checkboxRabat']) || $_POST['checkboxRabat'] != 'on' || !empty($_POST['rabat'])) {
					array_pop($_POST);
					array_pop($_POST);
				}
				
				foreach($_POST as $serviceName => $serviceCount) {
					echo $serviceCount . '<br>';
					if(!empty($serviceCount) && !intval($serviceCount) && $serviceCount != '') {
					echo '<h1><a href="offer-calculator-fp.php">Wprowadzono nieprawidłowe wartości do formularza. Wróć do formularza usupełnić ponownie poprawnymi wartościami.</a></h1>';
					} 
				} 
				
				// 1-10
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
				//11-16
				$gasnica_6 = !empty($_POST['gasnica_6']) ? $_POST['gasnica_6'] : 0;
				$gasnica_4 = !empty($_POST['gasnica_4']) ? $_POST['gasnica_4'] : 0;
				$gasnica_2 = !empty($_POST['gasnica_2']) ? $_POST['gasnica_2'] : 0;
				$gasnica_5lat = !empty($_POST['gasnica_5lat']) ? $_POST['gasnica_5lat'] : 0;
				$gasnicace_UDT = !empty($_POST['gasnicace_UDT']) ? $_POST['gasnicace_UDT'] : 0;
				$agregaty = !empty($_POST['agregaty']) ? $_POST['agregaty'] : 0;
				// 17-22
				$oddym_okna = !empty($_POST['oddym_okna']) ? $_POST['oddym_okna'] : 0;
				$wnetylatory_oddym = !empty($_POST['wnetylatory_oddym']) ? $_POST['wnetylatory_oddym'] : 0;
				$klapy_odcin_w_kanalach = !empty($_POST['klapy_odcin_w_kanalach']) ? $_POST['klapy_odcin_w_kanalach'] : 0;
				$drzwi_ewakuac = !empty($_POST['drzwi_ewakuac']) ? $_POST['drzwi_ewakuac'] : 0;
				$drzwi_oddziel_pozarowego = !empty($_POST['drzwi_oddziel_pozarowego']) ? $_POST['drzwi_oddziel_pozarowego'] : 0;
				$bramy_oddziel_pozarowego = !empty($_POST['bramy_oddziel_pozarowego']) ? $_POST['bramy_oddziel_pozarowego'] : 0;
				// 23-26
				$syst_sygn_poz = !empty($_POST['syst_sygn_poz']) ? $_POST['syst_sygn_poz'] : 0;
				$czujki = !empty($_POST['czujki']) ? $_POST['czujki'] : 0;
				$reczny_ostrzeg_pozar = !empty($_POST['reczny_ostrzeg_pozar']) ? $_POST['reczny_ostrzeg_pozar'] : 0;
				$dzwiek_syst_ostrz = !empty($_POST['dzwiek_syst_ostrz']) ? $_POST['dzwiek_syst_ostrz'] : 0;
				// 27-31
				$osw_awar = !empty($_POST['osw_awar']) ? $_POST['osw_awar'] : 0;
				$osw_ewak = !empty($_POST['osw_ewak']) ? $_POST['osw_ewak'] : 0;
				$ppoz_wyl_pradu = !empty($_POST['ppoz_wyl_pradu']) ? $_POST['ppoz_wyl_pradu'] : 0;
				$syst_detekcji_gazow = !empty($_POST['syst_detekcji_gazow']) ? $_POST['syst_detekcji_gazow'] : 0;
				$masa_izolacyjna = !empty($_POST['masa_izolacyjna']) ? $_POST['masa_izolacyjna'] : 0;
				// ---------------------------------------------------------------------------------------------------------
				// 1-9
				$IBP_ZL1 = !empty($_POST['IBP_ZL1']) ? $_POST['IBP_ZL1'] : 0;
				$IBP_ZL2 = !empty($_POST['IBP_ZL2']) ? $_POST['IBP_ZL2'] : 0;
				$IBP_ZL3 = !empty($_POST['IBP_ZL3']) ? $_POST['IBP_ZL3'] : 0;
				$IBP_ZL5 = !empty($_POST['IBP_ZL5']) ? $_POST['IBP_ZL5'] : 0;
				$IBP_PM = !empty($_POST['IBP_PM']) ? $_POST['IBP_PM'] : 0;
				$IBP_IN = !empty($_POST['IBP_IN']) ? $_POST['IBP_IN'] : 0;
				$analiza_stanu_ppoz = !empty($_POST['analiza_stanu_ppoz']) ? $_POST['analiza_stanu_ppoz'] : 0;
				$matryca_wysterowan = !empty($_POST['matryca_wysterowan']) ? $_POST['matryca_wysterowan'] : 0;
				$plan_ewakuacji = !empty($_POST['plan_ewakuacji']) ? $_POST['plan_ewakuacji'] : 0;
				// 10-13
				$OZW = !empty($_POST['OZW']) ? $_POST['OZW'] : 0;
				$ORW = !empty($_POST['ORW']) ? $_POST['ORW'] : 0;
				$DZPW = !empty($_POST['DZPW']) ? $_POST['DZPW'] : 0;
				$SZW = !empty($_POST['SZW']) ? $_POST['SZW'] : 0;
				// ---------------------------------------------------------------------------------------------------------
				// 1-6
				$montaz_hydr_podziemny_DN_80 = !empty($_POST['montaz_hydr_podziemny_DN_80']) ? $_POST['montaz_hydr_podziemny_DN_80'] : 0;
				$montaz_hydr_nadziemny_DN_80 = !empty($_POST['montaz_hydr_nadziemny_DN_80']) ? $_POST['montaz_hydr_nadziemny_DN_80'] : 0;
				$montaz_hydr_nadziemny_DN_100 = !empty($_POST['montaz_hydr_nadziemny_DN_100']) ? $_POST['montaz_hydr_nadziemny_DN_100'] : 0;
				$montaz_hydr_wew_DN_25 = !empty($_POST['montaz_hydr_wew_DN_25']) ? $_POST['montaz_hydr_wew_DN_25'] : 0;
				$montaz_hydr_wew_DN_33 = !empty($_POST['montaz_hydr_wew_DN_33']) ? $_POST['montaz_hydr_wew_DN_33'] : 0;
				$montaz_hydr_wew_DN_52 = !empty($_POST['montaz_hydr_wew_DN_52']) ? $_POST['montaz_hydr_wew_DN_52'] : 0;
				// 7-12
				$montaz_czujka_poz_staly_do_350 = !empty($_POST['montaz_czujka_poz_staly_do_350']) ? $_POST['montaz_czujka_poz_staly_do_350'] : 0;
				$montaz_czujka_poz_staly_pow_350 = !empty($_POST['montaz_czujka_poz_staly_pow_350']) ? $_POST['montaz_czujka_poz_staly_pow_350'] : 0;
				$montaz_czujka_poz_staly_pow_550 = !empty($_POST['montaz_czujka_poz_staly_pow_550']) ? $_POST['montaz_czujka_poz_staly_pow_550'] : 0;
				$montaz_czujka_poz_podwiesz_pow_350 = !empty($_POST['montaz_czujka_poz_podwiesz_pow_350']) ? $_POST['montaz_czujka_poz_podwiesz_pow_350'] : 0;
				$montaz_czujka_poz_staly_pow_550 = !empty($_POST['montaz_czujka_poz_staly_pow_550']) ? $_POST['montaz_czujka_poz_staly_pow_550'] : 0;
				$montaz_CSP = !empty($_POST['montaz_CSP']) ? $_POST['montaz_CSP'] : 0;
				// 13-15
				$montaz_lampa_osw_awar = !empty($_POST['montaz_lampa_osw_awar']) ? $_POST['montaz_lampa_osw_awar'] : 0;
				$montaz_lampa_osw_ewak = !empty($_POST['montaz_lampa_osw_ewak']) ? $_POST['montaz_lampa_osw_ewak'] : 0;
				$montaz_masy_ochronnej = !empty($_POST['montaz_masy_ochronnej']) ? $_POST['montaz_masy_ochronnej'] : 0;

				$suma = 
				//1-10
				(70.00 * $hydrant_zewn_podz_DN80) + (65.00 * $hydrant_zewn_nadzie_DN100) + (60.00 * $hydrant_zewn_nadzie_DN80) +  
				(55.00 * $hydrant_wewn_DN52) + (50.00 * $hydrant_wewn_DN33) + (55.00 * $hydrant_wewn_DN25) + (50.00 * $weze_dyrant_5_lat) + 
				(00.50 * $inst_trysk_wodna) + (600.00 * $zest_hydrofor_wewn) + (700.00 * $zest_hydrofor_zewewn) +
				//11-16
				(10.00 * $gasnica_6) + (8.00 * $gasnica_4) + (7.00 * $gasnica_2) + (50.00 * $gasnica_5lat) + 
				(90.00 * $gasnicace_UDT) + (80.00 * $agregaty) +
				// 17-22
				(35.00 * $oddym_okna) + (35.00 * $wnetylatory_oddym) + (35.00 * $klapy_odcin_w_kanalach) + (55.00 * $drzwi_ewakuac) + 
				(28.00 * $drzwi_oddziel_pozarowego) + (40.00 * $bramy_oddziel_pozarowego) +
				// 23-26
				(895.00 * $syst_sygn_poz) + (20.00 * $czujki) + (80.00 * $reczny_ostrzeg_pozar) + (500.00 * $dzwiek_syst_ostrz) +
				// 27-31
				(35.00 * $osw_awar) + (35.00 * $osw_ewak) + (100.00 * $ppoz_wyl_pradu) + (35.00 * $syst_detekcji_gazow) + 
				(10.00 * $masa_izolacyjna);
				// ---------------------------------------------------------------------------------------------------------
				// 1-9
				(2000.00 * $IBP_ZL1) + (2000.00 * $IBP_ZL2) + (2200.00 * $IBP_ZL3) + (2200.00 * $IBP_ZL5) + (2200.00 * $IBP_PM) + 
				(2000.00 * $IBP_IN) + (900.00 * $analiza_stanu_ppoz) + (1200.00 * $matryca_wysterowan) + (950.00 * $plan_ewakuacji) + 
				// 10-13
				(2950.00 * $OZW) + (1950.00 * $ORW) + (2950.00 * $DZPW) + (1950.00 * $SZW) +
				// ---------------------------------------------------------------------------------------------------------
				// 1-6
				(8000.00 * $montaz_hydr_podziemny_DN_80) + (8400.00 * $montaz_hydr_nadziemny_DN_80) + (8600.00 * $montaz_hydr_nadziemny_DN_100) + 
				(1600.00 * $montaz_hydr_wew_DN_25) + (1800.00 * $montaz_hydr_wew_DN_33) + (2200.00 * $montaz_hydr_wew_DN_52) + 
				// 7-12
				(140.00 * $montaz_czujka_poz_staly_do_350) + (160.00 * $montaz_czujka_poz_staly_pow_350) + (180.00 * $montaz_czujka_poz_staly_pow_550) + 
				(170.00 * $montaz_czujka_poz_podwiesz_pow_350) + (190.00 * $montaz_czujka_poz_staly_pow_550) + (120.00 * $montaz_CSP) + 
				// 13-15
				(140.00 * $montaz_lampa_osw_awar) + (140.00 * $montaz_lampa_osw_ewak) + (70.00 * $montaz_masy_ochronnej);

				if(isset($_POST['checkboxRabat']) && $_POST['checkboxRabat'] == 'on' && !empty($_POST['rabat'])) {
					$sumaZRabatem = $suma - $suma * ($_POST['rabat']/100);
				}
				

				if(!empty($_POST["contract"])) {
					?>
						<section class="calculator-page summary-page contract-page">
						<div class="row-content bg-con-1 service-offer pt-5 pb-5">

							<div class="calc-result printableArea" >
								<h3 class="headline text-center"> Umowa na wykonanie usług <br>z zakresu ochrony przeciwpożarowej </h3>
								<div class="distance"></div>
								<table  class="col-lg-12 summary" cellpadding="5" cellspacing="10">

								<div class="white-paper">
								
								<!-- | SEKCJA | -->
								<div class="col-lg-12 fourth-section">
									<span> Zawarta w miejscowości </span>
									<input type="text" name="protocolNumberThird" >
									<span> w dniu  </span>
									<input type="text" name="protocolNumberThird" >
									<div>
										<span> pomiędzy :  </span>
										<input type="text" name="protocolNumberThird" >
										<input type="text" name="protocolNumberThird" >
										<input type="text" name="protocolNumberThird" >
										<span> zwanym "Zamawiającym" :  </span>
									</div>
									<div>
										<span> a :  </span>
										<input type="text" name="protocolNumberThird" >
										<input type="text" name="protocolNumberThird" >
										<input type="text" name="protocolNumberThird" >
										<span> zwanym "Wykonawcą" :  </span>
									</div>

								</div>

								<!-- | SEKCJA 5 | -->
								<div class="col-lg-12 text-center fifth-section">
									<textarea type="text" name="protocolNumberFirst" rows="3" columns="24" placeholder=".............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."></textarea>
									<label class="mb-0 pb-3 mt-0 pt-0">(oznaczenie pracodawcy lub innej osoby działającej w imieniu pracodawcy)</label>
								</div>

								<!-- | SEKCJA 6 | -->
								<div class="col-lg-12 sixth-section">
									<span> a (Zleceniobiorcą) : </span>
								</div>

								<!-- | SEKCJA 7 | -->
								<div class="col-lg-12 text-center seventh-section">
									<textarea type="text" name="protocolNumberFirst" rows="3" columns="24" placeholder=".............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."></textarea>
									<label class="mb-0 pb-3 mt-0 pt-0">(scharakteryzować następstwa wypadku - rodzaj uszkodzeń organizmu)</label>
								</div>
								

							</div>
	
								</table>

							</div>
						</div>
						</section>


					<?php
					
				}

				?>
					<!--| CONTENT |-->
					<section class="calculator-page summary-page project-coast">
						<div class="row-content bg-con-1 service-offer pt-1 pb-1">
							<div class="calc-result printableArea" >
								<h5 class="headline text-center"> Zestawienie kosztorysu usługowego </h5>
								<div class="distance"></div>
								<table  class="col-lg-12 summary" cellpadding="5" cellspacing="10">
									<thead>
										<tr>
											<th class="th-1"> </th>
											<th class="th-2"> Nazwa usługi </th>
											<th class="th-3"> PLN / j.m. </th>
											<th class="th-4"> ilość </th>
										</tr>
									</thead>
								<?php
									// Hydranty, zestawy hydroforowe i pompownie.
									//1
									if($hydrant_zewn_podz_DN80) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty zewnętrzne podziemne DN 80. Badanie wydajności i ciśnienia.</td>
										<td class="td-3">(70,00 PLN/szt):</td><td class="td-4">'.$hydrant_zewn_podz_DN80.'</td></tr>';
									} //2
									if($hydrant_zewn_nadzie_DN100) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty zewnętrzne nadziemne DN 100. Badanie wydajności i ciśnienia.</td>
										<td class="td-3">(65,00 PLN/szt):</td><td class="td-4">'.$hydrant_zewn_nadzie_DN100.'</td></tr>';
									} //3
									if($hydrant_zewn_nadzie_DN80) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty zewnętrzne nadziemne DN 80. Badanie wydajności i ciśnienia.</td>
										<td class="td-3">(60,00 PLN/szt):</td><td class="td-4">'.$hydrant_zewn_nadzie_DN80.'</td></tr>';
									} //4
									if($hydrant_wewn_DN52) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 52. Badanie wydajności i ciśnienia.</td> 
										<td class="td-3">(55,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN52.'</td></tr>';
									} //5
									if($hydrant_wewn_DN33) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 33. Badanie wydajności i ciśnienia.</td>
										<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN33.'</td></tr>';
									} //6
									if($hydrant_wewn_DN25 ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 25. Badanie wydajności i ciśnienia.</td>
										<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN25.'</td></tr>';
									} //7
									if($weze_dyrant_5_lat ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Badanie okresowe 5-cio letnie. Badanie ciśnieniowe węży hydrantów wewnętrznych.</td>
										<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$weze_dyrant_5_lat.'</td></tr>';
									} //8
									if($inst_trysk_wodna ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Przegląd okresowy instalacji tryskaczowej (wodnej).</td>
										<td class="td-3">(0,50 PLN/m2):</td><td class="td-4">'.$inst_trysk_wodna.'</td></tr>';
									} //9
									if($zest_hydrofor_wewn ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Przegląd okresowy zestawu hydroforowego do zasilania inst. ppoż. wewnątrz budynku<br>
										(np. zasilające hydranty wewnętrzne, tryskacze).</td>
										<td class="td-3">(600,00 PLN/zestaw):</td><td class="td-4">'.$zest_hydrofor_wewn.'</td></tr>';
									} //10
									if($zest_hydrofor_zewewn) {
										echo '<tr><td class="td-1"></td><td class="td-2">Przegląd okresowy pompowni do zasilania instalacji przeciwpożarowych zewnętrznych<br>
										(np. pompownie zasilające hydranty zewnętrzne).</td>
										<td class="td-3">(700,00 PLN/zestaw):</td><td class="td-4">'.$zest_hydrofor_zewewn.'</td></tr>';
									} 
									// Gaśnice, agregaty gaśnicze.
									//11
									if($gasnica_6) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy gaśnic (proszkowe, śniegowe, pianowe) 6kg. </td>
										<td class="td-3">(10,00 PLN/szt.):</td><td class="td-4">'.$gasnica_6.'</td></tr>';
									} //12
									if($gasnica_4) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy gaśnic (proszkowe, śniegowe, pianowe) 4kg. </td>
										<td class="td-3">(8,00 PLN/szt.):</td><td class="td-4">'.$gasnica_4.'</td></tr>';
									} //13
									if($gasnica_2) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy gaśnic (proszkowe, śniegowe, pianowe) 2kg i mniejsze. </td>
										<td class="td-3">(7,00 PLN/szt.):</td><td class="td-4">'.$gasnica_2.'</td></tr>';
									} //14
									if($gasnica_5lat) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Legalizacja gaśnic (5-cio letnia). </td>
										<td class="td-3">(50,00 PLN/szt.):</td><td class="td-4">'.$gasnica_5lat.'</td></tr>';
									} //15
									if($gasnicace_UDT) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Legalizacja UDT dla zbiorników gaśnic. </td>
										<td class="td-3">(90,00 PLN/szt.):</td><td class="td-4">'.$gasnicace_UDT.'</td></tr>';
									} //16
									if($agregaty) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy agregatów gaśniczych. </td>
										<td class="td-3">(80,00 PLN/szt.):</td><td class="td-4">'.$agregaty.'</td></tr>';
									} 
									// Systemy oddymiania, drzwi przeciwpożarowe, kurtyny, grodzie.
									//17
									if($oddym_okna) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu oddymiania (okna oddymiające dachowe i ścienne). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$oddym_okna.'</td></tr>';
									} //18
									if($wnetylatory_oddym) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu oddymiania (wentylatory oddymiające). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$wnetylatory_oddym.'</td></tr>';
									} //19
									if($klapy_odcin_w_kanalach) {
										echo '<tr><td class="td-1"></td><td class="td-2">  Przegląd okresowy systemu oddymiania (klapy odcinające w kanałach wentylacyjnych). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$klapy_odcin_w_kanalach.'</td></tr>';
									} //20
									if($drzwi_ewakuac) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy drzwi ewakuacyjnych (ze zwalniaczami antypanicznymi <br>i dostępem chronionym). </td>
										<td class="td-3">(55,00 PLN/szt.):</td><td class="td-4">'.$drzwi_ewakuac.'</td></tr>';
									} //21
									if($drzwi_oddziel_pozarowego) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy drzwi oddzielenia pożarowego (stalowe, drewniane, profilowe). </td>
										<td class="td-3">(28,00 PLN/szt.):</td><td class="td-4">'.$drzwi_oddziel_pozarowego.'</td></tr>';
									} //22
									if($bramy_oddziel_pozarowego) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy bram, kurtyn oddzielenia pożarowego. </td>
										<td class="td-3">(40,00 PLN/szt.):</td><td class="td-4">'.$bramy_oddziel_pozarowego.'</td></tr>';
									} 
									// System sygnalizacji pożarowej. Dźwiękowy system ostrzegawczy.
									//23
									if($syst_sygn_poz) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu sygnalizacji pożarowej. Centrale sygnalizacji pożaru.<br> 
										(Polon-Alfa, Bosh, Schrack, Satel, Inim Electronics, Awex, inne). </td>
										<td class="td-3">(895,00/szt.):</td><td class="td-4">'.$syst_sygn_poz.'</td></tr>';
									} //24
									if($czujki) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy instalacji sygnalizacji pożarowej. Czujki wykrywające pożar <br>(dymu, ciepła, liniowe). </td>
										<td class="td-3">(20,00/szt.):</td><td class="td-4">'.$czujki.'</td></tr>';
									} //25
									if($reczny_ostrzeg_pozar) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy ręcznego ostrzegacza pożarowego. </td>
										<td class="td-3">(80,00/szt.):</td><td class="td-4">'.$reczny_ostrzeg_pozar.'</td></tr>';
									} //26
									if($dzwiek_syst_ostrz) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy dźwiękowego systemu ostrzegawczego. </td>
										<td class="td-3">(500,00/szt.):</td><td class="td-4">'.$dzwiek_syst_ostrz.'</td></tr>';
									} 
									// Oświetlenie awaryjne i ewakuacyjne. Przeciwpożarowy wyłącznik prądu.
									//27
									if($osw_awar) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy instalacji oświetlenia awaryjnego. </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$osw_awar.'</td></tr>';
									} //28
									if($osw_ewak) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy instalacji oświetlenia ewakuacyjnego. </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$osw_ewak.'</td></tr>';
									} //29
									if($ppoz_wyl_pradu) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy przeciwpożarowego wyłącznika prądu. </td>
										<td class="td-3">(100,00 PLN/szt.):</td><td class="td-4">'.$ppoz_wyl_pradu.'</td></tr>';
									} //30
									if($syst_detekcji_gazow) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu detekcji gazów (garaże, czujniki CO i LPG). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$syst_detekcji_gazow.'</td></tr>';
									} //31
									if($masa_izolacyjna) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd konserwacyjny biernego systemu ochrony przeciwpożarowej <br>
										(np. masy izolacyjnej przy przepustach kablowych). </td>
										<td class="td-3">(10,00 PLN/szt.):</td><td class="td-4">'.$masa_izolacyjna.'</td></tr>';
									} 
									// Dokumentacja techniczna i projektowa dot. ochrony przeciwpożarowej.
									//1
									if($IBP_ZL1) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strfa głównie ZL I, <br>
										(np. centrum handlowe, duże sklepy, teatry, kina, szkoły - sale ponad 50 osób). </td>
										<td class="td-3">(2000,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL1.'</td></tr>';
									} //2
									if($IBP_ZL2) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL II, <br>
										(np. żłobek, przedszkole, szpital, hospicjum, dom spokojnej starości). </td>
										<td class="td-3">(2000,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL2.'</td></tr>';
									} //3
									if($IBP_ZL3) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL III, <br>
										(np. apteki, biura, szkoły, banki, restauracje, lokale usługowe). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL3.'</td></tr>';
									} //4
									if($IBP_ZL5) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL V, <br>
										(np. dom dziecka, hotele, pensjonaty, domy wczasowe). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL5.'</td></tr>';
									} //5
									if($IBP_PM) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie PM, <br>
										(np. magazyn, biblioteka, hala sklepu części składowej). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$IBP_PM.'</td></tr>';
									} //6
									if($IBP_IN) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie IN, <br>
										(np. budynki inwentarskie przeznaczone do chowu zwierząt). </td>
										<td class="td-3">(2000,00 PLN/szt.):</td><td class="td-4">'.$IBP_IN.'</td></tr>';
									} //7
									if($analiza_stanu_ppoz) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Analiza stanu ochrony przeciwpożarowej (nie jest wymagana prawnie). </td>
										<td class="td-3">(900,00 PLN/szt.):</td><td class="td-4">'.$analiza_stanu_ppoz.'</td></tr>';
									} //8
									if($matryca_wysterowan) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Matryca wysterowań urządzeń przeciwpożarowych na wypadek pożaru. </td>
										<td class="td-3">(1200,00 PLN/szt.):</td><td class="td-4">'.$matryca_wysterowan.'</td></tr>';
									} //9
									if($plan_ewakuacji) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Plan ewakuacji budynku. Graficzny rzut kondygnacji. </td>
										<td class="td-3">(950,00 PLN/szt.):</td><td class="td-4">'.$plan_ewakuacji.'</td></tr>';
									} 
									// Dokumentacja techniczna dot. ochrony przeciwybuchowej.
									//10
									if($OZW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Ocena zagrożenia wybuchem (np. procesy podczas produkcji, magazynowania, transportu). </td>
										<td class="td-3">(2950,00 PLN/szt.):</td><td class="td-4">'.$OZW.'</td></tr>';
									} //11
									if($ORW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Ocena ryzyka wybuchu (np. pary, pył, gaz). </td>
										<td class="td-3">(1950,00 PLN/szt.):</td><td class="td-4">'.$ORW.'</td></tr>';
									} //12
									if($DZPW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Dokument zabezpieczenia przed wybuchem (np. procesy podczas produkcji, magazynowania, transportu). </td>
										<td class="td-3">(2950,00 PLN/szt.):</td><td class="td-4">'.$DZPW.'</td></tr>';
									} //13
									if($SZW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Strefy zagrożenia wybuchem (graficzne przedstawienie przestrzeni). </td>
										<td class="td-3">(1950,00 PLN/szt.):</td><td class="td-4">'.$SZW.'</td></tr>';
									}
									
									// Montaż hydrantów.
									//1
									if($montaz_hydr_podziemny_DN_80) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant zewnętrzny podziemny - DN80 <br>
										(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
										<td class="td-3">(8000,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_podziemny_DN_80.'</td></tr>';
									} //2
									if($montaz_hydr_nadziemny_DN_80) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant zewnętrzny nadziemny - DN80 <br>
										(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
										<td class="td-3">(8400,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_nadziemny_DN_80.'</td></tr>';
									} //3
									if($montaz_hydr_nadziemny_DN_100) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant zewnętrzny nadziemny - DN100 <br> 
										(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
										<td class="td-3">(8600,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_nadziemny_DN_100.'</td></tr>';
									} //4
									if($montaz_hydr_wew_DN_25) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant wewnętrzny - DN25 <br> 
										(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
										<td class="td-3">(1600,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_wew_DN_25.'</td></tr>';
									} //5
									if($montaz_hydr_wew_DN_33) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant wewnętrzny - DN33 <br> 
										(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
										<td class="td-3">(1800,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_wew_DN_33.'</td></tr>';
									} //6
									if($montaz_hydr_wew_DN_52) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant wewnętrzny - DN52 <br> 
										(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_wew_DN_52.'</td></tr>';
									} 
									// Montaż instalacji sygnalizacji pożarowej.
									//7
									if($montaz_czujka_poz_staly_do_350) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, do wys. 3,5 m). </td>
										<td class="td-3">(140,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_do_350.'</td></tr>';
									} //8
									if($montaz_czujka_poz_staly_pow_350) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 3,5 m). </td>
										<td class="td-3">(160,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_pow_350.'</td></tr>';
									} //9
									if($montaz_czujka_poz_staly_pow_550) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 5,5 m). </td>
										<td class="td-3">(180,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_pow_550.'</td></tr>';
									} //10
									if($montaz_czujka_poz_podwiesz_pow_350) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 3,5 m). </td>
										<td class="td-3">(170,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_podwiesz_pow_350.'</td></tr>';
									} //11
									if($montaz_czujka_poz_staly_pow_550) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 5,5 m). </td>
										<td class="td-3">(190,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_pow_550.'</td></tr>';
									} //12
									if($montaz_CSP) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Montaż centrali sygnalizacji pożaru. </td>
										<td class="td-3">(1200,00 PLN/szt.):</td><td class="td-4">'.$montaz_CSP.'</td></tr>';
									} 
									// Montaż oświetlenia ewakuacyjnego i awaryjnego.
									//13
									if($montaz_lampa_osw_awar) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Lampa oświetlenia awaryjnego (montaż na suficie). </td>
										<td class="td-3">(140,00 PLN/szt.):</td><td class="td-4">'.$montaz_lampa_osw_awar.'</td></tr>';
									} //14
									if($montaz_lampa_osw_ewak) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Lampa oświetlenia ewakuacyjnego (montaż na ścianie). </td>
										<td class="td-3">(140,00 PLN/szt.):</td><td class="td-4">'.$montaz_lampa_osw_ewak.'</td></tr>';
									} //15
									if($montaz_masy_ochronnej) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Montaż masy przeciwpożarowej ochrony biernej <br>
										(np. przy szachtach, kanałach, otworach instalacyjnych - typu Promat lub inne). </td>
										<td class="td-3">(70,00 PLN/szt.):</td><td class="td-4">'.$montaz_masy_ochronnej.'</td></tr>';


									} echo '<tr><td></td><td>SUMA</td><td>'.$suma.' PLN</td><td></tr>';
									if(isset ($sumaZRabatem)) {
										echo '<tr><td></td><td>SUMA Z RABATEM </td><td>'.$sumaZRabatem.' PLN</td><td></tr>';
									}
								?>
								</table>
								<div>
									<div class="col-6 float-left">
										<a href="offer-calculator-fp.php">Powrót do kalkulatora ofert</a>
										<input id="viewPdf" class="non-printable pt-0 mt-0 pb-0 mb-0 d-none" type="button" onclick="printDiv('printableArea')" value="Podgląd pdf" />
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php
					if(!empty($_POST["contract"])) {
						$orderCounter = 1;
						?>
						<section class="calculator-page summary-page contract-page">
						<div class="row-content bg-con-1 service-offer pt-5 pb-5">

							<div class="calc-result printableArea" >
								<h5 class="headline text-center"> Harmonogram prac </h5>
								<div class="distance"></div>
								
								<table  class="col-lg-12 summary" cellpadding="5" cellspacing="10">
									<thead>
										<tr>
											<th class="th-1"> Lp. </th>
											<th class="th-2"> Nazwa usługi </th>
											<th class="th-3"> Data realizacji </th>
										</tr>
									</thead>
									<?php
									// Hydranty, zestawy hydroforowe i pompownie.
									//1
									if($hydrant_zewn_podz_DN80) {
										for($i=0; $i<$hydrant_zewn_podz_DN80; $i++) {
											echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2">Hydranty zewnętrzne podziemne DN 80. Badanie wydajności i ciśnienia.</td>
												<td class="td-3"> </td></tr>';
											$orderCounter += 1;
										}								
									} //2
									if($hydrant_zewn_nadzie_DN100) {
										for($i=0; $i<$hydrant_zewn_nadzie_DN100; $i++) {
											echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydranty zewnętrzne nadziemne DN 100. Badanie wydajności i ciśnienia. </td>
												<td class="td-3"> </td></tr>';
											$orderCounter += 1;
										}	
									} //3
									if($hydrant_zewn_nadzie_DN80) {
										for($i=0; $i<$hydrant_zewn_nadzie_DN80; $i++) {
											echo '<tr><td class="td-1"> '.$orderCounter.'</td><td class="td-2"> Hydranty zewnętrzne nadziemne DN 80. Badanie wydajności i ciśnienia. </td>
												<td class="td-3"> </td></tr>';
											$orderCounter += 1;
										}	
									} //4
									if($hydrant_wewn_DN52) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 52. Badanie wydajności i ciśnienia.</td> 
										<td class="td-3">(55,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN52.'</td></tr>';
									} //5
									if($hydrant_wewn_DN33) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 33. Badanie wydajności i ciśnienia.</td>
										<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN33.'</td></tr>';
									} //6
									if($hydrant_wewn_DN25 ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 25. Badanie wydajności i ciśnienia.</td>
										<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN25.'</td></tr>';
									} //7
									if($weze_dyrant_5_lat ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Badanie okresowe 5-cio letnie. Badanie ciśnieniowe węży hydrantów wewnętrznych.</td>
										<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$weze_dyrant_5_lat.'</td></tr>';
									} //8
									if($inst_trysk_wodna ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Przegląd okresowy instalacji tryskaczowej (wodnej).</td>
										<td class="td-3">(0,50 PLN/m2):</td><td class="td-4">'.$inst_trysk_wodna.'</td></tr>';
									} //9
									if($zest_hydrofor_wewn ) {
										echo '<tr><td class="td-1"></td><td class="td-2">Przegląd okresowy zestawu hydroforowego do zasilania inst. ppoż. wewnątrz budynku<br>
										(np. zasilające hydranty wewnętrzne, tryskacze).</td>
										<td class="td-3">(600,00 PLN/zestaw):</td><td class="td-4">'.$zest_hydrofor_wewn.'</td></tr>';
									} //10
									if($zest_hydrofor_zewewn) {
										echo '<tr><td class="td-1"></td><td class="td-2">Przegląd okresowy pompowni do zasilania instalacji przeciwpożarowych zewnętrznych<br>
										(np. pompownie zasilające hydranty zewnętrzne).</td>
										<td class="td-3">(700,00 PLN/zestaw):</td><td class="td-4">'.$zest_hydrofor_zewewn.'</td></tr>';
									} 
									// Gaśnice, agregaty gaśnicze.
									//11
									if($gasnica_6) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy gaśnic (proszkowe, śniegowe, pianowe) 6kg. </td>
										<td class="td-3">(10,00 PLN/szt.):</td><td class="td-4">'.$gasnica_6.'</td></tr>';
									} //12
									if($gasnica_4) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy gaśnic (proszkowe, śniegowe, pianowe) 4kg. </td>
										<td class="td-3">(8,00 PLN/szt.):</td><td class="td-4">'.$gasnica_4.'</td></tr>';
									} //13
									if($gasnica_2) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy gaśnic (proszkowe, śniegowe, pianowe) 2kg i mniejsze. </td>
										<td class="td-3">(7,00 PLN/szt.):</td><td class="td-4">'.$gasnica_2.'</td></tr>';
									} //14
									if($gasnica_5lat) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Legalizacja gaśnic (5-cio letnia). </td>
										<td class="td-3">(50,00 PLN/szt.):</td><td class="td-4">'.$gasnica_5lat.'</td></tr>';
									} //15
									if($gasnicace_UDT) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Legalizacja UDT dla zbiorników gaśnic. </td>
										<td class="td-3">(90,00 PLN/szt.):</td><td class="td-4">'.$gasnicace_UDT.'</td></tr>';
									} //16
									if($agregaty) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy agregatów gaśniczych. </td>
										<td class="td-3">(80,00 PLN/szt.):</td><td class="td-4">'.$agregaty.'</td></tr>';
									} 
									// Systemy oddymiania, drzwi przeciwpożarowe, kurtyny, grodzie.
									//17
									if($oddym_okna) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu oddymiania (okna oddymiające dachowe i ścienne). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$oddym_okna.'</td></tr>';
									} //18
									if($wnetylatory_oddym) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu oddymiania (wentylatory oddymiające). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$wnetylatory_oddym.'</td></tr>';
									} //19
									if($klapy_odcin_w_kanalach) {
										echo '<tr><td class="td-1"></td><td class="td-2">  Przegląd okresowy systemu oddymiania (klapy odcinające w kanałach wentylacyjnych). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$klapy_odcin_w_kanalach.'</td></tr>';
									} //20
									if($drzwi_ewakuac) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy drzwi ewakuacyjnych (ze zwalniaczami antypanicznymi <br>i dostępem chronionym). </td>
										<td class="td-3">(55,00 PLN/szt.):</td><td class="td-4">'.$drzwi_ewakuac.'</td></tr>';
									} //21
									if($drzwi_oddziel_pozarowego) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy drzwi oddzielenia pożarowego (stalowe, drewniane, profilowe). </td>
										<td class="td-3">(28,00 PLN/szt.):</td><td class="td-4">'.$drzwi_oddziel_pozarowego.'</td></tr>';
									} //22
									if($bramy_oddziel_pozarowego) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy bram, kurtyn oddzielenia pożarowego. </td>
										<td class="td-3">(40,00 PLN/szt.):</td><td class="td-4">'.$bramy_oddziel_pozarowego.'</td></tr>';
									} 
									// System sygnalizacji pożarowej. Dźwiękowy system ostrzegawczy.
									//23
									if($syst_sygn_poz) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu sygnalizacji pożarowej. Centrale sygnalizacji pożaru.<br> 
										(Polon-Alfa, Bosh, Schrack, Satel, Inim Electronics, Awex, inne). </td>
										<td class="td-3">(895,00/szt.):</td><td class="td-4">'.$syst_sygn_poz.'</td></tr>';
									} //24
									if($czujki) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy instalacji sygnalizacji pożarowej. Czujki wykrywające pożar <br>(dymu, ciepła, liniowe). </td>
										<td class="td-3">(20,00/szt.):</td><td class="td-4">'.$czujki.'</td></tr>';
									} //25
									if($reczny_ostrzeg_pozar) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy ręcznego ostrzegacza pożarowego. </td>
										<td class="td-3">(80,00/szt.):</td><td class="td-4">'.$reczny_ostrzeg_pozar.'</td></tr>';
									} //26
									if($dzwiek_syst_ostrz) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy dźwiękowego systemu ostrzegawczego. </td>
										<td class="td-3">(500,00/szt.):</td><td class="td-4">'.$dzwiek_syst_ostrz.'</td></tr>';
									} 
									// Oświetlenie awaryjne i ewakuacyjne. Przeciwpożarowy wyłącznik prądu.
									//27
									if($osw_awar) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy instalacji oświetlenia awaryjnego. </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$osw_awar.'</td></tr>';
									} //28
									if($osw_ewak) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy instalacji oświetlenia ewakuacyjnego. </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$osw_ewak.'</td></tr>';
									} //29
									if($ppoz_wyl_pradu) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy przeciwpożarowego wyłącznika prądu. </td>
										<td class="td-3">(100,00 PLN/szt.):</td><td class="td-4">'.$ppoz_wyl_pradu.'</td></tr>';
									} //30
									if($syst_detekcji_gazow) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd okresowy systemu detekcji gazów (garaże, czujniki CO i LPG). </td>
										<td class="td-3">(35,00 PLN/szt.):</td><td class="td-4">'.$syst_detekcji_gazow.'</td></tr>';
									} //31
									if($masa_izolacyjna) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Przegląd konserwacyjny biernego systemu ochrony przeciwpożarowej <br>
										(np. masy izolacyjnej przy przepustach kablowych). </td>
										<td class="td-3">(10,00 PLN/szt.):</td><td class="td-4">'.$masa_izolacyjna.'</td></tr>';
									} 
									// Dokumentacja techniczna i projektowa dot. ochrony przeciwpożarowej.
									//1
									if($IBP_ZL1) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strfa głównie ZL I, <br>
										(np. centrum handlowe, duże sklepy, teatry, kina, szkoły - sale ponad 50 osób). </td>
										<td class="td-3">(2000,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL1.'</td></tr>';
									} //2
									if($IBP_ZL2) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL II, <br>
										(np. żłobek, przedszkole, szpital, hospicjum, dom spokojnej starości). </td>
										<td class="td-3">(2000,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL2.'</td></tr>';
									} //3
									if($IBP_ZL3) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL III, <br>
										(np. apteki, biura, szkoły, banki, restauracje, lokale usługowe). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL3.'</td></tr>';
									} //4
									if($IBP_ZL5) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie ZL V, <br>
										(np. dom dziecka, hotele, pensjonaty, domy wczasowe). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$IBP_ZL5.'</td></tr>';
									} //5
									if($IBP_PM) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie PM, <br>
										(np. magazyn, biblioteka, hala sklepu części składowej). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$IBP_PM.'</td></tr>';
									} //6
									if($IBP_IN) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa pożarowego budynku. Strefa głównie IN, <br>
										(np. budynki inwentarskie przeznaczone do chowu zwierząt). </td>
										<td class="td-3">(2000,00 PLN/szt.):</td><td class="td-4">'.$IBP_IN.'</td></tr>';
									} //7
									if($analiza_stanu_ppoz) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Analiza stanu ochrony przeciwpożarowej (nie jest wymagana prawnie). </td>
										<td class="td-3">(900,00 PLN/szt.):</td><td class="td-4">'.$analiza_stanu_ppoz.'</td></tr>';
									} //8
									if($matryca_wysterowan) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Matryca wysterowań urządzeń przeciwpożarowych na wypadek pożaru. </td>
										<td class="td-3">(1200,00 PLN/szt.):</td><td class="td-4">'.$matryca_wysterowan.'</td></tr>';
									} //9
									if($plan_ewakuacji) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Plan ewakuacji budynku. Graficzny rzut kondygnacji. </td>
										<td class="td-3">(950,00 PLN/szt.):</td><td class="td-4">'.$plan_ewakuacji.'</td></tr>';
									} 
									// Dokumentacja techniczna dot. ochrony przeciwybuchowej.
									//10
									if($OZW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Ocena zagrożenia wybuchem (np. procesy podczas produkcji, magazynowania, transportu). </td>
										<td class="td-3">(2950,00 PLN/szt.):</td><td class="td-4">'.$OZW.'</td></tr>';
									} //11
									if($ORW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Ocena ryzyka wybuchu (np. pary, pył, gaz). </td>
										<td class="td-3">(1950,00 PLN/szt.):</td><td class="td-4">'.$ORW.'</td></tr>';
									} //12
									if($DZPW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Dokument zabezpieczenia przed wybuchem (np. procesy podczas produkcji, magazynowania, transportu). </td>
										<td class="td-3">(2950,00 PLN/szt.):</td><td class="td-4">'.$DZPW.'</td></tr>';
									} //13
									if($SZW) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Strefy zagrożenia wybuchem (graficzne przedstawienie przestrzeni). </td>
										<td class="td-3">(1950,00 PLN/szt.):</td><td class="td-4">'.$SZW.'</td></tr>';
									}
									
									// Montaż hydrantów.
									//1
									if($montaz_hydr_podziemny_DN_80) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant zewnętrzny podziemny - DN80 <br>
										(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
										<td class="td-3">(8000,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_podziemny_DN_80.'</td></tr>';
									} //2
									if($montaz_hydr_nadziemny_DN_80) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant zewnętrzny nadziemny - DN80 <br>
										(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
										<td class="td-3">(8400,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_nadziemny_DN_80.'</td></tr>';
									} //3
									if($montaz_hydr_nadziemny_DN_100) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant zewnętrzny nadziemny - DN100 <br> 
										(praca koparki, kruszec, prace hydrauliczne, spawalnicze, kolumna, uruchomienie testowe). </td>
										<td class="td-3">(8600,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_nadziemny_DN_100.'</td></tr>';
									} //4
									if($montaz_hydr_wew_DN_25) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant wewnętrzny - DN25 <br> 
										(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
										<td class="td-3">(1600,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_wew_DN_25.'</td></tr>';
									} //5
									if($montaz_hydr_wew_DN_33) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant wewnętrzny - DN33 <br> 
										(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
										<td class="td-3">(1800,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_wew_DN_33.'</td></tr>';
									} //6
									if($montaz_hydr_wew_DN_52) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Hydrant wewnętrzny - DN52 <br> 
										(prace hydrauliczne, spawalnicze, materiały, uruchomienie testowe). </td>
										<td class="td-3">(2200,00 PLN/szt.):</td><td class="td-4">'.$montaz_hydr_wew_DN_52.'</td></tr>';
									} 
									// Montaż instalacji sygnalizacji pożarowej.
									//7
									if($montaz_czujka_poz_staly_do_350) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, do wys. 3,5 m). </td>
										<td class="td-3">(140,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_do_350.'</td></tr>';
									} //8
									if($montaz_czujka_poz_staly_pow_350) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 3,5 m). </td>
										<td class="td-3">(160,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_pow_350.'</td></tr>';
									} //9
									if($montaz_czujka_poz_staly_pow_550) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do stałego sufitu, powyżej wys. 5,5 m). </td>
										<td class="td-3">(180,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_pow_550.'</td></tr>';
									} //10
									if($montaz_czujka_poz_podwiesz_pow_350) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 3,5 m). </td>
										<td class="td-3">(170,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_podwiesz_pow_350.'</td></tr>';
									} //11
									if($montaz_czujka_poz_staly_pow_550) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Czujka pożaru (montaż do podwieszanego sufitu, powyżej wys. 5,5 m). </td>
										<td class="td-3">(190,00 PLN/szt.):</td><td class="td-4">'.$montaz_czujka_poz_staly_pow_550.'</td></tr>';
									} //12
									if($montaz_CSP) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Montaż centrali sygnalizacji pożaru. </td>
										<td class="td-3">(1200,00 PLN/szt.):</td><td class="td-4">'.$montaz_CSP.'</td></tr>';
									} 
									// Montaż oświetlenia ewakuacyjnego i awaryjnego.
									//13
									if($montaz_lampa_osw_awar) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Lampa oświetlenia awaryjnego (montaż na suficie). </td>
										<td class="td-3">(140,00 PLN/szt.):</td><td class="td-4">'.$montaz_lampa_osw_awar.'</td></tr>';
									} //14
									if($montaz_lampa_osw_ewak) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Lampa oświetlenia ewakuacyjnego (montaż na ścianie). </td>
										<td class="td-3">(140,00 PLN/szt.):</td><td class="td-4">'.$montaz_lampa_osw_ewak.'</td></tr>';
									} //15
									if($montaz_masy_ochronnej) {
										echo '<tr><td class="td-1"></td><td class="td-2"> Montaż masy przeciwpożarowej ochrony biernej <br>
										(np. przy szachtach, kanałach, otworach instalacyjnych - typu Promat lub inne). </td>
										<td class="td-3">(70,00 PLN/szt.):</td><td class="td-4">'.$montaz_masy_ochronnej.'</td></tr>';


									} 
									?>
								</table>

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

