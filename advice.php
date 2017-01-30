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
				Poniżej znajdziecie kilka porad, jak zrobić najlepsze i najzdrowsze nalewki:
			<ul id="list">
				<li>Wybierajcie najlepsze owoce zbierane na wsi, z dala od ruchliwych dróg. </li>
				<li>Warto również zwrócić uwagę, aby owoce były zbierane ze starych odmian drzew i krzewów, a nie nowych modyfikowanych. Może owoce nie wyglądają tak pięknie, jak te w sklepach, ale napewno są zdrowsze i smaczniejsze.</li>
				<li>Do nalewek stosujcie tylko spirytus rektyfikowany 96% (samodzielnie rozcieńczając). Odradzam kupowanie spirystusu nalewkowego 70%, bo lepiej nie sprawdzać, co tam jest oprócz wody :).</li>
				<li>Niektóre owoce (jak np. wiśnie, pigwa itp.) wykorzystane do zrobienia nalewek śmiało możecie później np. zjeść lub dodać do deseru. Będzie to ciekawe urozmaicenie :) </li>
				<li>W niektórych przepisach dostępnych w internecie autorzy sugerują, aby owoce rozdrabniać blenderem. Jednak ja polecam krojenie nożem, łatwiej potem klarować nalewki.</li>
			</ul>
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