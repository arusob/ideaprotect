<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php 
            if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                echo '<link rel="stylesheet" href="css/navbar.css">';
            } else {
                echo '<link rel="stylesheet" href="../css/navbar.css">';
            }
        ?>
    </head>
    <header class="main-header">
        <nav class="navbar navbar-dark navbar-expand-xl xl-1440 row">
            <?php 
                if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                    echo '<a class="navbar-brand" href="index.php">';
                } else {
                    echo '<a class="navbar-brand" href="../index.php">';
                }
            ?>
                <div>
                <?php 
                    if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                        echo '<img src="img/sygnet-ideaprotect-n-white.png" width="48" height="auto" class="d-inline-block sygnet" alt="ideaprotect"/>';
                    } else {
                        echo '<img src="../img/sygnet-ideaprotect-n-white.png" width="48" height="auto" class="d-inline-block sygnet" alt="ideaprotect"/>';
                    }
                ?>
                    
                </div>
                <div class="logotype">
                    <div class="wordmark">
                        ideaprotect
                    </div>
                    <div class="tagline">
                        inżynieria pożarowa & BHP
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przelacznik nawigacji">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a class="nav-link text-white" href="php/o-nas.php">';
                        } else {
                            echo '<a class="nav-link text-white" href="o-nas.php">';
                        }
                    ?>o nas</a>
                    </li>	
                    <li class="nav-item">
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a class="nav-link text-white" href="php/uslugi.php">';
                        } else {
                            echo '<a class="nav-link text-white" href="uslugi.php">';
                        }
                    ?>usługi</a>
                    </li>	
                    <li class="nav-item">
                    <?php 
                        if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                            echo '<a class="nav-link text-white" href="php/kontakt.php">';
                        } else {
                            echo '<a class="nav-link text-white" href="kontakt.php">';
                        }
                    ?>kontakt</a>
                    </li>
                    <li class="nav-item">
                    <?php 
                        if(!empty($_SESSION['id'])){
                            echo '<span><a href="php/logout.php">wyloguj</a></span>';
                        }else {
                            if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
                                echo '<a class="nav-link text-white" href="php/login.php">zaloguj</a>';
                            } else {
                                echo '<a class="nav-link text-white" href="../login.php">zaloguj</a>';
                            }
                            // echo '<a class="nav-link text-white" href="php/login.php">zaloguj</a>';
                        }
                    ?>
                    </li>
                </ul>
            </div>
        </nav>
        <script src="js/bootstrap/bootstrap.min.js"></script>	
    </header>
</html>