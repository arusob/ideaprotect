<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <?php 
            if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                echo '<link rel="stylesheet" href="css/footer.css">';
            } else {
                echo '<link rel="stylesheet" href="../css/footer.css">';
            }
        ?>        
    </head> 
    <footer class="main-footer non-printable">	
        <div class="row d-block footer-content">
            <div class="row footer-menu">					
                <div class="col-12 col-sm-6 col-xl-3 f-col">
                <h6 class="footer-h5">firma</h6>
                <div class="footer-link">
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="index.php">strona główna</a>';
                    } else {
                        echo '<a href="../index.php"></a>';
                    }
                ?> 
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/about-us.php"> o nas </a>';
                    } else {
                        echo '<a href="../php/about-us.php"> o nas </a>';
                    }
                ?>
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/services.php"> usługi </a>';
                    } else {
                        echo '<a href="../php/services.php"> usługi </a>';
                    }
                ?> 
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/contact.php"> kontakt </a>';
                    } else {
                        echo '<a href="../php/contact.php"> kontakt </a>';
                    }
                ?>
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/login.php"> zaloguj </a>';
                    } else {
                        echo '<a href="../php/login.php"> zaloguj </a>';
                    }
                ?>
                </div>
            </div>					
            <div class="col-12 col-sm-6 col-xl-3 f-col">
                <h6 class="footer-h5">inzynieria pożarowa</h6>
                <div class="footer-link">
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/services.php">przeglądy ppoż. </a>';
                    } else {
                        echo '<a href="../php/services.php">przeglądy ppoż. </a>';
                    }
                ?>
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/services.php">hydranty, gaśnice </a>';
                    } else {
                        echo '<a href="../php/services.php">hydranty, gaśnice </a>';
                    }
                ?> 
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/services.php"> instrukcja bezp. poż. </a>';
                    } else {
                        echo '<a href="../php/services.php"> instrukcja bezp. poż. </a>';
                    }
                ?> 
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/services.php">oświetlenie awaryjne </a>';
                    } else {
                        echo '<a href="../php/services.php">oświetlenie awaryjne </a>';
                    }
                ?>
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/services.php"> analiza ppoż. </a>';
                    } else {
                        echo '<a href="../php/services.php"> analiza ppoż. </a>';
                    }
                ?>
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<a href="php/services.php"> przegląd syst. oddym. </a>';
                    } else {
                        echo '<a href="../php/services.php"> przegląd syst. oddym. </a>';
                    }
                ?> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 f-col">
                <h6 class="footer-h5">usługi bhp</h6>
                <div class="footer-link">
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a href="php/services.php"> analiza bhp </a>';
                        } else {
                            echo '<a href="../php/services.php"> analiza bhp </a>';
                        }
                    ?> 
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a href="php/services.php">ocena ryzyka </a>';
                        } else {
                            echo '<a href="../php/services.php">ocena ryzyka </a>';
                        }
                    ?>
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a href="php/services.php"> dokumentacja </a>';
                        } else {
                            echo '<a href="../php/services.php"> dokumentacja </a>';
                        }
                    ?>
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a href="php/services.php"> rejestry </a>';
                        } else {
                            echo '<a href="../php/services.php"> rejestry </a>';
                        }
                    ?>
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a href="php/services.php">';
                        } else {
                            echo '<a href="../php/services.php">';
                        }
                    ?> szkolenia bhp </a>
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a href="php/services.php">pierwsza pomoc </a>';
                        } else {
                            echo '<a href="../php/services.php">pierwsza pomoc </a>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 f-col">
                <h6 class="footer-h5">dane adresowe</h6>
                <div class="footer-link">
                    <a href="https://www.google.com/maps/place/Prymasa+Augusta+Hlonda+4b,+02-972+Warszawa/@52.1859223,21.0519289,12.75z/data=!4m5!3m4!1s0x47192d6763700001:0x11916d19fffb9c78!8m2!3d52.1607343!4d21.0682476" target="_blank">ul. Prymasa Augusta Hlonda 4b</a>
                    <div>	
                        <p class="mb-0">02-972 Warszawa</p>
                        <p class="mb-0">woj. mazowieckie</p> 
                        <p class="mb-0">NIP: 000-000-00-00</p> 
                        <p class="mb-0">REGON: 1223456798</p> 
                    </div>
                </div>
            </div>	
        </div>
        <div class="row">

            <div class="row footer-bottom">
                <div class="col-lg-4 footer-button-left">
                    <div class="text-rule">Copyright © 2023 - ideaprotect. All rights reserved</div>
                </div>

                <div class="col-lg-6 footer-button-center">
                    <div class="row">
                        <div class="col-md-6 text-law">
                            <?php 
                                $url = "/ideaprotect/index.php"==$_SERVER["PHP_SELF"] ? "php/privacy-policy.php" : "../php/privacy-policy.php";
                                echo '<a class="text-label" href="'.$url.'"> Polityka prywatności </a>';    
                            ?>	
                        </div>
                        <div class="col-md-6 text-law">
                            <?php 
                            $url = "/ideaprotect/index.php" == $_SERVER['PHP_SELF'] ?  "php/cookies-policy.php" : "../php/cookies-policy.php";
                                echo '<a class="text-label" href="'.$url.'"> Polityka cookies </a>';

                                // if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                                //     echo '<a class="text-label" href="php/cookies-policy.php" > Polityka cookies </a>';
                                // } else {
                                //     echo '<a class="text-label" href="../php/cookies-policy.php" > Polityka cookies </a>';
                                // }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-12 col-xs-12 footer-social-icons">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/ideaprotect" class="social-icon" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/ideaprotect/about/?viewAsMember=true" class="social-icon" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC220CnGbppJtW_eWuZU7-CA" class="social-icon" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
</html>