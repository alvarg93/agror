<?php 
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AGROR - Portal Rolniczy</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,400italic,300,500,500italic,700,100italic,100,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link type="text/css" href="css/style.css" rel="stylesheet">
    <link href="http://www.jqueryscript.net/css/jqueryscripttop.css" rel="stylesheet" type="text/css">
	<link type="text/css" href="css/jquery.countdown.css?v=1.0.0.0" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.min.js?v=1.0.0.0"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div id="main-container">
	<div class="content-container" id="header-container">
		<div class="content-wrapper">
			<img id="main-logo" src="pngexport/agror.png"/>
			
			<a class="top-right-icons" href="mailto: kontakt@idfs.pl" target="_blank"><img id="icon-contact" src="pngexport/contact.png"/></a>
			<a class="top-right-icons" href="https://plus.google.com/+AgrogrupaPlagrego/posts" target="_blank"><img id="icon-gplus" src="pngexport/gplus.png"/></a>
			<a class="top-right-icons" href="https://www.facebook.com/agrogrupapl?fref=ts" target="_blank"><img id="icon-fb" src="pngexport/fb.png"/></a>
		</div>
	</div>
	<div class="content-container">
		<div class="content-wrapper">
		<img id="main-images" src="pngexport/images.png"/>
		</div>
	</div>
	<div style="clear: both"></div>
	<div class="content-container" id="form-container">
		<div class="content-wrapper">
			<p style="color: white;" class="container-header">Zostaw nam swój adres e-mail, a poinformujemy Cię w dniu premiery nowej odsłony portalu</p>
			<form id="mail-form" method="POST" action="index.php">
			<div><input type="email" required name="Email" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+" placeholder="Twój e-mail">
			
			
			
 <?php 
	if(isset($_POST["Email"])) 
	{
		$mysqli = new mysqli("localhost", "root", "", "agror_test");
		if ($mysqli->connect_errno) {
			echo "<p style=\"color: red; font-weight: 500;\">Brak połączenia z Internetem</p>";
		}

		/* Prepared statement, stage 1: prepare */
		if (!($stmt = $mysqli->prepare("INSERT INTO agror_launch_emails(email) VALUES (?)"))) {
			echo "<p style=\"color: red; font-weight: 500;\">Błąd wewnętrzny</p>";
		}

		$email = $_POST["Email"];
		if (!$stmt->bind_param("s", $email)) {
			echo "<p style=\"color: red; font-weight: 500;\">Błąd wewnętrzny</p>";
		}

		if (!$stmt->execute()) {
			echo "<p style=\"color: red; font-weight: 500;\">Adres e-mail istnieje już w bazie</p>";
		} else {
			$_SESSION["success"]=true;
			header("Location: http://localhost/agror/index.php");
			die();
		}
		
			$_SESSION["success"]=false;
		
	}
	
	if(isset($_SESSION["success"]) && $_SESSION["success"]==true) echo "<p style=\"color: white; font-weight: 500;\">Dodano adres do bazy!</p>" ?>
	
	
			
			
			</div>
			<div>
			<div id="submit-container"><input type="submit" value="WYŚLIJ" name="Submit"></div>
				<div id="main-form-checkbox">
					<div class="squared-chk" style="display: inline">
						<input type="checkbox" required value="None" id="squared-chk" name="terms" />
						<label for="squared-chk"></label>
					</div>
					<div style="display: inline;">Wyrażam zgodę na przetwarzanie moich danych osobowych w celach markitengowych zgodnie z ustawą z dnia 29. sierpnia 1997r. przez IDFS Sp. z o.o.
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
	<div class="content-container" id="clock-container">
		<div class="content-wrapper">
		<p class="container-header">Do premiery nowej odsłony portalu pozostało tylko:</p>
		<ul id="example">
		  <li><span class="days">00</span><p class="days_text">dni</p></li>
			<li class="seperator">:</li>
			<li><span class="hours">00</span><p class="hours_text">godzin</p></li>
			<li class="seperator">:</li>
			<li><span class="minutes">00</span><p class="minutes_text">minut</p></li>
			<li class="seperator">:</li>
			<li><span class="seconds">00</span><p class="seconds_text">sekund</p></li>
		</ul>
		</div>
	</div>
	
	<div class="content-container">
		<div class="content-wrapper">
			<div class="table">
			<ul class="horizontal">
			<li>
				<article class="centered-article">
					<img src="pngexport/clock.png"/>
					<h2 class="article-header">Nowa odsłona</h2>
					<p>W ostatnim czasie AGROR.pl został przejęty przez AGRO-GRUPA.pl - portal promujący ideę współpracy wśród producentów rolnych oraz wymiany doświadczeń pomiędzy wszystkimi uczestnikami rynku rolnego. Agro-grupa.pl posiada bogatą bazę ekspertów i ugruntowaną pozycję w branży rolnej.</p>
				</article>
			</li>
			<li>
				<article class="centered-article">
					<img src="pngexport/book.png"/>
					<h2 class="article-header">Szeroka baza wiedzy</h2>
					<p>W efekcie przejęcia czytelnicy AGROR.pl i AGRO-GRUPA.pl zyskają m.in. dostęp do najświeższych informacji z rynku rolnego, pełnego archiwum artykułów AGROR.pl, notowań giełdowych, komentarzy eksperckich i cyklicznego newslettera branżowego.</p>
				</article>
			</li>
			<li>
				<article class="centered-article">
					<img src="pngexport/man.png"/>
					<h2 class="article-header">Kompleksowe zarządzanie</h2>
					<p>Portale AGROR.pl i AGRO-GRUPA.pl powiązane są również z marką AGREGO - innowacyjnym i wszechstronnym systemem, wspierającym zarządzanie grupami producentów rolnych oraz gospodarstwami indywidualnymi, a także ułatwiającym współpracę w branży rolnej. Kompleksowe podejście do zarządzania do podstawa sukcesu w rolnictwie.</p>
				</article>
			</li>
			</ul>
			</div>
		</div>	
	</div>
	
	<div id="footer-container" class="content-container">
		<div class="content-wrapper">
			<div id="footer-idfs"><a href="http://www.idfs.pl"><img src="pngexport/idfs.png"/></a></div>
			<div id="footer-others">
				<ul class="horizontal">
				<li style="width: 25%"><a href="http://www.agro-grupa.pl"><img src="pngexport/agrogrupa.png"/></a></li>
				<li style="width: 16%"><a href="http://www.agro-grupa.pl/o-agrego"><img src="pngexport/agrego.png"/></a></li>
				<li style="width: 20%"><img src="pngexport/agrorsmall.png"/></li>
				</ul>
				
				<div id="footer-contact">
					<ul class="horizontal">
					<li style="width: 15%">IDFS Sp. z o.o.</li>
					<li>|</li>
					<li style="width: 18%">ul. Świetlana 26</li>
					<li>|</li>
					<li style="width: 15%">60-151 Poznań</li>
					<li>|</li>
					<li  style="width: 17%">+48 506 049 009</li>
					<li>|</li>
					<li style="width: 17%">+48 506 049 004</li>
					<li>|</li>
					<li style="width: 15%"><a href="mailto: kontakt@idfs.pl" target="_blank">kontakt@idfs.pl</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
</div>
</body>
</html>