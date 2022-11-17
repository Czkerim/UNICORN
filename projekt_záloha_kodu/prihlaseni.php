<?php


require_once "connect.php";

// Start the session
session_start();


if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("location: index.php");
    exit;
}


$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    // validate if email is empty
    if (empty($email)) {
        $error .= '<p class="error">Prosím zadej emailovou adresu.</p>';
    }

    // validate if password is empty
    if (empty($password)) {
        $error .= '<p class="error">Prosím vlož heslo.</p>';
    }

    if (empty($error)) {
        if($query = $spojeni->prepare("SELECT * FROM unicorn_uzivatel WHERE email = ?")) {
            $query->bind_param('s', $email);
            $query->execute();
            $row = $query->fetch();
            if ($row) {
                if (password_verify($password, $row['heslo'])) {
                    $_SESSION["userid"] = $row['ID_uzivatel'];
                    $_SESSION["role"] = $row['ID_role'];
                    $_SESSION["user"] = $row;

                    // Redirect the user to welcome page
                    header("location: index.php");
                    exit;
                } else {
                    $error .= '<p class="error">Heslo není správné.</p>';
                }
            } else {
                $error .= '<p class="error">Nebyl nalezen žádný uživatel s tímto emailem</p>';
            }
        }
        $query->close();
    }
    // Close connection
    mysqli_close($spojeni);
}




?>

<!doctype html>
<html lang=cs>
<head>
<title>Node Chronicles - přihlášení</title>
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
	<h1>Node Chronicles - přihlášení</h1>
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
				<h3>Přihlásit se</h3>

            <?php echo '<div  style="color: red" >' .$error.'   </div>'; ?>

            <form action="" method="POST">

                <div class="form-group" >
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required />

                </div>
                <div class="form-group">
                    <label>Heslo</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Nemáte účet? <a href="registrace.php">Zaregistrujte se!</a></label>
                </div>

                <div class="form-group">
                    <input style="width: 100%" type="submit" class="btn btn-send form-group" name="submit" class="btn btn-primary" value="submit">

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