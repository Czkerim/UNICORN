<!doctype html>
<html lang=cs>
<head>
<title>Určení recenzenta</title>
<meta charset="utf-8">
<script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
<link href="../styl.css" rel="stylesheet" />
<link href="http://fonts.cdnfonts.com/css/foobar-pro" rel="stylesheet"/>
</head>

<body class="container-fluid">
<header>
	<a href="index.html"><img src="../logo.png" alt="logo" /></a>
	<h1>Node Chronicles</h1>
	<p><i>Tato aplikace je výsledkem školního projektu v kurzu Řízení SW projektů na Vysoké škole
polytechnické Jihlava. Nejedná se o stránky skutečného odborného časopisu!</i></p>
	
</header>


<menu class="navbar">
		<a href="recenze.html">Recenze</a>
		<a href="pridani_recenze.html">Přidání recenze</a>
		<a href="urceni_recenzenta.html">Určení recenzenta</a>
		<a>Položka</a>
		<a>Položka</a>
		<a>Položka</a>
		<a href="../prihlaseni.html">Přihlásit se</a>	
</menu>

<div class="all">
<div class="all-side">
		<div class="side1 container-fluid">
			<h5>Populární přízpěvky</h5>
			<ul>
				<li><a>Odkaz</a></li>
				<li><a>Odkaz</a></li>
				<li><a>Odkaz</a></li>
			</ul>
			<br />
			<h5>Nejnovější přízpěvky</h5>
			<ul>
				<li><a>Odkaz</a></li>
				<li><a>Odkaz</a></li>
				<li><a>Odkaz</a></li>
			</ul>
		</div>
		<div class="side2 container-fluid">
			<h5>Novinky</h5>
			<p>novinky budou vypsány zde</p>
		</div>
	</div>
	<div class="content">
		<div class="container-fluid">
				<h3>Určení recenzenta</h3><br />
				
	<form method="post" id="urceni_recenzenta">
	
	<label>Článek</label></br>
	<select class="form-control form-outline w-25"  id="clanek" name="clanek"  >
		<option value="" disabled selected hidden>Vyberte článek</option>
		<option value="">článek 1</option>
		<option value="">článek 2</option>
		
	</select></br>
	
	<label>1. recenzent</label></br>
	<select class="form-control form-outline w-25" id="recenzent_1" name="recenzent_1"  >
		<option value="" disabled selected hidden>Vyberte recenzenta</option>
		<option value="">Jan Novák</option>
		<option value="">Jana Nováková</option>
		
	</select></br>
	
	
	<label>2. recenzent</label></br>
	<select class="form-control form-outline w-25" id="recenzent_2" name="recenzent_2"  >
		<option value="" disabled selected hidden>Vyberte recenzenta</option>
		<option value="">Jan Novák</option>
		<option value="">Jana Nováková</option>
		
	</select><br>
	<label>Termín odevzdání</label></br>
		<input type="date" class="form-control form-outline w-25" id="datum_odevzdani" name="datum_odevzdani" required></br>
	<br>
	
	<button type="submit" class="btn btn-info btnsubmit" >Určit</button>
	
	</form>
				
	</div>	
	</div>
	
</div>

<footer>
	<p class="foot">Unicorn Team &copy 2022</p>
</footer>

</body>
</html>