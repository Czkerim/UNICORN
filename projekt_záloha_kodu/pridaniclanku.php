<!doctype html>
<html lang=cs>
<head>
<title>Node Chronicles</title>
<meta charset="utf-8">
<script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
<link href="styl.css" rel="stylesheet" />
<link href="http://fonts.cdnfonts.com/css/foobar-pro" rel="stylesheet"/>
</head>

<body class="container-fluid">
<header>
	<a href="index.php"><img src="logo.png" alt="logo" /></a>
	<h1>Node Chronicles - přidání článku</h1>
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
			<h3>Přidání nového článku</h3>
			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">
						<div>
							<h5>Autor</h5>

							<div class="form-group">
								<label class="control-label col-sm-2" for="jmeno">Jméno:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="jmeno" placeholder="Zadej jméno" name="jmeno" required disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2" for="prijmeni">Zadej příjmení:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="prijmeni" placeholder="Zadej příjmení" name="prijmeni" required disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Kontakt (email):</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="email" placeholder="Zadej email" name="email" required disabled>
								</div>
							</div>

						</div>

					</div>

					<div class="col-sm-6">
						<div>
							<h5>Článek</h5>

							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Název:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="nazev" placeholder="Zadej název článku" name="nazev" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Téma:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="tema" placeholder="Zadej téma článku" name="tema" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2" for="poznamka">Poznámka:</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="poznamka" placeholder="Poznámka (nepovinné)" name="poznamka"></textarea>
								</div>
							</div>

						</div>
					</div>
				</div>






				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Přidat článek (pdf):</label>
					<div class="col-sm-10">
						<input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label><input type="checkbox" name="podminky" required> Souhlasím s podmínkami</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-info btnsubmit">Odeslat</button>
						<a href="index.php" class="btn btn-secondary btncancel">Zrušit</a>

					</div>
				</div>
			</form>



		</div>	
	</div>
	
</div>

<footer>
	<p class="foot">Unicorn Team &copy 2022</p>
</footer>

</body>
</html>
