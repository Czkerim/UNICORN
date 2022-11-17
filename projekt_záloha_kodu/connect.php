<?php                                                                                  
$servername = "localhost";
$username = "schonova";
$password = "Tis*1819956";
$dbname = "schonova";
$spojeni = mysqli_connect($servername, $username, $password, $dbname);
 mysqli_set_charset($spojeni, "utf8");

if($spojeni === false){
    die("Error: connection error. " . mysqli_connect_error());
}else{
echo 'spojeno';
}

?>
