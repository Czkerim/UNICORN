<?php

if(!isset($_SESSION)) {session_start();}

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $_SESSION['Username'] = $user['username'];
    header("location: index.php");
    exit;
}


$username = $password = "";
$username_err = $password_err = $login_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Prosím zadej uživatelské jméno.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Prosím vlož heslo.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM unicorn_uzivatel username = ?";

        if($stmt = mysqli_prepare($spojeni, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);


            $param_username = $username;


            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Špatné uživatelske jméno nebo heslo.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Špatné uživatelske jméno nebo heslo.";
                }
            } else{
                echo "Oops! Něco se nepovedlo. Zkus to znovu později";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
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
            <?php
            if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group" style="wi">
                    <label for="username">Přezdívka</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <br>
                <div class="form-group">
                    <label>Nemáte účet? <a href="registrace.php">Zaregistrujte se!</a></label>
                </div>

                <div class="form-group">
                    <button style="width: 100%" type="submit" class="btn btn-send form-group" value="Login">Přihlásit se</button>
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