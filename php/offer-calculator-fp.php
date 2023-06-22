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
	</head>
	<body>
		<main class="pr-0 mr-0">
			<!--| NAVIGATION |-->
			<?php
				require('./navbar.php');
				?>
			<!--| CONTENT |-->
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
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 7. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 8. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 9. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 10. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
											</tbody>
										</table>
										
										<h4> Gaśnice, agregaty gaśnicze. </h4>
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
													<td class="td-1"> 11. </td>
													<td class="td-2">Przegląd  </td>
													<td class="td-3"> 70,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 12. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 65,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 13. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 14. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 55,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 15. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 16. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
											</tbody>
										</table>

										<h4> Systemy oddymiania, drzwi przeciwpożarowe, kurtyny, grodzie. </h4>
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
													<td class="td-1"> 17. </td>
													<td class="td-2">Przegląd  </td>
													<td class="td-3"> 70,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 18. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 65,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 19. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 20. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 55,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 21. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 22. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 50,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
											</tbody>
										</table>

										<h4> System sygnalizacji pożarowej. Dźwiękowy system ostrzegawczy. </h4>
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
													<td class="td-1"> 23. </td>
													<td class="td-2">Przegląd  </td>
													<td class="td-3"> 70,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 24. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 65,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 25. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 26. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 55,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
											</tbody>
										</table>

										<h4> Oświetlenie awaryjne i ewakuacyjne. Przeciwpożarowy wyłącznik prądu. </h4>
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
													<td class="td-1"> 27. </td>
													<td class="td-2">Przegląd  </td>
													<td class="td-3"> 70,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 28. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 65,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 29. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 30. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 55,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 31. </td>
													<td class="td-2"> Przegląd  </td>
													<td class="td-3"> 55,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
											</tbody>
										</table>


									</div>

									<div id="tab-2" class="b-tab">
										<h4> Dokumentacja techniczna i projektowa dot. ochrony przeciwpożarowej: 2 </h4>
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
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Przegląd hydrantów zewnętrznych nadziemnych (DN100). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 65,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
											</tbody>
										</table>
									</div>

									<div id="tab-3" class="b-tab">
										<h4> Montaż hydrantów: 3 </h4>
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
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 2. </td>
													<td class="td-2"> Przegląd hydrantów zewnętrznych nadziemnych (DN100). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 65,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
												<tr>
													<td class="td-1"> 3. </td>
													<td class="td-2"> Przegląd hydrantów zewnętrznych nadziemnych (DN80). Badanie wyd. i ciśnienia. </td>
													<td class="td-3"> 60,00 / szt. </td>
													<td class="td-4"><input type="number" min="0" name=""></td>
												</tr>
											</tbody>
										</table>
									</div>
											

								</div>
									
								<!-- BUTTON -->
								<div class="text-right mb-0 pt-5 pb-5">
									
									<input class="rabat" type="checkbox" value="Nalicz rabat"> Nalicz rabat
									<input class="mr-5" type="number" value="Wpisz rabat" min="0" max="35">
									<input class="btn btn-success" type="submit" value="Podsumuj zamówienie">
								</div>
								<!-- END-BUTTON -->
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- | FOOTER | -->
			<?php 
				require('footer.php');
			?>
			<!-- | FOOTER-END | -->
		</main>				
		<button id="topBtn"><i class="fas fa-arrow-up"></i></button>
 		<!--| BOOTSTRAP 5.0 & JAVASCRIPT |-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>				
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="../js/bootstrap/bootstrap.min.js"></script>
		<script src="../js/script-scrolltop.js"></script>
		<script src="../js/navigation-horizontal-tabs.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	</body>
</html>