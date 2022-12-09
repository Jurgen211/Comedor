
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title> GruposModificar</title>

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

<form action="./Buscador.php" method="POST" autocomplete="off" style="color:black ">
    <input type="text" name="grupo" placeholder="Ingrese la letra del grupo" maxlength="1" onkeyup="this.value = this.value.toUpperCase();">
    <input type="submit" value="Buscar" class="btn btn-info">

</form>

</body>
</html>

<?php

require "../Connect/connect.php";
$grupo=$_POST['grupo'];


if($grupo==A) {
    $query="SELECT * FROM GrupoA";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
                                
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='./Mod/ModA.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";
}
elseif ($grupo==B){

    $query="SELECT * FROM GrupoB";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='ModificarG.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";



}
elseif ($grupo==C){

    $query="SELECT * FROM GrupoC";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='ModificarG.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";



}
elseif ($grupo==D){

    $query="SELECT * FROM GrupoD";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='ModificarG.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";



}
elseif ($grupo==E){

    $query="SELECT * FROM GrupoE";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='ModificarG.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";



}
elseif ($grupo==F){

    $query="SELECT * FROM GrupoF";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='ModificarG.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";



}
elseif ($grupo==G){

    $query="SELECT * FROM GrupoG";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='ModificarG.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";



}
elseif ($grupo==H){

    $query="SELECT * FROM GrupoH";
    $var=$mysqli->query($query);
    echo"
      <table>
      <thead>
           <tr >
                <th scope='col'>Club</th>
                <th scope='col'>Pais</th>
                <th scope='col'>PJ</th>
                <th scope='col'>G</th>
                <th scope='col'>E</th>
                <th scope='col'>P</th>
                <th scope='col'>GF</th>
                <th scope='col'>GC</th>
                <th scope='col'>DG</th>
                <th scope='col'>PTS</th><th scope='col'>Modificar</th>
                
            </tr>
       </thead>
        <tbody>";
    while($fila=$var->fetch_array(MYSQLI_ASSOC)){
        echo "
        <tr style='background-color: whitesmoke;color: black'>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td>".$fila['PartidosJugados']."</td>
						<td>".$fila['Ganados']."</td>
						<td>".$fila['Perdidos']."</td>
						<td>".$fila['Empatados']."</td>
						<td>".$fila['GolesFavor']."</td>
						<td>".$fila['GolesContra']."</td>
						<td>".$fila['DiferenciaGoles']."</td>
						<td>".$fila['Pts']."</td>
						<td ><a href='ModificarG.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
					</tr>
        ";
    }
    echo "</tbody></table>";



}
else{
    echo "<label>No se encontro el Grupo</label>";
}














?>

