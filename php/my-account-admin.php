<?php
	require 'connect.php';
	if (empty($_SESSION["id"] || $_SESSION['name'] != 'admin')) {
		header("Location: login.php");
	} else {
		$result = mysqli_query($conn, 
			"SELECT 
				`users`.`name` company_name,
				`workers`.`name` worker_name,
				`workers`.`surname`,
				`workers`.`position`,
				`workers`.`city`,
				`workers`.`email`,
				`workers`.`phone`
			FROM
				`workers`
			JOIN 
				`users` ON `users`.`id` = `workers`.`company_id`"
		);
		$workers = $result->fetch_all(MYSQLI_ASSOC);
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
    	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> My Account </title>
		<link rel="icon" type="image/x-icon" href="img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">

		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/myaccount.css">
	
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
  	</head>
  	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<section class="my-account-admin bg-con-1">
				<div class="row row-content">
					<div class="col-lg-12 text-center greeting">
						<div class="row text-center">
							<div class="col-lg-6 mx-auto">
								<div class="row row-content">
									<h1 class="col-lg-6">Witaj</h1>
									<h1 class="col-lg-6"><?php echo $_SESSION["name"]; ?></h1>
								</div>
							</div>
						</div>		
					</div>
					<div class="col-lg-12 worker-list">
						<h4> Lista pracowników wyznaczonych na szkolenie </h4>
						<table class="content-table">
							<thead>
								<tr>
									<th class="th-1"> Imię </th>
									<th class="th-2"> Nazwisko </th>
									<th class="th-3"> Stanowisko </th>
									<th class="th-4"> Miasto </th>
									<th class="th-5"> E-mail </th>
									<th class="th-6"> Telefon </th>
									<th class="th-7"> Nazwa firmy </th>
								</tr>
							</thead>
							<tbody>
							<?php 
								foreach($workers as $worker){
									echo '<tr>';
										echo '<td>' .$worker['worker_name'].'</td>';
										echo '<td>' .$worker['surname'].'</td>';
										echo '<td>' .$worker['position'].'</td>';
										echo '<td>' .$worker['city'].'</td>';
										echo '<td>' .$worker['email'].'</td>';
										echo '<td>' .$worker['phone'].'</td>';
										echo '<td>' .$worker['company_name'].'</td>';
									echo '</tr>';
								}
							?>
							</tbody>
						</table>
					</div>

				</div>
			</section>
		</main>
		<?php 
			require('footer.php');
		?>
		<button id="topBtn"><i class="fas fa-arrow-up"></i></button>
  	</body>
</html>
