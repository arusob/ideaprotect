<?php
    require 'connect.php';
    if (!empty($_SESSION["id"])) {
        header("Location: my-account.php");
    }  
    $validPassword = true;
    if (isset($_POST["submit"])) {
        if(empty($_POST['username'])) {
            echo "<script> alert('Brak nazwy użytkownika !'); </script>";
            header('Location: login.php');
        }
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $username = htmlspecialchars($_POST["username"], ENT_QUOTES);
        $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
       
        if (!empty($_POST['password']) && !empty($_POST['confirmpassword'])) {
            if (strlen($_POST['password']) >= 8 && preg_match('/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[A-Z]).+$/', $_POST['password'])) {
                $password = hash('sha256', $_POST["password"]);
                $confirmpassword =  hash('sha256', $_POST["confirmpassword"]);
                $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
                if (mysqli_num_rows($duplicate) > 0) {
                    echo "<script> alert('Username or Email Has Already Taken'); </script>";
                } else {
                    if ($password == $confirmpassword) {
                        $query = "INSERT INTO users VALUES('','$name','$username','$email','$password')";
                        mysqli_query($conn, $query);
                        header('Location: login.php?created-account=true');
                    } else {
                        echo "<script> alert('Password Does Not Match'); </script>";
                    }
                }
            } else {
                $validPassword = false;
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

		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/registration.css">
        <link rel="stylesheet" href="../css/cookies-policy.css">

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
		<script defer src="../js/cookies-popup.js"></script>
  </head>
  <body>
    <main class="pr-0 mr-0">
        <?php
            require('navbar.php');
        ?>
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
                        <label class="col-5 my-auto" for="name">Nazwa firmy : </label>
                        <input class="col-7" type="text" name="name" id = "name" required value="" placeholder="Wpisz nazwę">
                    </div>
                    <div class="row py-2 pr-3">
                        <label class="col-5 my-auto" for="username">Nazwa użytkownika : </label>
                        <input class="col-7" type="text" name="username" id = "username" required value="" placeholder="Wpisz nazwę użytkownika">
                    </div>
                    <div class="row py-2 pr-3">
                        <label class="col-5 my-auto" for="email">Email : </label>
                        <input class="col-7" type="email" name="email" id = "email" required value="" placeholder="Wpisz e-mail"> 
                    </div>
                    <div class="row py-2 pr-3">
                        <label class="col-5 my-auto" for="password">Hasło : </label>
                        <input class="col-7" type="password" name="password" id = "password" required value="" placeholder="Wpisz hasło">
                    </div>
                    <div class="row py-2 pr-3">
                        <label class="col-5 my-auto" for="confirmpassword">Potwierdź hasło : </label>
                        <input class="col-7" type="password" name="confirmpassword" id = "confirmpassword" required value="" placeholder="Powtórz hasło">
                    </div>
                    <?php
                        echo $validPassword == false ? '<div class="short-password-info">Za krótkie hasło! lub brak dużej litery lub brak znaku specjalnego</div>' : ''; 
                    ?>
                    <div class="button-area col-12 py-1">
                        <button type="submit" name="submit">Zarerejstruj</button>
                    </div>
                    </form>
                    <p class="mt-3"><span>Posiadasz konto? </span><a href="login.php">Zaloguj się</a></p>
                    <div class="row">
                        <a href="../index.php" class="mx-auto">Wróć na stronę główną </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- | COOKIES |  -->
        <div class="cookie-container text-justify-center">
            <div class="row cookie-popup-inside">
                <div class="col-sm-8 text-area-politics">
                    <h3 class="font-weight-bold"> Polityka prywatności i polityka cookies.</h3>
                    <p>
                        Strona korzysta z plików cookie w celu realizacji usług zgodnie z <a href="php/privacy-policy.php">Polityką prywatności</a>
                        oraz określoną <a href="php/cookies-policy.php"> Polityką cookies. </a> 
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
    <?php 
        require('footer.php');
    ?>
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
  </body>
</html>
