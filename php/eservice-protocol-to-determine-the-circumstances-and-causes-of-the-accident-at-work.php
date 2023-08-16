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
		<link rel="stylesheet" href="../css/eservices.css">
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
		<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script defer src="../js/bootstrap/bootstrap.min.js"></script>
		<script defer src="../js/script-scrolltop.js"></script>
		<script defer src="../js/print-document.js"></script>
		<script defer src="../js/striked-content.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
	</head>
	<body>
		<main class="pr-0 mr-0">
			<?php
				require('./navbar.php');
			?>
			<section class="protocol-to-determine-the-circumstances">
				<div class="bg-con-1 service-offer">
					<h1 class="text-center headline non-printable"> Usługa e-formularz </h1>
					<h5 class="text-center pt-3 pb-3 non-printable"> Protokół ustalenia okoliczności i przyczyn wypadku przy pracy. </h5>
					<div id="printableArea" class="mx-auto">		
						<form id="content" class="printableArea px-auto mx-auto">
							<div class="white-paper mb-5 pb-4">
								<div class="col first-section"></div>
								<div class="col text-center second-section">
									<div><b>
										<span> Protokół nr </span>
										<input type="text" name="">
										<input type="text" name="">
										<input type="text" name="">
										/ 
										<input type="text" name="">
										<input type="text" name="">
										<input type="text" name="">
										<input type="text" name="">
										r. </b>
									</div>
									<div>
										<b> ustalenia okoliczności i przyczyn wypadku przy pracy </b>
									</div>
								</div>
								<div class="col-lg-12 pt-5 third-section">
									<p> 1. Dane pracodawcy:  </p>
									<div class="employer">
										<input class="" name="">
										<label class="" name="">nazwa lub imię i nazwisko pracodawcy</label>
										<input class="" name="">
										<label class="" name="">nazwa lub imię i nazwisko pracodawcy</label>
									</div>
									<div class="employer-data">
										<div class="nip">
											<div class="nip-data">
												<input type="text" name="nipOne">
												<input type="text" name="nipTwo">
												<input type="text" name="nipThree">
												<input type="text" name="nipFour">
												<input type="text" name="nipFive">
												<input type="text" name="nipSix">
												<input type="text" name="nipSeven">
												<input type="text" name="nipEight">
												<input type="text" name="nipNine">
												<input type="text" name="nipTen">
											</div>
											<div class="nip-description text-center">
												<label> NIP <sup>1)</sup></label>
											</div>
										</div>
										<div class="distnace-three"></div>
										<div class="pesel">
											<div class="pesel-data">
												<input type="text" name="peselOne">
												<input type="text" name="peselTwo">
												<input type="text" name="peselThree">
												<input type="text" name="peselFour">
												<input type="text" name="peselFive">
												<input type="text" name="peselSix">
												<input type="text" name="peselSeven">
												<input type="text" name="peselEight">
												<input type="text" name="peselNine">
												<input type="text" name="peselTen">
												<input type="text" name="peselEleven">
											</div>
											<div class="pesel-description text-center">
												<label>PESEL</label>
											</div>
										</div>
									</div>
									<div class="employers-document">
										<input class="" name="">
										<label class="" name="">numer dowodu osobistego albo inny dokument potwierdzający tożsamość pracodawcy</label>
									</div>
									<div class="kod-pkd pt-2 pb-2">
										<div class="pkd-data">
											<input type="text" name="pkdOne">
											<input type="text" name="pkdTwo">
											<input type="text" name="pkdThree">
											<input type="text" name="pkdFour">
											<input type="text" name="pkdFive">
										</div>
										<div class="pkd-description text-center">
											<label>Kod PKD</label>
										</div>
									</div>

								</div>
								<div class="col-lg-12 fourth-section">
									<p> 2. Zespół powypadkowy w składzie: </p>
									<div class="team">
										<div>
											<div class="person-data">
												<p class="no-distance"> 1) </p>
												<input class="person">
												<p class="distance-four"></p>
												<input class="function">
											</div>
											<div class="person-description">
												<p class="no-distance text-center">   </p>
												<label class="person text-center"> imię i nazwisko </label>
												<p class="distance-four"></p>
												<label class="function text-center"> funkcja </label>
											</div>
										</div>
										<div>
											<div class="person-data">
												<p class="no-distance"> 2) </p>
												<input class="person">
												<p class="distance-four"></p>
												<input class="function">
											</div>
											<div class="person-description">
												<p class="no-distance text-center">   </p>
												<label class="person text-center"> imię i nazwisko </label>
												<p class="distance-four"></p>
												<label class="function text-center"> funkcja </label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 fifth-section">

									<div class="date-of-arrangements verse">
										<p> dokonał w dniach od </p>
										<input class="day-from">
										<p> do </p>
										<input class="day-to">
										<p> ustaleń dotyczących okoliczności i przyczyn </p>
									</div>
									<div class="time-of-accident verse">
										<p> wypadku przy pracy, jakiemu w dniu </p>
										<input class="day-accident">
										<p> o godz.: </p>
										<input class="hour-accident">
										<p> uległ(a) </p>
									</div>
									<div class="person-name verse">
										<p> Pan(i) </p>
										<input class="day-accident">
										<p> urodzony(-na) </p>
										<input class="hour-accident">
									</div>
									<div class="person-data">
										<div class="living">
											<p class="living-text"> zamieszkały(-ła) </p>
											<label class="text-center">  </label>
										</div>
										<div class="postal-code">
											<input>
											<label class="text-center"> kod pocztowy </label>
										</div>
										<div class="locality">
											<input>
											<label class="text-center"> miejscowość </label>
										</div>
										<div class="street">
											<input>
											<label class="text-center"> ulica </label>
										</div>
										<div class="house-number">
											<input>
											<label class="text-center"> numer domu </label>
										</div>
										<div class="flat-number">
											<input>
											<label class="text-center"> numer lokalu </label>
										</div>
									</div>
									<div class="victim-data mb-3">
										<div class="victim-pesel-box">

											<div class="victim-pesel">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
												<input class="text-center" type="text" name="">
											</div>
											<div class="victim-pesel-description text-center">
												<label> PESEL <sup>2)</sup></label>
											</div>
										</div>
										<div class="distance-five"></div>

										<div class="id-card-number">
											<input>
											<label class="text-center"> numer dowodu osobistego albo innego dokumentu potwierdzającego tożsamość </label>
										</div>
									</div>
									<div class="employee-data">
										<div class="hired">
											<p class="hired-text"> zatrudniony(-na) w </p>
											<label class="text-center">  </label>
										</div>
										<div class="company">
											<input>
											<label class="text-center">  </label>
										</div>
										<div class="position">
											<p class="position-text"> na stanowisku </p>
											<label class="text-center">  </label>
										</div>
										<div class="in-position">
											<input>
											<label class="text-center"> nazwa stanowiska </label>
										</div>
										<div class="job-code">
											<div>
												<input>
												<input>
												<input>
												<input>
												<input>
												<input>
											</div>
											<div>
												<label class="text-center"> kod zawodu <sup>3)</sup></label>
											</div>
										</div>
									</div>
									<div class="accident-reported-box">
										<div class="accident-reported">
											<p class="accident-text"> 3. Wypadek zgłosił(a) </p>
											<label class="text-center">  </label>
										</div>
										<div class="reported-by">
											<input class="text-center">
											<label class="text-center">  </label>
										</div>
										<div class="in-day-text">
											<p> w dniu </p>
											<label class="text-center">  </label>
										</div>
										<div class="in-day">
											<input>
											<label class="text-center">  </label>
										</div>
									</div>
								</div>
								<div class="col-lg-12 sixth-section">
									<p> 4. Ustalono następujące okoliczności wypadku:<sup>4)</sup></p>
									<textarea rows="20" placeholder="________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
									<p> 5. Ustalono następujące przyczyny wypadku:<sup>5)</sup></p>
									<textarea rows="20" placeholder="________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
									<p> stwierdzono nieprzestrzeganie przez pracodawcę następujących przepisów prawa pracy, w szczególności przepisów i zasad bezpieczeństwa i higieny pracy lub innych przepisów dotyczących ochrony życia i zdrowia <i>(wskazać dowody)</i>:<sup>4,5)</sup></p>
									<textarea rows="7" placeholder="____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
									<p> stwierdzono, że wyłączną przyczyną wypadku było naruszenie przez poszkodowanego pracownika przepisów dotyczących ochrony życia i zdrowia, spowodowane przez niego umyślnie lub wskutek rażącego niedbalstwa <i>(wskazać dowody)</i>:<sup>4)</sup></p>
									<textarea rows="7" placeholder="____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
									<p> stwierdzono stan nietrzeźwości albo użycie przez poszkodowanego pracownika środków odurzających lub substancji psychotropowych przyczyniające się w znacznym stopniu do powstania wypadku przy pracy <i>(wskazać dowody, a w przypadku odmowy przez poszkodowanego poddania się badaniom na zawartość tych substancji w organizmie - zamieścić informację o tym fakcie)</i>:<sup>4)</sup></p>
									<textarea rows="7" placeholder="____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
								</div>
								<div class="col-lg-12 seventh-section">
									<p> 6. Skutki wypadku dla poszkodowanego <i>(rodzaj i umiejscowienie urazy)</i>:</p>
									<textarea rows="20" placeholder="____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
								</div>
								<div class="col-lg-12 eighth-section">
									<p class="pr-5"> 7. Stwierdza się że wypadek:</p>
									<div class="text-center">
										<span> JEST </span> <sup>6)</sup>
										<span class="ml-5"> NIE JEST </span><sup>6)</sup>
									</div>
									<p class="accident-at-work ml-5"> - wypadkiem przy pracy <sup>6)</sup>,</p>
									<p class="accident-at-work ml-5"> - traktowany na równi z wypadkiem przy pracy <sup>6)</sup>,</p>
									<p class=""> co uzasadnia się następująco:<sup>4)</sup></p>
									<textarea rows="26" placeholder="__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
								</div>
								<div class="col-lg-12 ninth-section mb-2">
									<p class="pr-5"> 8. Rodzaj wypadku:<sup>6)</sup></p>
									<div class="text-center">
										<span>indywidualny</span>
										<span class="ml-3"> zbiorowy </span>
										<span class="ml-3"> śmiertelny </span>
										<span class="ml-3"> ciężki </span>
										<span class="ml-3"> powodujący czasową niezdolność do pracy </span>
									</div>
								</div>
								<div class="col-lg-12 tenth-section">
									<p> 9. Wnioski i zalecane środki profilaktyczne:<sup>4)</sup></p>
									<textarea rows="30" placeholder="____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
								</div>
								<div class="col-lg-12 eleventh-section">
									<p> 10. Podpisy członków zespołu powypadkowego uczestniczących w ustalaniu okoliczności i przyczyn wypadku: </p>
									<div class="accident-team">
										<div class="signature">
											<div>
												<p> 1) </p>
												<input>
											</div>
											<div>
												<label class="text-center"> czytelny podpis </label>
											</div>
										</div>
										<div class="signature">
											<div>
												<p> 2) </p>
												<input>
											</div>
											<div>
												<label class="text-center"> czytelny podpis </label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 twelfth-section">
									<div class="ptotocol">
										<p> 11. Protokół sporządzono dnia: </p>
										<label> </label>
									</div>
									<div class="caption">
										<input>
										<label class="text-center"> czytelny podpis </label>
									</div>
								</div>
								<div class="col-lg-12 thirteen-section">
									<p> 12. Przeszkody lub trudności, które uniemożliwiły sporządzenie protokołu w wymaganym terminie 14 dni: </p>
									<textarea rows="7" placeholder="___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
								</div>
								<div class="col-lg-12 fourteenth-section">
									<p> 13. Poszkodowany / członek rodziny:<sup>6)</sup></p>
									<p> - zapoznany został z ninejszym protokołem oraz pouczony o prawie zgłoszenia do protokołu uwag i zastrzeżeń,<br>
									 	- zgłasza uwagi i zastrzeżenia do protokołu: TAK/NIE<sup>6)</sup><br>
									<i>&nbsp; (zgłoszone uwagi i zastrzeżenia należy dołączyć do protokołu).</i></p>
								</div>
								<div class="col-lg-12 fifteenth-section">
									<div class="family-member">
										<input>
										<label class="text-center"> imię i nazwisko poszkodowanego pracownika lub uprawnionego członka rodziny </label>
									</div>
									<div class="date ml-2">
										<input>
										<label class="text-center"> data </label>
									</div>
									<div class="signature ml-2">
										<input>
										<label class="text-center"> podpis </label>
									</div>
								</div>
								<div class="col-lg-12 sixteenth-section">
									<div class="protocol-approved">
										<div class="protocol-text">
											<p> 14. Protokół zatwierdzono dnia: </p>
											<label class="text-center">  </label>
										</div>
										<div class="date">
											<input>
											<label class="text-center"> data </label>
										</div>
										<div class="employer-signature">
											<input>
											<label class="text-center"> podpis pracodawcy </label>
										</div>
									</div>
								</div>
								<div class="col-lg-12 seventeenth-section">
									<div class="protocol-approved">
										<div class="protocol-text">
											<p> 15. Potwierdzenie odbioru protokołu: </p>
											<label class="text-center">  </label>
										</div>
										<div class="date">
											<input>
											<label class="text-center"> imię i nazwisko poszkodowanego pracownika lub uprawnionego członka rodziny </label>
										</div>
									</div>
								</div>
								<div class="col-lg-12 eighteenth-section">
								<div class="protocol-approved">
										<div class="protocol-text">
											<p> Data doręczenie / przesłania protokołu: <sup>6)</sup></p>
											<label class="text-center">  </label>
										</div>
										<div class="date">
											<input>
											<label class="text-center">  </label>
										</div>
										<div class="employer-signature">
											<input>
											<label class="text-center"> podpis / nr przesyłki poleconej </label>
										</div>
									</div>
								</div>
								<div class="col-lg-12 nineteenth-section">
									<p> 16. Wykaz załączników do protokołu: </p>
									<div>
										<textarea rows="14" placeholder="______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
									</div>
								</div>
								<div class="col-lg-12 twentyth-section">
									<h5 class="text-center"><b>POUCZENIE</b></h5>
									<div class="instruction">
										<div class="number">I. </div>
										<div class="note"> Przed zatwierdzeniem protokołu zespół powypadkowy jest obowiązany zapoznać z treścią protokołu poszkodowanego pracownika, a w razie wypadku
										śmiertelnego – uprawnionego członka rodziny pracownika, który ma prawo zgłoszenia uwag i zastrzeżeń do ustaleń zawartych w protokole. </div>
									</div>
									<div class="instruction">
										<div class="number">II. </div>
										<div class="note"> Poszkodowany pracownik, a w razie wypadku śmiertelnego – uprawniony członek rodziny zmarłego pracownika, może wystąpić do sądu rejonowego
										– sądu pracy w ........................................................................................................................... z powództwem o ustalenie i sprostowanie protokołu na podstawie
										art. 189 ustawy z dnia 17 listopada 1964 r. – Kodeks postępowania cywilnego (Dz. U. z 2018 r. poz. 1360, z późn. zm.). Z powództwem takim, w interesie
										poszkodowanego pracownika, może wystąpić również organizacja związkowa działająca u pracodawcy zatrudniającego poszkodowanego pracownika. </div>
									</div>
									<div class="horizontal-line mt-3 mb-3"></div>
								</div>
								<div class="col-lg-12 twenty-first-section">
									<p><sup>1)</sup>&nbsp;&nbsp;  Jeżeli nie został nadany NIP, podać PESEL lub numer dowodu osobistego albo innego dokumentu potwierdzającego tożsamość. </p>
									<p><sup>2)</sup>&nbsp;&nbsp;  Jeżeli nie został nadany numer PESEL, podać numer dowodu osobistego albo innego dokumentu potwierdzającego tożsamość. </p>
									<p><sup>3)</sup>&nbsp;&nbsp;  Podać pełny kod zawodu (specjalności), tj. sześciocyfrowy symbol zgodny z obowiązującą klasyfikacją zawodów i specjalności na potrzeby rynku pracy. </p>
									<p><sup>4)</sup>&nbsp;&nbsp;  Jeżeli zabraknie miejsca na druku, należy go uzupełnić kolejną stroną podpisaną przez członków zespołu powypadkowego. </p>
									<p><sup>5)</sup>&nbsp;&nbsp;  Przez inne przepisy dotyczące ochrony życia i zdrowia rozumie się np. przepisy o ochronie przeciwpożarowej, o dozorze technicznym, przepisy prawa
													<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; geologicznego i górniczego, budowlanego, o ruchu drogowym. </p>
									<p><sup>6)</sup>&nbsp;&nbsp;  Niepotrzebne skreślić. </p>
								</div>
								<div class="col-lg-12 twenty-second-section"></div>
								<div class="col-lg-12 twenty-third-section"></div>								
							</div>
						</form>
					</div>	
					<div class="actions buttons text-center">
						<div class="mx-auto">
							<input class="non-printable btn btn-light mr-3" type="button" onclick="printDiv('printableArea')" value="Podgląd pdf" /> 
						</div>
					</div>					
				</div>
			</section>
			<?php 
				require('footer.php');
			?>
		</main>				
	</body>
</html>