<?php

/*session_start();

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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UEFA-UNA/Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/iconoUEFA.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="./css/style.css" rel="stylesheet">


</head>

<header>
    <div id="navigation" class="navbar navbar-default navbar-static-top" style="background-color:#3a698d">
            <div style="position: fixed;left: 75%;top: 10px"> <a href="php/logout.php"  class="btn btn-danger" role="button" aria-pressed="true">Logout</a></div>
        </div>
    </div></header>

<body data-spy="scroll" data-offset="0" data-target="#navigation" style="background-color: #162E58">

<section id="contact" name="contact">
    <div id="footerwrap">
        <div class="container" style="align-items: center;display: flex;align-content: center;flex-wrap:wrap;">


            <div class="col-lg-7">
                <h3>ADMINISTRADOR</h3>

                <br>
                <a href="./php/IngresarEquipo.php"><button type="button" class="btn btn-info">Equipos</button></a>
                <a href="./php/Sorteo.php"><button type="button" class="btn btn-info">Sorteo</button></a>

            </div>
            <div class="col-lg-5" style="display: flex; justify-content: space-around; top: 100px;align-content: center;" >
                <div > <img src="./img/LogoUNA.png" width="150" height="150"></div>
                <div> <img src="./img/LogoUEFA.png" width="150" height="150"></div>
            </div>
        </div>
    </div>
</section>



<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/php-mail-form/validate.js"></script>
<script src="lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/functions.js"></script>

</body>




</html>
