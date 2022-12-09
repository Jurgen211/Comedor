<?php  /*
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    echo "Esta pÃ¡gina es solo para usuarios registrados. <br> <br>";
    echo "<a href='./index.html'>LOGIN</a>";
    exit();
}

$now = time();

if ($now > $_SESSION['expire']) {
    session_destroy();

    echo "Su sesiÃ³n ha caducado";
    echo "<a href='./index.html'>NECESITA HACER LOGIN</a>";
    exit();
}*/
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ingresar Equipo</title>
    </head>

    <header><?php
        include 'Navbar-equipos.php';
        ?></header>
    <body>
    <form action="./Buscador.php" method="POST" autocomplete="off" >
        <input type="text" name="grupo" placeholder="Ingrese la letra del grupo" >
        <input type="submit" value="Buscar">
        <br>
    </form>
    </body>
</html>

