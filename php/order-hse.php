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

		<link rel="stylesheet" href="../css/bootstrap.min.css">
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

	</head>
	<body>
		<main class="pr-0 mr-0">
			<!--| NAVIGATION |-->
			<?php
			require('./navbar.php');
			?>

			<?php 
				
				$hydrant_zewn_podz_DN80 = !empty($_POST['hydrant_zewn_podz_DN80']) ? $_POST['hydrant_zewn_podz_DN80'] : 0;
				$hydrant_zewn_nadzie_DN100 = !empty($_POST['hydrant_zewn_nadzie_DN100']) ? $_POST['hydrant_zewn_nadzie_DN100'] : 0;
				$hydrant_zewn_nadzie_DN80 = !empty($_POST['hydrant_zewn_nadzie_DN80']) ? $_POST['hydrant_zewn_nadzie_DN80'] : 0;
				$hydrant_wewn_DN52 = !empty($_POST['hydrant_wewn_DN52']) ? $_POST['hydrant_wewn_DN52'] : 0;
				$hydrant_wewn_DN33 = !empty($_POST['hydrant_wewn_DN33']) ? $_POST['hydrant_wewn_DN33'] : 0;
				$hydrant_wewn_DN25 = !empty($_POST['hydrant_wewn_DN25']) ? $_POST['hydrant_wewn_DN25'] : 0;


				$suma = (70.00 * $hydrant_zewn_podz_DN80) + 
				(65.00 * $hydrant_zewn_nadzie_DN100) + 
				(60.00 * $hydrant_zewn_nadzie_DN80) + 
				(55.00 * $hydrant_wewn_DN52) + 
				(50.00 * $hydrant_wewn_DN33) + 
				(55.00 * $hydrant_wewn_DN25);
				
				?>

				<!--| CONTENT |-->
				<section class="calculator-page summary-page">
					<div class="row-content bg-con-1 service-offer pt-5 pb-5" >
						<div class="calc-result" >
							<h1 class="headline text-center" style="color: black;">Podsumowanie kosztorysu usługowego BHP</h1>
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
								if($hydrant_zewn_podz_DN80) {
									echo '<tr><td class="td-1"></td><td class="td-2">Hydranty zewnętrzne podziemne DN 80. Badanie wydajności i ciśnienia.</td>
									<td class="td-3">(70,00 PLN/szt):</td><td class="td-4">'.$hydrant_zewn_podz_DN80.'</td></tr>';
								} 
								if($hydrant_zewn_nadzie_DN100) {
									echo '<tr><td class="td-1"></td><td class="td-2">Hydranty zewnętrzne nadziemne DN 100. Badanie wydajności i ciśnienia.</td>
									<td class="td-3">(65,00 PLN/szt):</td><td class="td-4">'.$hydrant_zewn_nadzie_DN100.'</td></tr>';
								} 
								if($hydrant_zewn_nadzie_DN80) {
									echo '<tr><td class="td-1"></td><td class="td-2">Hydranty zewnętrzne nadziemne DN 80. Badanie wydajności i ciśnienia.</td>
									<td class="td-3">(60,00 PLN/szt):</td><td class="td-4">'.$hydrant_zewn_nadzie_DN80.'</td></tr>';
								} 
								if($hydrant_wewn_DN52) {
									echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 52. Badanie wydajności i ciśnienia.</td> 
									<td class="td-3">(55,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN52.'</td></tr>';
								} 
								if($hydrant_wewn_DN33) {
									echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 33. Badanie wydajności i ciśnienia.</td>
									<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN33.'</td></tr>';
								} 
								if($hydrant_wewn_DN25 ) {
									echo '<tr><td class="td-1"></td><td class="td-2">Hydranty wewnętrzne DN 25. Badanie wydajności i ciśnienia.</td>
									<td class="td-3">(50,00 PLN/szt):</td><td class="td-4">'.$hydrant_wewn_DN25.'</td></tr>';
								} 
								echo '<tr><td></td><td>SUMA</td><td>'.$suma.' PLN</td><td></tr>';	
								?>
							</table>
							<br /><a href="offer-calculator-hse.php">Powrót do kalkulatora ofert</a>
						</div>
					</div>
				</section>

			<!-- | FOOTER | -->
			<?php 
			require('footer.php');
			?>
			<!-- | FOOTER-END | -->
		</main>
	</body>

<script src="js/bootstrap/bootstrap.min.js"></script>
</html>