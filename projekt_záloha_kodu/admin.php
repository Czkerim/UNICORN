    <?php

    
    session_start();
                      
if ($_SESSION["role"] != 5) {
    header("location: index.php");
    exit;
}

?>


<!doctype html>
<html lang=cs>
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
<link href="styl.css" rel="stylesheet" />
<link href="admin.css" rel="stylesheet" />
<link href="http://fonts.cdnfonts.com/css/foobar-pro" rel="stylesheet"/>
<script>

function showSprava() {
  var x = document.getElementById("sprava");
  var y = document.getElementById("odebratRoli");
  var z = document.getElementById("smazatUser");
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}
function showOdebratRoli() {
  var x = document.getElementById("sprava");
  var y = document.getElementById("odebratRoli");
  var z = document.getElementById("smazatUser");
 
    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";
  
}
function showSmazatUser() {
  var x = document.getElementById("sprava");
  var y = document.getElementById("odebratRoli");
  var z = document.getElementById("smazatUser");

    x.style.display = "none";
    y.style.display="none";
    z.style.display="block";
 
  
}
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
</head>

<body class="container-fluid">
    <header>
        <a href="index.php"><img src="logo.png" alt="logo" /></a>
        <center><h1>Administrátor</h1></center>
        <p><i>Tato aplikace je výsledkem školního projektu v kurzu Řízení SW projektů na Vysoké škole
    polytechnické Jihlava. Nejedná se o stránky skutečného odborného časopisu!</i></p>
        
    </header>
    <menu class="navbar">
           <button><a onclick="showSprava()"> Správa článků</a></button>
           <button> <a onclick="showOdebratRoli()"> Změnit roli</a></button>
            <button><a onclick="showSmazatUser()"> Smazat uživatele</a></button>
            <button><a href="index.php">Zpět</a></button>
    </menu>
    
    <div class="all" >
        <div class="content">
            <div id="sprava"  class="container-fluid">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Název</th>
                            <th scope="col">Téma</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Datum vydání</th>
                            <th scope="col">Recenzenti</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

require 'connect.php';
                                // načtení dat z databáze a zobrazení
                              $sql = "SELECT * FROM unicorn_clanek";
                              $result = mysqli_query($spojeni, $sql);
                              if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                             echo '<td>' . $row["ID_clanek"] . '</td>';
                            echo '<td>' . $row["nazev"] . '</td>';
                            echo '<td>' . $row["tema"] . '</td>';
                              $sql2 = "SELECT jmeno, prijmeni FROM unicorn_uzivatel WHERE ID_uzivatel=".$row["ID_autor"];
                              $result2 = mysqli_query($spojeni, $sql2);
                              $row2 = mysqli_fetch_assoc($result2);
                            echo '<td>' . $row2["jmeno"] . ' ' . $row2["prijmeni"] . '</td>';
                            echo '<td>' . $row["datum_vydani"] . '</td>';                  
                            $sql2 = "SELECT jmeno, prijmeni FROM unicorn_uzivatel WHERE ID_uzivatel=".$row["ID_recenzent"];
                              $result2 = mysqli_query($spojeni, $sql2);
                              $row2 = mysqli_fetch_assoc($result2);
                            echo '<td>' . $row2["jmeno"] . ' ' . $row2["prijmeni"] . ', ';                         
                            $sql2 = "SELECT jmeno, prijmeni FROM unicorn_uzivatel WHERE ID_uzivatel=".$row["ID_recenzent2"];
                              $result2 = mysqli_query($spojeni, $sql2);
                              $row2 = mysqli_fetch_assoc($result2);
                            echo $row2["jmeno"] . ' ' . $row2["prijmeni"] . '</td>';
                            echo '<td class="tdRight" colspan="3">';
							
							echo "<a class='tlac' href='admin.php?id=".$row['ID_clanek']."&del=1'><i class='fas fa-trash'></i> Smazat</a>";
                            if ($row['Visible'] == 0)
                            {
                                echo "<a class='tlac' href='admin.php?id=".$row['ID_clanek']."&show=1'><i class='fas fa-trash'></i> Zveřejnit</a>";
                            }
                            else 
                            {
                            echo "<a class='tlac' href='admin.php?id=".$row['ID_clanek']."&hide=1'><i class='fas fa-trash'></i> Skrýt</a>";
                            }
							
							echo '</td>';
							echo '</tr>';
							
							}
							  }
						mysqli_close($spojeni);
							?>
                        </tbody>
                      </table>


            </div>	
    <div id="odebratRoli"  class="container-fluid">

