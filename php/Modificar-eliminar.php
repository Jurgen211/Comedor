<?php

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



?>
<!DOCTYPE html>
<html lang="es">
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
<header>
    <?php
    include 'Navbar-equipos.php';
    ?></header>
<body>
<div style="width: 100%;display: flex;justify-content: center">
<div style="justify-content: center; display: flex;width: 40%;">
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th scope="col">Club</th>
            <th scope="col">Pais</th>
            <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require '../Connect/connect.php';
        $query="SELECT * FROM Equipo";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "<tr>
						<td>".$fila['Club']."</td>
						<td>".$fila['Pais']."</td>
						<td ><a href='Modificar.php?Club=".$fila['Club']."'><button type='button' class='btn btn-warning'>Modificar </button></a></td>
						<td><a href='EliminarEquipo.php?Club=".$fila['Club']."'><button type='button' class='btn btn-danger' onclick='return confirmar()'>Eliminar </button></a></td>
					</tr>";
        }
        ?>
        </tbody>
    </table>

</div>
</div>
<script>
    function confirmar(){
        var respuesta= confirm('Estas seguro que desea eliminar el club?');
        if(respuesta==true){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>
