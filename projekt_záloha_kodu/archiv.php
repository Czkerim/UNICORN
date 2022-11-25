<!doctype html>
<html lang=cs>
<head>
<title>Archiv - Node Chronicles</title>
<meta charset="utf-8">
<script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
<link href="styl.css" rel="stylesheet" />
<link href="http://fonts.cdnfonts.com/css/foobar-pro" rel="stylesheet"/>




</head>

<body class="container-fluid">
<header>
	<a href="index.php"><img src="logo.png" alt="logo" /></a>
	<h1>Node Chronicles</h1>
	<p><i>Tato aplikace je výsledkem školního projektu v kurzu Řízení SW projektů na Vysoké škole
polytechnické Jihlava. Nejedná se o stránky skutečného odborného časopisu!</i></p>
	
</header>

<?php include('tools/sidebar.php'); ?>

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
   <h3 >Archiv</h3>
<div class="float-start col-md-1 p-2">	
<label >Řazení:</label>
	<select onChange="window.location.href=this.value" class="form-control"  id="clanek" name="clanek"  >
		<option value="#" disabled selected hidden>Nejnovější</option>
		<option value="#nejnovejsi">Nejnovější</option>
		<option value="#nejstarsi">Nejstarší</option>
		<option value="#popularni">Populární</option>
		<option value="#a-z">A-Z</option>
		<option value="#z-a">Z-A</option>	
	</select>
	
	</div>	
<div class="float-start col-md-1 p-2 ">
<label">Rok vydání:</label>	
	<select onChange="window.location.href=this.value" class="form-control "  id="rok" name="rok">
	<option disabled selected hidden>2022</option>
    <option value="#2023">2023</option>
    <option value="#2022">2022</option>
	
</select>	
</div>
	
	
</div>
<br /><br /><br /><br />

	<div class="container-fluid">
	<h4> Zima 2022/2023 </h4>	
			<p >
           Autoři: Jan Novák, Jana nováková<br/>
		   Redaktoři: Jan Novák, Jana nováková<br/>
		   Téma čísla: Unicorn<br/>
		   Datum vydání: 29.9. 2022<br/> 
            </p>
            <div class="control">
                <div class="btn">
                  <a class="btn btn-info btnsubmit " href="SampleFile.pdf" download>Stáhnout číslo</a>
                </div>
				<br /><br />
           </div>	
	</div>
	
	<div class="container-fluid">
	<h4> Podzim 2022 </h4>	
			<p >
           Autoři: Jan Novák, Jana nováková<br />
		   Redaktoři: Jan Novák, Jana nováková<br/>
		   Téma čísla: Planeta jednorožců<br/>
		   Datum vydání: 29.11. 2022<br/>   
            </p>
            <div class="control">
                <div class="btn">
                   
					<a class="btn btn-info btnsubmit " href="SampleFile.pdf" download>Stáhnout číslo</a>
                </div>
				<br /><br />
           </div>	
	</div>

			  
			  
				
	</div>
	
</div>

<footer>
	<p class="foot">Unicorn Team &copy 2022</p>
</footer>

</body>
</html>