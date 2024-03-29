<?php
    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']) {
        require 'php/connect.php';
    } else {
        require 'connect.php';
    }

    if (!empty($_SESSION["id"])) {
        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
            header("Location: php/my-account.php");
        } else {
            header("Location: my-account.php");
        }
    }

    if (isset($_POST["submit"])) {
        $usernameemail = htmlspecialchars($_POST["usernameemail"], ENT_QUOTES);
        $password = hash('sha256', htmlspecialchars($_POST["password"], ENT_QUOTES));
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$usernameemail' OR email = '$usernameemail'");
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            if($password == $row['password']) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["name"];
            if($_SESSION["name"] == 'admin' ) {
                header("Location: my-account-admin.php");
            } else {
                header("Location: my-account.php");
                }
            }
            else {
                echo "<script> alert('Wrong Password'); </script>";
            }
        } else {
            echo "<script> alert('User Not Registered'); </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Login </title>
		<link rel="icon" type="image/x-icon" href="img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">

		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/login.css">
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
                require('./navbar.php');
            ?>
            <section class="login bg-con-1">
                <div class="row row-content">
                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <div class="col-lg-5 mx-auto login-form" >
                                <div class="login-title" >
                                    <h2 class="pb-3" >Logowanie</h2>
                                </div>
                                <div>
                                    <form class="row pt-5 pr-3 pl-3" action="" method="post" autocomplete="off">
                                        <div class="row pb-3">
                                            <label class="col-5 my-auto" for="usernameemail">Nazwa użytkownika <br>lub e-mail : </label>
                                            <input class="col-7" type="text" name="usernameemail" id = "usernameemail" required value="" placeholder="Wpisz nazwę lub e-mail">
                                        </div>
                                        <div class="row pb-3">
                                            <label class="col-5 my-auto" for="password">Hasło : </label>
                                            <input class="col-7" type="password" name="password" id = "password" required value="" placeholder="Wpisz hasło">
                                        </div>
                                        <div class="button-area col-12">
                                            <button type="submit" name="submit">Zaloguj</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 mb-3">Nie posiadasz konta? 
                                        <a href="registration.php">Rejestracja</a>
                                        <div class="row mt-2">
                                            <a href="../index.php" class="mx-auto">Wróć na stronę główną </a>
                                        </div>
                                    </div>
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
                            Strona korzysta z plików cookie w celu realizacji usług zgodnie z <a href="privacy-policy.php">Polityką prywatności</a>
                            oraz określoną <a href="cookies-policy.php"> Polityką cookies. </a> 
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
