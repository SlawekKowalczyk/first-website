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
	<script type="text/javascript">
		function displayOrHide(text) {
		var object = document.getElementById(text);
		if (object.style.display == 'block') {
				object.style.display = 'none';
		} else {object.style.display = 'block';
		}}
	</script>
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
		<p><span>Podoba Ci się? Zapraszam do współpracy :)</span></p>
		</div>
		
		<div id="content">
			<a href="#list6" class="listaLink" onclick="displayOrHide('list6'); return false;">
			<h3>Wiśnie</h3>	</a>
				<div id="list6">
				Składniki:
				<li>1 kg wiśni</li>
				<li>300 ml wody</li>
				<li>200 ml spirytusu 96%</li>
				<li>30 dag cukru</li>
				<br />
				<h3>Sposób przygotowania</h3>
				Wiśnie należy zerwać dojrzałe, w słoneczny dzień. Owoce nie mogą być przejrzałe. Ogonki ucinamy do połowy. Gdy lekko przeschną nakłuwamy każdą wiśnię dwa razy i wkładamy do słoja dodając kawałek cynamonu i trochę kolendry(w ziarnach). 
				Następnie przygotowujemy syrop gotując wodę i powoli wsypując cukier do całkowitego rozpuszczenia. Tak przygotowany syrop odstawiamy do wystygnięcia, następnie dolewamy spirytus dokładnie mieszając. Otrzymaną cieczą zalewamy słój z owocami i zakręcamy. Odstawiamy go w miejsce bardzo nasłonecznione na okres od 4-6 tygodni. Po tym czasie owoce początkowo unoszące się na cieczy, opadną na dno.
				<br />
				</div>
				
			<a href="#list7" class="listaLink" onclick="displayOrHide('list7'); return false;">
			<h3>Pigwa</h3>		</a>
				<div id="list7">
				W zimne wieczory świetnie sprawdza się nalewka z pigwy. Ma delikatny smak pigwy z posmakiem alkoholu. 
				Owoce z pigwówki można wykorzystać np. do herbaty. Wystarczy je włożyć do zamrażarki w szczelnym pojemniku i korzystać przez cały rok :)
				<br />
				<br />
				</div>
	
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