<center><div class="container change" >
        <form class="form-inline" id="userform" name="zmenroli" action="" method="POST">

            <span style="color:white" class="label label-default"><h4>Změnit roli uživatele</h4></span>
            <select class="form-select" id="users" name="userlist" form="userform">
              <?php 			
			
			require 'connect.php';			
            
            
                               // načtení všech uživatelů v databázi včetně role
                              $sql = "SELECT unicorn_uzivatel.ID_uzivatel, unicorn_uzivatel.jmeno, unicorn_uzivatel.prijmeni, unicorn_role.nazev_role FROM unicorn_uzivatel INNER JOIN unicorn_role ON unicorn_uzivatel.ID_role=unicorn_role.ID_role ";
                              $result = mysqli_query($spojeni, $sql);
                              if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)) {								  
								 echo '<option value="' . $row["ID_uzivatel"] . '">' . $row["ID_uzivatel"] . ' | ' . $row["jmeno"] . ' '. $row["prijmeni"] . ' | ' . $row["nazev_role"] . '</option>';							
							}
							  }
						mysqli_close($spojeni);
							?>
            </select>


            <select class="form-select" id="role" name="rolelist" form="userform">
                <option value="1">Autor</option>
                <option value="2">Recenzent</option>
                <option value="3">Uživatel</option>
                <option value="4">Redaktor</option>
                <option value="5">Šéfredaktor</option>
              </select>
          
         <button type="submit" name="edit" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
            <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
            <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
          </svg> Potvrdit</button>
        

        </form>     
    </div>
    </center>
    </div>
        
        

    <div id="smazatUser"  class="container-fluid">
          

        <center><div class="container change" >
            <form class="form-inline" id="deleteform" name="deleteuser" action="" method="POST" onsubmit="return confirm('Opravdu chcete smazat uživatele? Tuto akci nelze vzít zpět!');">
    
                <span style="color:white" class="label label-default"><h4>Odstranit uživatele</h4></span>
                <select class="form-select" id="users" name="userlist" form="deleteform">
                  <?php 			
			
			require 'connect.php';	
                                 // načtení všech uživatelů v databázi včetně role		
                              $sql = "SELECT unicorn_uzivatel.ID_uzivatel, unicorn_uzivatel.jmeno, unicorn_uzivatel.prijmeni, unicorn_role.nazev_role FROM unicorn_uzivatel INNER JOIN unicorn_role ON unicorn_uzivatel.ID_role=unicorn_role.ID_role ";
                              $result = mysqli_query($spojeni, $sql);
                              if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)) {								  
								 echo '<option value="' . $row["ID_uzivatel"] . '">' . $row["ID_uzivatel"] . ' | ' . $row["jmeno"] . ' '. $row["prijmeni"] . ' | ' . $row["nazev_role"] . '</option>';							
							}
							  }
						mysqli_close($spojeni);
							?>
                </select>
              
             <button data-toggle="modal" data-target="#exampleModal" type="submit" name="delete" class="delete btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
                <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
              </svg> Potvrdit</button>
            
    
            </form>    

        </div>

    </center>





    </div>	
        </div>
        
    </div>
    
    <footer>
        <p class="foot">Unicorn Team &copy 2022</p>
    </footer>
    
    </body>
    </html>


    <?php
    
    
          	if(isset($_POST["edit"]))
            {
            
                    require 'connect.php';	
                            // změna role u vybraného uživatele		
                              $sql = "UPDATE unicorn_uzivatel SET ID_role=". $_POST['rolelist']. " WHERE ID_uzivatel=" . $_POST['userlist'];
                              mysqli_query($spojeni, $sql);						
				
						mysqli_close($spojeni); 
                         echo '<meta http-equiv="refresh" content="0;url=admin.php?" /> ';                                  
            
            }
            
            if(isset($_POST["delete"]))
            {
            
                    require 'connect.php';	
                    
                            // odstranění uživatele		
                              $sql = "DELETE FROM unicorn_uzivatel WHERE ID_uzivatel=" . $_POST['userlist'];
                              mysqli_query($spojeni, $sql);						
				
						mysqli_close($spojeni);
                         echo '<meta http-equiv="refresh" content="0;url=admin.php?" /> ';                                       
            
            }
            
            if(isset($_GET["show"]))
            {
            
                    require 'connect.php';	
                            // zobrazení článku		
                              $sql = "UPDATE unicorn_clanek SET Visible=1 WHERE ID_clanek=" . $_GET['id'];
                              mysqli_query($spojeni, $sql);						
				
						mysqli_close($spojeni);
                        echo '<meta http-equiv="refresh" content="0;url=admin.php" /> ';                         
            
            }
            
            if(isset($_GET["hide"]))
            {
            
                    require 'connect.php';
                             // skrytí článku			
                              $sql = "UPDATE unicorn_clanek SET Visible=0 WHERE ID_clanek=" . $_GET['id'];
                              mysqli_query($spojeni, $sql);						
				
						mysqli_close($spojeni);
                        echo '<meta http-equiv="refresh" content="0;url=admin.php" /> ';                        
            
            }
            
            if(isset($_GET["del"]))
            {
            
                    require 'connect.php';
                                // smazání článku			
                              $sql = "DELETE FROM unicorn_clanek WHERE ID_clanek=" . $_GET['id'];
                              mysqli_query($spojeni, $sql);						
				
						mysqli_close($spojeni);
                        echo '<meta http-equiv="refresh" content="0;url=admin.php" /> ';                                        
            
            }
            
               
    
    ?>
