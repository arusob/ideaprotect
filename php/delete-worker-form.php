<?php 
    require 'connect.php';
    if (empty($_SESSION["id"])) {
        header("Location: login.php");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM workers WHERE id = ".$_GET["workerId"]);
        $worker =  mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Usuwanie pracownika </title>
		<link rel="icon" type="image/x-icon" href="../img/sygnet-ideaprotect-n-white.png">
		<meta name="description" content="Usługi inżynieryjne">
		<meta name="keywords" content="urządzenia przeciwpożarowe, systemy, instalacje, centrale sygnalizacji pożarowej">
		<meta name="author" content="Arkadiusz Sobczyk">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">

		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/crud.css">

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
        <section class="crud bg-con-1">
            <div class="row row-content">
                <div class="col-lg-12 text-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto crud-form">
                            <div class="crud-title" >
                                <h2 class="pb-3" >Usuwanie pracownika</h2>
                            </div>
                            <div class="pt-3">
                                <?php echo $worker['name'],' ';
                                      echo $worker['surname'];
                                ?>
                            </div>
                            <div class="pt-3 pb-3">Czy na pewno chcesz usunąć tego pracownika ? </div>
                            <form class="row pt-3" action="delete-worker.php" method="post" autocomplete="off">
                                <input type="hidden" name="workerId" value="<?php echo $_GET["workerId"]?>" >
                                <div class="button-area col-lg-12 py-1">
                                    <input class="btn btn-light" type="submit" value="Usuń pracownika" >
                                </div>
                            </form>
                        </div>
                    </div>
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
