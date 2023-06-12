<?php
require 'conect.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
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
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="navbar.css">
		<link rel="stylesheet" href="my-account.css">
		<link rel="stylesheet" href="footer.css">
    	<link rel="stylesheet" href="polityka-cookies.css">
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
      require('navbar.php');
    ?>
    <!--| CONTENT |-->
	<section class="my-account bg-con-1">
		<div class="row row-content">
			<div class="col-lg-12 text-center" style="height: 50px">
				<div class="logout text-right mb-0">
					<a class="" href="logout.php">wyloguj</a>
				</div>
				<br>
				<div class="row text-center">
					<div class="col-lg-6 mx-auto">
						<div class="row row-content">
							<h1 class="col-lg-6">Witaj</h1>
							<h1 class="col-lg-6"><?php echo $row["name"]; ?></h1>
						</div>
					</div>
				</div>		
				<br><br>
			</div>
			<div class="col-lg-12" style="margin-top: 60px;">
				<br>
				<button class="btn btn-primary">Dodaj pracownika +</button>
				<br><br>
				<h4> Lista pracowników wyznaczonych na szkolenie </h4>
				<table class="content-table">
					<thead>
						<tr>
							<th class="th-1"> Lp. </th>
							<th class="th-2"> Imię </th>
							<th class="th-3"> Nazwisko </th>
							<th class="th-4"> Stanowisko </th>
							<th class="th-5"> Miasto </th>
							<th class="th-6"> E-mail </th>
							<th class="th-7"> Telefon </th>
							<th class="th-8"> Nazwa firmy </th>
							<th class="th-9"> Edit</th>
							<th class="th-10"> Delete </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> 1. </td>
							<td> Janek </td>
							<td> Nosal</td>
							<td> Szef zmiany </td>
							<td> Warszawa </td>
							<td> janek@gmail.com </td>
							<td> 508 458 636 </td>
							<td> McDonald </td>
							<td><button class="btn btn-success">Edit</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
						<tr>
						<td> 2. </td>
							<td> Marek </td>
							<td> Latecki </td>
							<td> Kelner </td>
							<td> Warszawa </td>
							<td> marek@gmail.com </td>
							<td> 511 252 363 </td>
							<td> McDonald </td>
							<td><button class="btn btn-success">Edit</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
						<tr>
						<td> 3. </td>
							<td> Stefan </td>
							<td> Batory </td>
							<td> Król RP </td>
							<td> Lublin </td>
							<td> stefan@gmail.com </td>
							<td> 589 585 637 </td>
							<td> Rząd RP </td>
							<td><button class="btn btn-success">Edit</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
						<tr>
						<td> 4. </td>
							<td> Tadeusz </td>
							<td> Lach </td>
							<td> Mechanik </td>
							<td> Kraków </td>
							<td> tadek@gmail.com </td>
							<td> 507 112 544 </td>
							<td> Straż </td>
							<td><button class="btn btn-success">Edit</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>



  </main>
    <!-- | FOOTER | -->
    <?php 
      require('footer.php');
    ?>
    <!-- | FOOTER-END | -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
 		<!--| BOOTSTRAP 5.0 & JAVASCRIPT |-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>					
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="script-scrolltop.js"></script>
		<script src="cookies-popup.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
  </body>
  </body>
</html>
