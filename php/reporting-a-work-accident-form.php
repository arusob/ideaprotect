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
		<link rel="stylesheet" href="../css/services.css">
		<link rel="stylesheet" href="../css/reportingAccident.css">


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
		
		<style type="text/css">
            .printable { display: none;}
            @media print
            {
                .non-printable { display: none; }
                .printable { display: block;}
            }
        </style>

	</head>
	<body>
		<main class="pr-0 mr-0">
			<!--| NAVIGATION |-->
			<?php
				require('./navbar.php');
			?>
			<!--| CONTENT |-->
			<section class="services-page">
				<div class="row-content bg-con-1 service-offer">
					<h1 class="text-center headline pb-0 mb-0 non-printable">Usługa e-formularz</h1>
					<h5 class="text-center pt-0 mt-0 non-printable">Formularz: Zgłoszenie wypadku przy pracy pracownika. Format A4. </h5>
					
					<div id="printableArea" class="row mx-auto pl-2 pr-2" style="width: calc(210mm*1.0); min-height: calc(297mm*1.0); height: auto; background-color:white; color: black; margin-top: 15mm; padding-bottom: 0; font-family: Times New Roman, Times, serif;">		
							
						<form id="content" class="printableArea">
								
							<!--| SEKCJA 1 | -->
							<div class="col-lg-12 mb-0 pb-0 mx-auto pr-4 pl-4" style="margin-left: 30px;  margin-top: 0; margin-bottom: 0; min-height: 80px;  height: auto;">
								<div style="display: inline-block;">
									<textarea type="text" name="" rows="3" columns="24" style="width: 300px; border: none; border-bottom: 1px black dotted; outline: none;"></textarea><br>
									<label class="mb-0 pb-0 mt-0 pt-0" style="font-size: 10px;">(imię i nazwisko oraz adres zamieszkania poszkodowanego)</label>
								</div>
								<div style="display: inline-block;">
									<span style="margin-right: 70px;"> </span><br>
									<label style="font-size: 10px;"></label>
								</div>
								<div style="display: inline-block;">
									<input type="text" name="" style="width: 180px; border: none; border-bottom: 1px black dotted; outline: none;">,<br>
									<label style="font-size: 10px;"></label>
								</div>
								<div style="display: inline-block;">
									<span>dnia, </span><br>
									<label style="font-size: 10px;"></label>
								</div>
								<div style="display: inline-block;">
									<input type="text" name="" style="width: 100px; border: none; border-bottom: 1px black dotted; outline: none;"><br>
									<label style="font-size: 10px;"></label>
								</div>
								<div style="display: inline-block;">
									<span>r.</span><br>
									<label style="font-size: 10px;"></label>
								</div>
							</div>
								
							<!-- | SEKCJA 2 | -->
							<div class="col-lg-12 text-right pr-4 pl-4" style="min-height: 60px; height: auto;">
								<div>
									<input type="text" name="protocolNumberSecond" style="width: 320px; border: none; border-bottom: 1px black dotted; outline: none;">
								</div>
								<div>
									<input type="text" name="protocolNumberSecond" style="width: 320px; border: none; border-bottom: 1px black dotted; outline: none;">
								</div>
								<div>
									<input type="text" name="protocolNumberSecond" style="width: 320px; border: none; border-bottom: 1px black dotted; outline: none;">
								</div>
								<div>
									<label class="mb-0 pb-0 mt-0 pt-0" style="font-size: 10px;">(oznaczenie pracodawcy lub innej osoby działającej w imieniu pracodawcy)</label>
								</div>
							</div>
								
							<!-- | SEKCJA 3 | -->
							<div class="col-lg-12 text-center" style="min-height: 20px; height: auto;">
								<h6 class="pt-0 pb-0"><b>Zgłoszenie wypadku drodze do pracy (z pracy) </b></h6>
							</div>
							
							<!-- | SEKCJA 4 | -->
							<div class="col-lg-12  pr-4 pl-4" style="min-height: 20px; height: auto;">
								<span>Informuję, że w dniu </span>
								<input type="text" name="protocolNumberThird" style="width: 120px; border: none; border-bottom: 1px black dotted; outline: none;">
								<span> uległem wypadkowi w drodze do pracy (z pracy), który nastapił <br>w nastepujących okolicznościach:  </span>
							</div>

							<!-- | SEKCJA 5 | -->
							<div class="col-lg-12 pr-4 pl-4 text-center" style="min-height: 60px; height: auto; display: inline-block;">
								<textarea type="text" name="protocolNumberFirst" rows="3" columns="24" placeholder=".............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." 
								style="width: 100%; border: none; outline: none; line-height: 1.8;"></textarea>
								<label class="mb-0 pb-0 mt-0 pt-0" style="font-size: 12px;">(oznaczenie pracodawcy lub innej osoby działającej w imieniu pracodawcy)</label>
							</div>

							<!-- | SEKCJA 6 | -->
							<div class="col-lg-12  pr-4 pl-4" style="min-height: 10px; height: auto;">
								<span>W związku z w/w wypadkiem zostalem poszkodowany w następujący sposób: </span>
							</div>

							<!-- | SEKCJA 7 | -->
							<div class="col-lg-12 pr-4 pl-4 text-center" style="min-height: 60px; height: auto;">
								<textarea type="text" name="protocolNumberFirst" rows="3" columns="24" placeholder=".............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." 
								style="width: 100%; border: none; outline: none; line-height: 1.8;"></textarea>
								<label class="mb-0 pb-0 mt-0 pt-0" style="font-size: 12px;">(scharakteryzować następstwa wypadku - rodzaj uszkodzeń organizmu)</label>
							</div>
							
							<!-- | SEKCJA 8 | -->
							<div class="col-lg-12 pr-4 pl-4" style="min-height: 100px; height: auto;">
								<p class="pb-0 mb-0">Świadkami powyższego wypadku są: </p>
								<div>
									<div>
										<span>1. </span><input type="text" name="protocolNumberSecond" style="width: 420px; border: none; border-bottom: 1px black dotted; outline: none;">,<br>
									</div>
									<div class="text-center" style="width: 370px;">
										<label style="font-size: 10px;">(imię i nazwisko, adres zamieszkania)</label>
									</div>
								</div>
								<div>
									<div>
										<span>2. </span><input type="text" name="protocolNumberSecond" style="width: 420px; border: none; border-bottom: 1px black dotted; outline: none;">,<br>
									</div>
									<div class="text-center" style="width: 370px;">
										<label style="font-size: 10px;" >(imię i nazwisko, adres zamieszkania)</label>
									</div>
								</div>
							</div>
								
							<!-- | SEKCJA 8 | -->
							<div class="col-lg-12 pr-4 pl-4" style="min-height: 80px; height: auto;">
								<p class="pb-0 mb-0">Potwierdzeniem zaistniałych uszkodzeń ciała są następujące dokumenty medyczne: </p>
								<div>
									<span>1. </span><input type="text" name="protocolNumberSecond" style="width: 420px; border: none; border-bottom: 1px black dotted; outline: none; line-height: 1.8;">,<br>
								</div>
								<div>
									<span>2. </span><input type="text" name="protocolNumberSecond" style="width: 420px; border: none; border-bottom: 1px black dotted; outline: none; line-height: 1.8;">,<br>
								</div>
							</div>
							
							<!-- | SEKCJA 9 | -->
							<div class="col-lg-12 text-right pr-4 pl-4" style="min-height: 60px; height: auto; width: 180px;">
								
								<div class="ml-auto pl-auto">
									<input type="text" name="protocolNumberSecond" style="width: 240px; border: none; border-bottom: 1px black dotted; outline: none;">
								</div>	
								<div class="ml-auto pl-auto">
									<label class="text-center" style="font-size: 10px; width: 240px;">(podpis poszkodowanego)</label>
								</div>	

							</div>
							
							<!-- | BUTTONS | -->
							<div class="col-lg-12 text-right mb-0 pt-5 pb-5">
								<input class="non-printable pt-0 mt-0 pb-0 mb-0" type="button" onclick="printDiv('printableArea')" value="View Document" />
							</div>
							<!-- | BUTTONS-END | -->
							
						</form>
						<!--  -->
						
					</div>		
					<p  class="non-printable" >Pamparam pam pam </p>
					<!--  -->
					<input class="btn btn-warning non-printable" type="submit" value="Podgląd pdf"><br/><br/>
					<input class="btn btn-info non-printable" type="button" onclick="printDiv('printableArea')" value="View Docuement" style="width: 160px;"/><br/><br/>
					<input class="btn btn-danger non-printable" type="submit" value="Generuj pdf" style="width: 160px;"/>
					
				</div>		
			</section>
			<!-- | FOOTER | -->
			<?php 
				require('footer.php');
			?>
			<!-- | FOOTER-END | -->
		</main>				
		<button id="topBtn"><i class="fas fa-arrow-up non-printable"></i></button>
 		<!--| BOOTSTRAP 5.0 & JAVASCRIPT |-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>				
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="../js/bootstrap/bootstrap.min.js"></script>
		<script src="../js/script-scrolltop.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<!-- |Printable script | -->
		<script>
        function printDiv(printableArea) {
            var printContents = document.getElementsByClassName(printableArea).innerHTML;
            var originalContents = document.body.innerHTML;
            //document.body.innerHTML = printContents;
            window.print(printContents);
            // document.body.innerHTML = originalContents;
        }
    	</script>
	</body>
</html>