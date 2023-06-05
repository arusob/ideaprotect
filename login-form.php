<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> ideaprotect | logowanie </title>
		<link rel="icon" type="image/x-icon" href="img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="navbar.css">
		<link rel="stylesheet" href="login.css">
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
			<section class="contact-page">
				<div class="row row-content bg-con-1">					
					<div class="col-12 col-md-12 d-block">
						<h1 class="text-center headline font-weight-bold"> Logowanie </h1>
					</div>
					<div class="col-12 col-md-12 container-message">
						<div class="row contact-area">
							<div class="col-12 col-lg-8 box-message text-center mx-auto">
								<div class="row wrapper">
									<header class="col-12 text-center"> Zaloguj </header>
									<form action="#">
										<div class="row dbl-field">
											<div class="col-12 col-xl-6 field field-name mx-auto">
												<input type="text" name="name" placeholder="Nazwa użytkownika" required>
											</div>
										</div>
										<div class="row dbl-field">
											<div class="col-12 col-xl-6 field mx-auto">
												<input type="text" name="password" placeholder="Hasło" required>
											</div>
										</div>
										<div class="row button-area mx-auto">
											<button class="col-3 col-xxl-3 mx-auto" type="submit"> Zaloguj </button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="cookie-container text-justify-center">
				<div class="row cookie-popup-inside">
					<div class="col-sm-9 text-area-politics">
						<h3 class="font-weight-bold"> Polityka prywatności i polityka cookies.</h3>
						<p>
							Strona korzysta z plików cookie w celu realizacji usług zgodnie z <a href="polityka-prywatnosci.html">Polityką prywatności</a>
							oraz określoną <a href="polityka-cookies.html"> Polityką cookies. </a> 
							Możesz określić warunki przechowywania lub dostępu do cookie w Twojej przeglądarce lub konfiguracji usługi.
						</p>
					</div>	
					<div class=" col-sm-3 buttons-area">
						<div class="row">
							<button class="col-12 col-xl-5 accept-btn">
								Akceptuj
							</button>
							<button class="col-12 col-xl-5 cancel-btn">
								Odrzuć				
							</button>
						</div>
					</div>
				</div>
			</div>
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
		<script src="js/bootstrap.min.js"></script>
		<script src="script-scrolltop.js"></script>
		<script src="cookies-popup.js"></script>
		<script src="script-contact.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</body>
</html>