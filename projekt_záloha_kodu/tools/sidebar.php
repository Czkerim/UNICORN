<?php

echo '<menu class="navbar">
	<a href="index.php">Domů</a>
	<a href="pridaniclanku.php">Přidat článek</a>
	<a href="">Archiv</a>
	<a href="hledaniclanku.php">Vyhledat článek</a>
	<a href="">Položka</a>
	<a href="">Položka</a>
	<a href="">Položka</a>
	<a href="prihlaseni.php">Přihlásit se</a>';

 if ($_SESSION["role"]==admin ) 
{	echo '<a href="admin.php">Administrace</a>';
}

echo '</menu>';

?>
