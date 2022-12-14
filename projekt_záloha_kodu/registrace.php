<!doctype html>
<html lang=cs>
<head>
<title>Node Chronicles - registrace</title>
<meta charset="utf-8">
<script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
<link href="styl.css" rel="stylesheet" />
<link href="reg_log.css" rel="stylesheet" />
<link href="http://fonts.cdnfonts.com/css/foobar-pro" rel="stylesheet"/>
</head>

<body class="container-fluid">
<header>
	<a href="index.php"><img src="logo.png" alt="logo" /></a>
	<h1>Node Chronicles - registrace</h1>
	<p><i>Tato aplikace je výsledkem školního projektu v kurzu Řízení SW projektů na Vysoké škole
polytechnické Jihlava. Nejedná se o stránky skutečného odborného časopisu!</i></p>
	
</header>


<?php include('tools/sidebar.php'); ?>

<div class="all-log">
<div class="all-side-log">
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
	<div class="content-log">
		<div class="container-fluid">
				<h3>Registrujte se</h3>
				<form action="" name="registrace">
				<table>
					<tr>
						<td>
							<label>Jméno</label>
						</td>
						<td>
							<label>Příjmení</label>
						</td>
					</tr>
					<tr>
						<td>
							<input name="jmeno" class="form-group" />
						</td>
						<td>
							<input name="prijmeni" class="form-group" />
						</td>
					</tr>
					<tr>
						<td>
							<label>E-mail</label>
						</td>
						<td>
							<label>Role</label>
						</td>
					</tr>
					<tr>
						<td>
							<input name="email" class="form-group" />
						</td>
						<td>
							<select name="role" id="role" type="radio">
								<option value="autor">Autor</option>
								<option value="recenzent">Recenzent</option>
								<option value="uzivatel">Uživatel</option>
								<option value="redaktor">Redaktor</option>
								<option value="sefredaktor">Šéfredagtor</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label>Heslo</label>
						</td>
						<td>
							<label>Zadejte heslo znova</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="password" class="form-group" />
						</td>
						<td>
							<input type="password" name="password_chk" class="form-group" />
						</td>
					</tr>
					<tr>
						<td>
							<label>Máte účet? <a href="prihlaseni.html">Přihlaště se!</a></label>
						</td>
					</tr>
					<tr>
						<td>
							<button type="submit" class="btn btn-send form-group">Zaregistrovat</button>
						</td>
					</tr>
				</table>					
				</form>

				
		</div>	
	</div>
	
</div>

<footer>
	<p class="foot">Unicorn Team &copy 2022</p>
</footer>

</body>
</html>