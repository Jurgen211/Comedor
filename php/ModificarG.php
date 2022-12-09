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
    $Club=$_GET['grupo'];
    $query="SELECT * FROM Grupo Where Club='$Club'";

    $consulta=$mysqli->query($query);

    $fila=$consulta->fetch_array(MYSQLI_ASSOC);

    echo' <div class="col-lg-7" >
<form action="Modificar-equipo.php" method="post">

      <label>Club</label><input class="form-control" type="text" readonly name="Club" value="'.$fila['Club'].'">
      <label>Pais</label><input class="form-control" type="text" readonly name="Pais" value="'.$fila['Pais'].'">
      <label>Partidos Jugados</label>><input class="form-control"  type="text" readonly name="PartidosJugados" value="'.$fila['PartidosJugados'].'">                     
	  <label>Ganados</label><input class="form-control" type="text" reandonly name="Ganados" value="'.$fila['Ganados'].'">
	  <label>Perdidos</label><input class="form-control" type="text" reandonly name="Perdidos" value="'.$fila['Perdidos'].'">
	  <label>Empatados</label><input class="form-control" type="text" reandonly name="Empatados" value="'.$fila['Empatados'].'">
	  <label>Goles a Favor</label><input class="form-control" type="text" reandonly name="GolesFavor" value="'.$fila['GolesFavor'].'">			
	  <label>Goles en Contra</label><input class="form-control" type="text" reandonly name="GolesContra" value="'.$fila['GolesContra'].'">
	  <label>Diferencia de Goles</label><input class="form-control" type="text" reandonly name="Ganados" value="'.$fila['DiferenciaGoles'].'">
	  <label>Puntos</label><input class="form-control" type="text" reandonly name="Pts" value="'.$fila['Pts'].'">
          
         <div style="justify-content: center;text-align: center;">
          <br><br><br><label>Ingrese los nuevos datos</label><br>
            </div>
      <label>Nuevo PartidosJugados</label><input type="text" class="form-control" name="NuevoPartidoJugados"><br>
      <label>Nuevo Ganados</label><input type="text" class="form-control" name="NuevoGanados"><br>
      <label>Nuevo Ganados</label><input type="text" class="form-control" name="NuevoPerdidos"><br>
      <label>Nuevo Ganados</label><input type="text" class="form-control" name="NuevoEmpatados"><br>
      <label>Nuevo Ganados</label><input type="text" class="form-control" name="NuevoGolesFavor"><br>
      <label>Nuevo Ganados</label><input type="text" class="form-control" name="NuevoGolesContra"><br>
      <label>Nuevo Ganados</label><input type="text" class="form-control" name="NuevoDiferenciaGoles"><br>
      <label>Nuevo Ganados</label><input type="text" class="form-control" name="NuevoPts"><br>
      
      
      
      <input type="submit" class="btn btn-info" value="ModificarGrupo">
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

