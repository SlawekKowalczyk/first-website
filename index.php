<!DOCTYPE HTML>
<html lang ="pl">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1"/>
	<meta name = "description"  content = "Poczytaj o najlepszych nalewkach mojej produkcji"/>
	<meta name = "keywords" content = "nalewka, domowa nalewka, alkohol, tworzenie, orzechówka,  cytrynówka, jagodówka, truskawkówka, wiśnie w alkoholu" />
	
	<title>Grota Drania</title>
	
	<link rel="stylesheet" href="styles.css"type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato" rel="stylesheet">
	
	<script src="clock.js"></script>
</head>

<body onload="countdown()">
	<div id="container">
		<div id="heading">
			<div id = "logo"><a href = "index.php"><img src="img/logo_2.png"/></a></div>
			<div id ="title">Grota Drania</div>
			<div id = "teddybear"><img src="img/teddybear.png"/></div>
			<div id  = "clock">Tu powinien wyświetlać się zegar.</div>
		</div>
		<div id ="menu">
			<div id= "title_1"><a href = "index.php" class="titlelink">O mnie</a></div>
			<div id= "title_2"><a href = "fruit_liqueurs.php" class="titlelink">Nalewki</a></div>
			<div id= "title_3"><a href = "fruit_in_alcohol.php" class="titlelink">Owoce w alkoholu</a></div>
			<div id= "title_4"><a href = "advice.php" class="titlelink">Porady</a></div>
		</div>
		<div id="rectangle_1">
				<p><span> Podoba Ci się? Zapraszam do współpracy :)</span></p>
		</div>
		
		<div id="content">
				<img src="img/fruit_in_alcohol.png" />
				<br /><br />Cześć! Jestem Pluszak.<br />
				Facet mojej dziewczyny mówi na mnie:<br />
				<img src="img/teddybear_1.png" />
				<br />ale ja wystawiam mu pewną część ciała i odpowiadam: <br />
				<img src="img/teddybear_2.png" /><br />
				Moja pasja zaczęła się jakiś czas temu, kiedy to po raz pierwszy zrobiłem wiśniówkę. <br /> No i tak się toczy... Ja robię, a Oni mi spijają. Taki los Pluszaka... <br /> Nawet napić się nie może! :) <br />
				Skorzystaj z moich przepisów i wypij za moje zdrowie.
				<br />Najlepszego!
				<br />Pluszak<br /><br />
		</div>
		
		<div id="counter">
				<?php
				$counter=1;
				$counter=file_get_contents('counter.txt');
				$counter=(int)$counter;
				$counter+=1;
				file_put_contents('counter.txt',$counter); 
				echo "<h3>Odwiedziło nas <br>" . $counter . "<br> internautów </h3>";
				?>
		</div>
		<div id = "subskrypcja">
				<b>Chcesz być na bieżąco z nowymi przepisami? <br /> 
					Subskrybuj nasz newsletter!</b>
				<br />
				<form action = 'add_email.php' method = "GET">
					Wpisz imię. <input name="name" type "text" /><br />     
					Wpisz swojego maila. <input name="e_mail" type "text" /><br />     
				<input type = 'submit' value ='Wyślij' /><br />
		</div>
		<div id = "footer">
				Nalewki Drania! &copy; 2016 
		</div>
	</div>
</body>
</html>