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
		
		<script defer src="../js/bootstrap/bootstrap.min.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<!--| NAVIGATION |-->
			<?php
				require('./navbar.php');
			?>

			<?php 
				// 1-4
				$analiza_BHP = !empty($_POST['analiza_BHP']) ? $_POST['analiza_BHP'] : 0;
				$ORZ_nowa_dok = !empty($_POST['ORZ_nowa_dok']) ? $_POST['ORZ_nowa_dok'] : 0;
				$ORZ_aktualizacja = !empty($_POST['ORZ_aktualizacja']) ? $_POST['ORZ_aktualizacja'] : 0;
				$ocena_warunkow_monitor = !empty($_POST['ocena_warunkow_monitor']) ? $_POST['ocena_warunkow_monitor'] : 0;
				// 5-8
				$protok_ustal_przycz_wyp = !empty($_POST['protok_ustal_przycz_wyp']) ? $_POST['protok_ustal_przycz_wyp'] : 0;
				$karta_wyp_w_drodze = !empty($_POST['karta_wyp_w_drodze']) ? $_POST['karta_wyp_w_drodze'] : 0;
				$wypadek_w_delegacji = !empty($_POST['wypadek_w_delegacji']) ? $_POST['wypadek_w_delegacji'] : 0;
				$rejestr_wypadkow = !empty($_POST['rejestr_wypadkow']) ? $_POST['rejestr_wypadkow'] : 0;
				// 9-12
				$IBWR = !empty($_POST['IBWR']) ? $_POST['IBWR'] : 0;
				$plan_BIOZ = !empty($_POST['plan_BIOZ']) ? $_POST['plan_BIOZ'] : 0;
				$reg_pracy = !empty($_POST['reg_pracy']) ? $_POST['reg_pracy'] : 0;
				$sprawozd_komis_bhp = !empty($_POST['sprawozd_komis_bhp']) ? $_POST['sprawozd_komis_bhp'] : 0;	
				// 13-15
				$rejestr_nat_osw = !empty($_POST['rejestr_nat_osw']) ? $_POST['rejestr_nat_osw'] : 0;
				$rejestr_czyn_szkod = !empty($_POST['rejestr_czyn_szkod']) ? $_POST['rejestr_czyn_szkod'] : 0;
				$spis_subst_szkod = !empty($_POST['spis_subst_szkod']) ? $_POST['spis_subst_szkod'] : 0;
				// 16-19
				$instr_bhp = !empty($_POST['instr_bhp']) ? $_POST['instr_bhp'] : 0;
				$instr_bhp_subst = !empty($_POST['instr_bhp_subst']) ? $_POST['instr_bhp_subst'] : 0;
				$instr_bhp_urz_elek = !empty($_POST['instr_bhp_urz_elek']) ? $_POST['instr_bhp_urz_elek'] : 0;
				$instr_bhp_procesow = !empty($_POST['instr_bhp_procesow']) ? $_POST['instr_bhp_procesow'] : 0;
				// 20-21
				$stala_obsl_bhp_do_99 = !empty($_POST['stala_obsl_bhp_do_99']) ? $_POST['stala_obsl_bhp_do_99'] : 0;
				$stala_obsl_bhp_od_100 = !empty($_POST['stala_obsl_bhp_od_100']) ? $_POST['stala_obsl_bhp_od_100'] : 0;
				// -------------------------------------------------------------------------------
				// 1-7
				$wykaz_os_pierw_pom = !empty($_POST['wykaz_os_pierw_pom']) ? $_POST['wykaz_os_pierw_pom'] : 0;
				$wykaz_os_gasz_pozar = !empty($_POST['wykaz_os_gasz_pozar']) ? $_POST['wykaz_os_gasz_pozar'] : 0;
				$prace_dla_2_os = !empty($_POST['prace_dla_2_os']) ? $_POST['prace_dla_2_os'] : 0;
				$wykaz_prac_szczeg_niebezp = !empty($_POST['wykaz_prac_szczeg_niebezp']) ? $_POST['wykaz_prac_szczeg_niebezp'] : 0;
				$wykaz_prac_szkod_dla_kob = !empty($_POST['wykaz_prac_szkod_dla_kob']) ? $_POST['wykaz_prac_szkod_dla_kob'] : 0;
				$wykaz_prac_wzbr_mlod = !empty($_POST['wykaz_prac_wzbr_mlod']) ? $_POST['wykaz_prac_wzbr_mlod'] : 0;
				$udziel_upowaznienia = !empty($_POST['udziel_upowaznienia']) ? $_POST['udziel_upowaznienia'] : 0;
				// 8-18
				$zarz_ws_pom_czyn_szkod = !empty($_POST['zarz_ws_pom_czyn_szkod']) ? $_POST['zarz_ws_pom_czyn_szkod'] : 0;
				$zarz_ws_bad_lek = !empty($_POST['zarz_ws_bad_lek']) ? $_POST['zarz_ws_bad_lek'] : 0;
				$zarz_ws_post_chorob_zawod = !empty($_POST['zarz_ws_post_chorob_zawod']) ? $_POST['zarz_ws_post_chorob_zawod'] : 0;
				$zarz_ws_napoi = !empty($_POST['zarz_ws_napoi']) ? $_POST['zarz_ws_napoi'] : 0;
				$zarz_ws_refund_okular = !empty($_POST['zarz_ws_refund_okular']) ? $_POST['zarz_ws_refund_okular'] : 0;
				$zarz_ws_szkol_okr_bhp = !empty($_POST['zarz_ws_szkol_okr_bhp']) ? $_POST['zarz_ws_szkol_okr_bhp'] : 0;
				$zarz_ws_soi_or = !empty($_POST['zarz_ws_soi_or']) ? $_POST['zarz_ws_soi_or'] : 0;
				$zarz_ws_ust_przycz_i_okol_wyp = !empty($_POST['zarz_ws_ust_przycz_i_okol_wyp']) ? $_POST['zarz_ws_ust_przycz_i_okol_wyp'] : 0;
				$zarz_ws_wykaz_prac_poz_niebezp = !empty($_POST['zarz_ws_wykaz_prac_poz_niebezp']) ? $_POST['zarz_ws_wykaz_prac_poz_niebezp'] : 0;
				$zarz_ws_powol_komisji_bhp = !empty($_POST['zarz_ws_powol_komisji_bhp']) ? $_POST['zarz_ws_powol_komisji_bhp'] : 0;
				$zarz_ws_ekspl_wozk_jezd = !empty($_POST['zarz_ws_ekspl_wozk_jezd']) ? $_POST['zarz_ws_ekspl_wozk_jezd'] : 0;
				// 19-24
				$rejestr_chor_zawod = !empty($_POST['rejestr_chor_zawod']) ? $_POST['rejestr_chor_zawod'] : 0;
				$rej_prac_subst_rak_mutag = !empty($_POST['rej_prac_subst_rak_mutag']) ? $_POST['rej_prac_subst_rak_mutag'] : 0;
				$rej_pracownikow_wyk_prac_z_subst_rak_mutag = !empty($_POST['rej_pracownikow_wyk_prac_z_subst_rak_mutag']) ? $_POST['rej_pracownikow_wyk_prac_z_subst_rak_mutag'] : 0;
				$rej_prac_szkod_biol_3_lub_4 = !empty($_POST['rej_prac_szkod_biol_3_lub_4']) ? $_POST['rej_prac_szkod_biol_3_lub_4'] : 0;
				$rej_pracownikow_wyk_prac_z_szkod_biol_3_lub_4 = !empty($_POST['rej_pracownikow_wyk_prac_z_szkod_biol_3_lub_4']) ? $_POST['rej_pracownikow_wyk_prac_z_szkod_biol_3_lub_4'] : 0;
				$rej_zasw_lek = !empty($_POST['rej_zasw_lek']) ? $_POST['rej_zasw_lek'] : 0;
				// -------------------------------------------------------------------------------
				// 1-5
				$szkol_z_gasz_pozarow = !empty($_POST['szkol_z_gasz_pozarow']) ? $_POST['szkol_z_gasz_pozarow'] : 0;
				$szkol_z_ewakuacji = !empty($_POST['szkol_z_ewakuacji']) ? $_POST['szkol_z_ewakuacji'] : 0;
				$probna_ewak = !empty($_POST['probna_ewak']) ? $_POST['probna_ewak'] : 0;
				$szkol_obslugi_csp = !empty($_POST['szkol_obslugi_csp']) ? $_POST['szkol_obslugi_csp'] : 0;
				$rej_szkol_bhp = !empty($_POST['rej_szkol_bhp']) ? $_POST['rej_szkol_bhp'] : 0;
				// 6-12
				$szkol_bhp_wstepne = !empty($_POST['szkol_bhp_wstepne']) ? $_POST['szkol_bhp_wstepne'] : 0;
				$szkol_bhp_okr_kier_prac = !empty($_POST['szkol_bhp_okr_kier_prac']) ? $_POST['szkol_bhp_okr_kier_prac'] : 0;
				$szkol_bhp_okr_adm = !empty($_POST['szkol_bhp_okr_adm']) ? $_POST['szkol_bhp_okr_adm'] : 0;
				$szkol_bhp_okr_inz_tech = !empty($_POST['szkol_bhp_okr_inz_tech']) ? $_POST['szkol_bhp_okr_inz_tech'] : 0;
				$szkol_bhp_okr_robotn = !empty($_POST['szkol_bhp_okr_robotn']) ? $_POST['szkol_bhp_okr_robotn'] : 0;
				$szkol_bhp_okr_prac_sluzby_bhp = !empty($_POST['szkol_bhp_okr_prac_sluzby_bhp']) ? $_POST['szkol_bhp_okr_prac_sluzby_bhp'] : 0;
				$szkol_bhp_okr_prac_niebezp_czynn = !empty($_POST['szkol_bhp_okr_prac_niebezp_czynn']) ? $_POST['szkol_bhp_okr_prac_niebezp_czynn'] : 0;


				$suma = 
				// 1-4
				(1400.00 * $analiza_BHP) + (240.00 * $ORZ_nowa_dok) + (160.00 * $ORZ_aktualizacja) + 	(160.00 * $ocena_warunkow_monitor) + 
				// 5-8
				(450.00 * $protok_ustal_przycz_wyp) + (380.00 * $karta_wyp_w_drodze) + (520.00 * $wypadek_w_delegacji) + (180.00 * $rejestr_wypadkow) + 
				// 9-12 
				(700.00 * $IBWR) + (1600.00 * $plan_BIOZ) + (390.00 * $reg_pracy) + (250.00 * $sprawozd_komis_bhp) + 
				// 13-15
				(250.00 * $rejestr_nat_osw) + (250.00 * $rejestr_czyn_szkod) + (250.00 * $spis_subst_szkod) + 
				// 16-19
				(20.00 * $instr_bhp) + (20.00 * $instr_bhp_subst) + (20.00 * $instr_bhp_urz_elek) + (20.00 * $instr_bhp_procesow) + 
				// 20-21
				(3950.00 * $stala_obsl_bhp_do_99) + (5950.00 * $stala_obsl_bhp_od_100) +
				// -------------------------------------------------------------------------------
				// 1-7
				(90.00 * $wykaz_os_pierw_pom) + (90.00 * $wykaz_os_gasz_pozar) + (90.00 * $prace_dla_2_os) + (190.00 * $wykaz_prac_szczeg_niebezp) + 
				(190.00 * $wykaz_prac_szkod_dla_kob) + (90.00 * $wykaz_prac_wzbr_mlod) + (250.00 * $udziel_upowaznienia) + 
				// 8-18
				(190.00 * $zarz_ws_pom_czyn_szkod) + (190.00 * $zarz_ws_bad_lek) + (190.00 * $zarz_ws_post_chorob_zawod) + (90.00 * $zarz_ws_napoi) + 
				(90.00 * $zarz_ws_refund_okular) + (90.00 * $zarz_ws_szkol_okr_bhp) + (190.00 * $zarz_ws_soi_or) + (90.00 * $zarz_ws_ust_przycz_i_okol_wyp) + 
				(90.00 * $zarz_ws_wykaz_prac_poz_niebezp) + (90.00 * $zarz_ws_powol_komisji_bhp) + (90.00 * $zarz_ws_ekspl_wozk_jezd) + 
				// 19-24 
				(190.00 * $rejestr_chor_zawod) + (90.00 * $rej_prac_subst_rak_mutag) + (90.00 * $rej_pracownikow_wyk_prac_z_subst_rak_mutag) + 
				(90.00 * $rej_prac_szkod_biol_3_lub_4) + (90.00 * $rej_pracownikow_wyk_prac_z_szkod_biol_3_lub_4) + (90.00 * $rej_zasw_lek) + 
				// -------------------------------------------------------------------------------
				// 1-5
				(90.00 * $szkol_z_gasz_pozarow) + (70.00 * $szkol_z_ewakuacji) + (450.00 * $probna_ewak) + (80.00 * $szkol_obslugi_csp) + 
				(190.00 * $rej_szkol_bhp) + 
				// 6-12
				(150.00 * $szkol_bhp_wstepne) + (300.00 * $szkol_bhp_okr_kier_prac) + (60.00 * $szkol_bhp_okr_adm) + (120.00 * $szkol_bhp_okr_inz_tech) + 
				(60.00 * $szkol_bhp_okr_robotn) + (480.00 * $szkol_bhp_okr_prac_sluzby_bhp) + (90.00 * $szkol_bhp_okr_prac_niebezp_czynn);

			?>

			<!--| CONTENT |-->
			<section class="calculator-page summary-page">
				<div class="row-content bg-con-1 service-offer pt-5 pb-5" >
					<div class="calc-result" >
						<h1 class="headline text-center">Podsumowanie kosztorysu usługowego BHP</h1>
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
								// 1-4
								if($analiza_BHP) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Analiza stanu bezpieczeństwa i higieny pracy. Raport roczny. </td>
									<td class="td-3">(1400,00 PLN/szt):</td><td class="td-4">'.$analiza_BHP.'</td></tr>';
								} 
								if($ORZ_nowa_dok) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Ocena ryzyka zawodowego. Wykonanie nowej dokumentacji. </td>
									<td class="td-3">(240,00 PLN/szt):</td><td class="td-4">'.$ORZ_nowa_dok.'</td></tr>';
								} 
								if($ORZ_aktualizacja) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Ocena ryzyka zawodowego. Aktualizacja istniejącej dokumentacji. </td>
									<td class="td-3">(160,00 PLN/szt):</td><td class="td-4">'.$ORZ_aktualizacja.'</td></tr>';
								} 
								if($ocena_warunkow_monitor) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Ocena warunków pracy przy monitorach ekranowych. </td> 
									<td class="td-3">(160,00 PLN/szt):</td><td class="td-4">'.$ocena_warunkow_monitor.'</td></tr>';
								} 
								// 5-8
								if($protok_ustal_przycz_wyp) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Protokół z ustalenia okoliczności i przyczyn wypadku przy pracy. </td>
									<td class="td-3">(450,00 PLN/szt):</td><td class="td-4">'.$protok_ustal_przycz_wyp.'</td></tr>';
								} 
								if($karta_wyp_w_drodze) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Karta wypadku w drodze do pracy lub z pracy. </td>
									<td class="td-3">(380,00 PLN/szt):</td><td class="td-4">'.$karta_wyp_w_drodze.'</td></tr>';
								} 
								if($wypadek_w_delegacji) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Dokumentacja wypadkowa dla wypadków w delegacji (zrównane). </td>
									<td class="td-3">(520,00 PLN/szt):</td><td class="td-4">'.$wypadek_w_delegacji.'</td></tr>';
								} 
								if($rejestr_wypadkow) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr wypadków przy pracy. </td>
									<td class="td-3">(180,00 PLN/szt):</td><td class="td-4">'.$rejestr_wypadkow.'</td></tr>';
								} 
								// 9-12 
								if($IBWR) {
									echo '<tr><td class="td-1"></td><td class="td-2">Instrukcja bezpiecznego wykonania robót (IBWR). </td>
									<td class="td-3">(700,00 PLN/szt):</td><td class="td-4">'.$IBWR.'</td></tr>';
								} 
								if($plan_BIOZ) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Plan bezpieczeństwa i ochrony zdrowia (Plan BIOZ). </td>
									<td class="td-3">(1600,00 PLN/szt):</td><td class="td-4">'.$plan_BIOZ.'</td></tr>';
								} 
								if($reg_pracy) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Regulamin pracy. </td>
									<td class="td-3">(390,00 PLN/szt):</td><td class="td-4">'.$reg_pracy.'</td></tr>';
								} 
								if($sprawozd_komis_bhp) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Sprawozdanie z posiedzeń komisji BHP (dla zakładu pracy pow. 250 pracowników). </td>
									<td class="td-3">(250,00 PLN/szt):</td><td class="td-4">'.$sprawozd_komis_bhp.'</td></tr>';
								} 
								// 13-15
								if($rejestr_nat_osw) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr natężenia oświetlenia na stanowisku pracy. </td>
									<td class="td-3">(250,00 PLN/szt):</td><td class="td-4">'.$rejestr_nat_osw.'</td></tr>';
								} 
								if($rejestr_czyn_szkod) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr wyników badań i pomiarów czynników szkodliwych dla zdrowia w środowisku pracy. </td>
									<td class="td-3">(250,00 PLN/szt):</td><td class="td-4">'.$rejestr_czyn_szkod.'</td></tr>';
								} 
								if($spis_subst_szkod) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Spis substancji szkodliwych używanych w zakładzie pracy wraz z kartami charakterystyk. </td>
									<td class="td-3">(250,00 PLN/szt):</td><td class="td-4">'.$spis_subst_szkod.'</td></tr>';
								} 
								// 16-19
								if($instr_bhp) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa i higieny pracy. </td>
									<td class="td-3">20,00 PLN/szt):</td><td class="td-4">'.$instr_bhp.'</td></tr>';
								} 
								if($instr_bhp_subst) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa i higieny pracy z substancjami o określonych właściwościach <br> fizycznych, chemicznych, biologicznych. </td>
									<td class="td-3">(20,00 PLN/szt):</td><td class="td-4">'.$instr_bhp_subst.'</td></tr>';
								} 
								if($instr_bhp_urz_elek) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa i higieny pracy urządzeń i instalacji elektrycznych. </td>
									<td class="td-3">(20,00 PLN/szt):</td><td class="td-4">'.$instr_bhp_urz_elek.'</td></tr>';
								} 
								if($instr_bhp_procesow) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Instrukcja bezpieczeństwa i higieny pracy dla określonych procesów pracy. </td>
									<td class="td-3">(20,00 PLN/szt):</td><td class="td-4">'.$instr_bhp_procesow.'</td></tr>';
								} 
								// 20-21
								if($stala_obsl_bhp_do_99) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Stała obsługa BHP dla firmy (do 99 pracowników) - faktura. </td>
									<td class="td-3">(3950,00 PLN/szt):</td><td class="td-4">'.$stala_obsl_bhp_do_99.'</td></tr>';
								} 
								if($stala_obsl_bhp_od_100) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Stała obsługa BHP dla firmy (od 100 pracowników) - UoP. </td>
									<td class="td-3">(5950,00 PLN/szt):</td><td class="td-4">'.$stala_obsl_bhp_od_100.'</td></tr>';
								} 
								// -------------------------------------------------------------------------------
								//Dokumentacja BHP. Wykazy.
								// 1-7
								if($wykaz_os_pierw_pom) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Wykaz osób wyznaczonych do udzielenia pierwszej pomocy. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$wykaz_os_pierw_pom.'</td></tr>';
								} 
								if($wykaz_os_gasz_pozar) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Wykaz osób wyznaczonych do zwalczania pożarów oraz osób <br/>do prowadzenia ewakuacji zakladu. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$wykaz_os_gasz_pozar.'</td></tr>';
								} 
								if($prace_dla_2_os) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Wykaz prac które powinny być wykonywane przez co najmniej 2 osoby. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$prace_dla_2_os.'</td></tr>';
								} 
								if($wykaz_prac_szczeg_niebezp) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Wykaz prac szczególnie niebezpiecznych występujących w zakaładzie pracy. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$wykaz_prac_szczeg_niebezp.'</td></tr>';
								} 
								if($wykaz_prac_szkod_dla_kob) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Wykaz prac szczególnie uciążliwych i szkodliwych dla zdrowia kobiet. <br/>Załącznik regulaminu. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$wykaz_prac_szkod_dla_kob.'</td></tr>';
								} 
								if($wykaz_prac_wzbr_mlod) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Wykaz prac wzbronionych młodocianym. Załącznik regulaminu. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$wykaz_prac_wzbr_mlod.'</td></tr>';
								} 
								if($udziel_upowaznienia) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Wykaz poleceniodawców określający zakres udzielonego im upoważnienia. </td>
									<td class="td-3">(250,00 PLN/szt):</td><td class="td-4">'.$udziel_upowaznienia.'</td></tr>';
								} 
								// Zarządzenia dla zakładu pracy.
								// 8-18
								if($zarz_ws_pom_czyn_szkod) {
									echo '<tr><td class="td-1">8</td><td class="td-2"> Zarządzenie ws. badań i pomiarów czynników szkodliwych w środowisku pracy. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_pom_czyn_szkod.'</td></tr>';
								} 
								if($zarz_ws_bad_lek) {
									echo '<tr><td class="td-1">9</td><td class="td-2"> Zarządzenie ws. badań lekarskich pracowników. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_bad_lek.'</td></tr>';
								} 
								if($zarz_ws_post_chorob_zawod) {
									echo '<tr><td class="td-1">10</td><td class="td-2"> Zarządzenie ws. postępowania w przypadku stwierdzenia podejrzenia o choroby zawodowe. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_post_chorob_zawod.'</td></tr>';
								} 
								if($zarz_ws_napoi) {
									echo '<tr><td class="td-1">11</td><td class="td-2"> Zarządzenie ws. przydziału napojów i posiłków profilaktycznych. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_napoi.'</td></tr>';
								} 
								if($zarz_ws_refund_okular) {
									echo '<tr><td class="td-1">12</td><td class="td-2"> Zarządzenie ws. refundacji zakupionych okularów korygujących wzrok przy obsłudze <br> monitorów ekranowych. Załącznik regulaminu. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_refund_okular.'</td></tr>';
								} 
								if($zarz_ws_szkol_okr_bhp) {
									echo '<tr><td class="td-1">13</td><td class="td-2"> Zarządzenie ws. szkoleń okresowych BHP. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_szkol_okr_bhp.'</td></tr>';
								} 
								if($zarz_ws_soi_or) {
									echo '<tr><td class="td-1">14</td><td class="td-2"> Zarządzenie ws. środków ochrony indywidualnej, higieny osobistej, odzierzy roboczej. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_soi_or.'</td></tr>';
								} 
								if($zarz_ws_ust_przycz_i_okol_wyp) {
									echo '<tr><td class="td-1">15</td><td class="td-2"> Zarządzenie ws. ustalania okoliczności i przyczyn wypadków przy pracy. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_ust_przycz_i_okol_wyp.'</td></tr>';
								} 
								if($zarz_ws_wykaz_prac_poz_niebezp) {
									echo '<tr><td class="td-1">16</td><td class="td-2"> Zarządzenie ws. wykazu prac pożarowo niebezpiecznych. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_wykaz_prac_poz_niebezp.'</td></tr>';
								} 
								if($zarz_ws_powol_komisji_bhp) {
									echo '<tr><td class="td-1">17</td><td class="td-2"> Zarządzenie ws. powołania komisji bhp (dla zakładu pracy powyżej 250 pracowników). </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_powol_komisji_bhp.'</td></tr>';
								} 
								if($zarz_ws_ekspl_wozk_jezd) {
									echo '<tr><td class="td-1">18</td><td class="td-2"> Zarządzenie ws. eksploatacji wózków jezdniowych z napędem silnikowym. <br>Organizacja transportu wewnętrznego. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$zarz_ws_ekspl_wozk_jezd.'</td></tr>';
								} 
								// 19-24 
								if($rejestr_chor_zawod) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr chorób zawodowych i podejrzeń o takie choroby. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$rejestr_chor_zawod.'</td></tr>';
								} 
								if($rej_prac_subst_rak_mutag) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr prac przy których występuje substancja o działaniu rakotwórczym lub mutagennym. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$rej_prac_subst_rak_mutag.'</td></tr>';
								} 
								if($rej_pracownikow_wyk_prac_z_subst_rak_mutag) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr pracowników wykonujących pracę z substancjami o działaniu raktowórczym <br/>lub mutagennym. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$rej_pracownikow_wyk_prac_z_subst_rak_mutag.'</td></tr>';
								} 
								if($rej_prac_szkod_biol_3_lub_4) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr prac przy których występuje szkodliwy czynnik biologiczny grupy 3 lub 4. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$rej_prac_szkod_biol_3_lub_4.'</td></tr>';
								} 
								if($rej_pracownikow_wyk_prac_z_szkod_biol_3_lub_4) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr pracowników wykonujących prace ze szkodliwym czynnikiem biologicznym <br/>z grupy 3 lub 4. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$rej_pracownikow_wyk_prac_z_szkod_biol_3_lub_4.'</td></tr>';
								} 
								if($rej_zasw_lek) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr zaświadczeń lekarskich o braku przeciwskazań do wykonywanej pracy. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$rej_zasw_lek.'</td></tr>';
								} 
								// -------------------------------------------------------------------------------
								// Szkolenia z zakresu PPOŻ.
								// 1-5
								if($szkol_z_gasz_pozarow) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie dla pracowników z zakresu przeciwdziałania powstawania pożarów. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$szkol_z_gasz_pozarow.'</td></tr>';
								} 
								if($szkol_z_ewakuacji) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie dla pracowników z zakresu prowadzenia ewakuacji w zakładzie pracy. </td>
									<td class="td-3">(70,00 PLN/szt):</td><td class="td-4">'.$szkol_z_ewakuacji.'</td></tr>';
								} 
								if($probna_ewak) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Przeprowadzenie próbnej ewakuacji budynku (1 raz na 2 lata). </td>
									<td class="td-3">(450,00 PLN/szt):</td><td class="td-4">'.$probna_ewak.'</td></tr>';
								} 
								if($szkol_obslugi_csp) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie dla pracowników portiernii, dozorców 24h z zakresu obsługi central pożarowych. </td>
									<td class="td-3">(80,00 PLN/szt):</td><td class="td-4">'.$szkol_obslugi_csp.'</td></tr>';
								} 
								if($rej_szkol_bhp) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Rejestr szkoleń z dziedziny BHP. Prowadzenie dokumentacji. </td>
									<td class="td-3">(190,00 PLN/szt):</td><td class="td-4">'.$rej_szkol_bhp.'</td></tr>';
								} 
								// Szkolenia z zakresu BHP.
								// 6-12
								if($szkol_bhp_wstepne) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie wstępne BHP dla pracownika (w przypadku nowozatrudnionych). </td>
									<td class="td-3">(150,00 PLN/szt):</td><td class="td-4">'.$szkol_bhp_wstepne.'</td></tr>';
								} 
								if($szkol_bhp_okr_kier_prac) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracodawców i kierujących pracownikami. </td>
									<td class="td-3">(300,00 PLN/szt):</td><td class="td-4">'.$szkol_bhp_okr_kier_prac.'</td></tr>';
								} 
								if($szkol_bhp_okr_adm) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników administracyjno-biurowych. </td>
									<td class="td-3">(60,00 PLN/szt):</td><td class="td-4">'.$szkol_bhp_okr_adm.'</td></tr>';
								} 
								if($szkol_bhp_okr_inz_tech) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników inżynieryjno-technicznych. </td>
									<td class="td-3">(120,00 PLN/szt):</td><td class="td-4">'.$szkol_bhp_okr_inz_tech.'</td></tr>';
								} 
								if($szkol_bhp_okr_robotn) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników robotniczych. </td>
									<td class="td-3">(60,00 PLN/szt):</td><td class="td-4">'.$szkol_bhp_okr_robotn.'</td></tr>';
								} 
								if($szkol_bhp_okr_prac_sluzby_bhp) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników służby BHP. </td>
									<td class="td-3">(480,00 PLN/szt):</td><td class="td-4">'.$szkol_bhp_okr_prac_sluzby_bhp.'</td></tr>';
								} 
								if($szkol_bhp_okr_prac_niebezp_czynn) {
									echo '<tr><td class="td-1"></td><td class="td-2"> Szkolenie z dziedziny BHP okresowe dla pracowników wykonujących zadania <br>
									szczególnie narażone na działanie niebezpiecznych czynników. </td>
									<td class="td-3">(90,00 PLN/szt):</td><td class="td-4">'.$szkol_bhp_okr_prac_niebezp_czynn.'</td></tr>';
								}  


								echo '<tr><td></td><td>SUMA</td><td>'.$suma.' PLN</td><td></tr>';	
							?>
						</table>
						<br /><a href="offer-calculator-hse.php">Powrót do kalkulatora ofert</a>
					</div>
				</div>
			</section>
			<?php 
				require('footer.php');
			?>
		</main>
	</body>
</html>