<?php
require 'php/connect.php';
if (!empty($_SESSION["id"])){
  header("Location: php/my-account.php");
}
if (isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO users VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      header('Location: login.php?created-account=true');
    }
    else{
      echo "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Registration </title>
		<link rel="icon" type="image/x-icon" href="img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">

		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/navbar.css">
		<link rel="stylesheet" href="css/registration.css">
		<link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/polityka-cookies.css">

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
				require('php/navbar.php');
			?>
			<!--| CONTENT |-->
      <section class="register bg-con-1">
        <div class="row row-content">
          <div class="col-lg-12 text-center">
            <div class="row">
              <div class="col-lg-5 mx-auto register-form">
                <div class="register-title">
                  <h2 class="pb-3">Rejestracja</h2>
                </div>
                <form class="row pt-5" action="" method="post" autocomplete="off">
                  <div class="row py-2 pr-3">
                    <label class="col-5" for="name">Name : </label>
                    <input class="col-7" type="text" name="name" id = "name" required value="" placeholder="Wpisz nazwę">
                  </div>
                  <div class="row py-2 pr-3">
                    <label class="col-5" for="username">Username : </label>
                    <input class="col-7" type="text" name="username" id = "username" required value="" placeholder="Wpisz nazwę użytkownika">
                  </div>
                  <div class="row py-2 pr-3">
                    <label class="col-5" for="email">Email : </label>
                    <input class="col-7" type="email" name="email" id = "email" required value="" placeholder="Wpisz e-mail"> 
                  </div>
                  <div class="row py-2 pr-3">
                    <label class="col-5" for="password">Password : </label>
                    <input class="col-7" type="password" name="password" id = "password" required value="" placeholder="Wpisz hasło">
                  </div>
                  <div class="row py-2 pr-3">
                    <label class="col-5" for="confirmpassword">Confirm Password : </label>
                    <input class="col-7" type="password" name="confirmpassword" id = "confirmpassword" required value="" placeholder="Powtórz hasło">
                  </div>
                  <div class="button-area col-12 py-1">
                    <button type="submit" name="submit">Register</button>
                  </div>
                </form>
                <br>
                Posiadasz konto? <a href="php/login.php"> Login</a>
              </div>
            </div>
          </div>
        </div>
      </section>

			<!-- | COOKIES - POPUP |  -->
			<div class="cookie-container text-justify-center">
				<div class="row cookie-popup-inside">
					<div class="col-sm-8 text-area-politics">
						<h3 class="font-weight-bold"> Polityka prywatności i polityka cookies.</h3>
						<p>
							Strona korzysta z plików cookie w celu realizacji usług zgodnie z <a href="php/polityka-prywatnosci.php">Polityką prywatności</a>
							oraz określoną <a href="php/polityka-cookies.php"> Polityką cookies. </a> 
							Możesz określić warunki przechowywania lub dostępu do cookie w Twojej przeglądarce lub konfiguracji usługi.
						</p>
					</div>	
					<div class=" col-sm-4 buttons-area">
						<div class="row">
							<button class="col-6 col-md-12 col-xxl-12 accept-btn">
								Akceptuj
							</button>
							<button class="col-6 col-md-12 col-xxl-12 cancel-btn">
								Odrzuć				
							</button>
						</div>
					</div>
				</div>
			</div>
    </main>
    <!-- | FOOTER | -->
    <?php 
    require('php/footer.php');
    ?>
    <!-- | FOOTER-END | -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
 		<!--| BOOTSTRAP 5.0 & JAVASCRIPT |-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>					
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
		<script src="js/script-scrolltop.js"></script>
		<script src="js/cookies-popup.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
  </body>
</html>
