<!doctype html>
<html lang=cs>
<head>
<title>Přidání recenze</title>
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
				<h3>Vložení recenze</h3>
			
	<form method="post" id="pridani_recenze">
<div class="row">
<div class="col">
	<label>ID autora</label></br>
	<select class="form-control form-outline w-75"  id="id_autor" name="id_autor" required >
		<option value="" disabled selected hidden>Vyberte ID autora</option>
		<option value="">1</option>
		<option value="">2</option>
		</select></br>
	<label>ID článku</label></br>
	<select class="form-control form-outline w-75"  id="id_clanek" name="id_clanek" required >
		<option value="" disabled selected hidden>Vyberte ID článku</option>
		<option value="">1</option>
		<option value="">2</option>
	</select></br>
	<label>Název článku</label></br>
	<select class="form-control form-outline w-75"  id="clanek" name="clanek" required >
		<option value="" disabled selected hidden>Vyberte článek</option>
		<option value="">článek 1</option>
		<option value="">článek 2</option></select></br>
<label>Datum recenze</label></br>
		<input type="date" class="form-control form-outline w-75" id="datum_recenze" name="datum_recenze" required></br>
<label>Zvláštní požadavky</label></br>
	<select class="form-control form-outline w-75" id="zp" name="zp" required >
		<option value="" disabled selected hidden>Vyberte zvláštní požadavky</option>
		<option value="">NE</option>
		<option value="">Požadovány drobné úpravy</option>
			<option value="">Osobní revize úprav </option>
	</select>
	</br></div>
	<div class="col">
	<label>Aktuálnost  </label></br>
	<select class="form-control form-outline w-75"  id="aktualnost" name="aktualnost"  required>
		<option value="" disabled selected hidden>Ohodnoťte aktuálnost</option>
		<option value="">Vynikající</option>
		<option value="">Dobrá</option>
		<option value="">Průměrná</option>
		<option value="">Špatná</option>
		<option value="">Nevyhovující</option>
		</select></br>
	
<label>Zajímavost a přínosnost  </label></br>
<select class="form-control form-outline w-75"  id="zajimavost" name="zajimavost"  required>
		<option value="" disabled selected hidden>Ohodnoťte zajímavost a přínosnost</option>
		<option value="">Vynikající</option>
		<option value="">Dobrá</option>
		<option value="">Průměrná</option>
		<option value="">Špatná</option>
		<option value="">Nevyhovující</option>
		</select></br>

	
	<label>Originalita </label></br>
	<select class="form-control form-outline w-75"  id="originalita" name="originalita"  required>
		<option value="" disabled selected hidden>Ohodnoťte originalitu</option>
		<option value="">Vynikající</option>
		<option value="">Dobrá</option>
		<option value="">Průměrná</option>
		<option value="">Špatná</option>
		<option value="">Nevyhovující</option>
		</select></br>
	
	
	<label>Odborná úroveň</label></br>
	<select class="form-control form-outline w-75"  id="ou" name="ou"  required>
		<option value="" disabled selected hidden>Ohodnoťte odbornou úroveň</option>
		<option value="">Vynikající</option>
		<option value="">Dobrá</option>
		<option value="">Průměrná</option>
		<option value="">Špatná</option>
		<option value="">Nevyhovující</option>
		</select></br>
	
	<label>Jazyková a stylistická úroveň</label></br>
	<select class="form-control form-outline w-75"  id="JaSU" name="JaSU"  required>
		<option value="" disabled selected hidden>Ohodnoťte jazykovou a stylistickou úroveň</option>
		<option value="">Vynikající</option>
		<option value="">Dobrá</option>
		<option value="">Průměrná</option>
		<option value="">Špatná</option>
		<option value="">Nevyhovující</option>
		</select></br>	
	</br>
	</div>

		<label>Odpověď</label>		
	</div>	<textarea class="form-control form-outline "style="max-width: 87.7%" rows="7" align="center" name="comment" required placeholder="Zde napište slovní hodnocení, návrh úprav ..."></textarea></br></br>
	<button type="submit" class="btn btn-info btnsubmit" >Odeslat recenzi</button></br>	
	
	</form>		
	</div>	
	</div>
	
</div>
	
<footer>
	<p class="foot">Unicorn Team &copy 2022</p>
</footer>

</body>
</html>