<?php
/*
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    echo "Esta página es solo para usuarios registrados. <br> <br>";
    echo "<a href='./index.php'>LOGIN</a>";
    exit();
}

$now = time();

if ($now > $_SESSION['expire']) {
    session_destroy();

    echo "Su sesión ha caducado";
    echo "<a href='./index.php'>NECESITA HACER LOGIN</a>";
    exit();
}

*/

?>

<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/iconoUEFA.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<header><?php
    include 'Navbar-equipos.php';
    ?></header>
<body>
<?php
if(isset($_GET['Club'])){
    require '../Connect/connect.php';
    $Club=$_GET['Club'];
    $query="SELECT * FROM Equipo Where Club='$Club'";

    $consulta=$mysqli->query($query);

    $fila=$consulta->fetch_array(MYSQLI_ASSOC);

    echo' <div class="col-lg-7" >
<form action="Modificar-equipo.php" method="post">

      <label>Club</label><input class="form-control" type="text" readonly name="Club" value="'.$fila['Club'].'">
      <label>Pais</label><input class="form-control" type="text" readonly name="Pais" value="'.$fila['Pais'].'">
          
         <div style="justify-content: center;text-align: center;">
          <br><br><br><label>Ingrese los nuevos datos</label><br>
            </div>
      <label>Nuevo Club</label><input type="text" class="form-control" name="NuevoClub" onkeyup="this.value = this.value.toUpperCase();"><br>
      <label>Nuevo Pais</label><input type="text" class="form-control" name="NuevoPais" onkeyup="this.value = this.value.toUpperCase();"><br>
      
      <input type="submit" class="btn btn-info" value="Modificar">
      </form>
      </div>
      
      <div class="col-lg-5" style="display: flex; justify-content: space-around; align-content: center;top:100px" >
                <div > <img src="../img/LogoUNA.png" width="150" height="150"></div>
                <div> <img src="../img/LogoUEFA.png" width="150" height="150"></div>
            </div>
            
      ';



}else{
    echo "Ocurrio un error al modificar";
}

?>
</body>
</html>
