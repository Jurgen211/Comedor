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
<body data-spy="scroll" data-offset="0" data-target="#navigation" style="background-color: #162E58">
<section id="contact" name="contact">
    <div id="footerwrap">
        <div class="container" style="align-items: center;display: flex;align-content: center; flex-wrap: wrap">

            <div class="col-lg-7">
                <h3>Ingreso de paises</h3>

                <br>
                <form  action="./RegistroEquipo.php" method="POST">

                    <div class="form-group">
                        <label>Club</label>
                        <input type="text" class="form-control" id="Club" name="Club" placeholder="Club" required onkeyup="this.value = this.value.toUpperCase();">
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label>Pais</label>
                        <input type="text" class="form-control" id="Pais" name="Pais" placeholder="Pais"  required onkeyup="this.value = this.value.toUpperCase();">
                        <br><br>
                    </div>

                    <button type="submit" class="btn btn-info" >Insertar</button>


                </form>

            </div>
            <div class="col-lg-5" style="display: flex; justify-content: space-around; align-content: center;top:100px" >
                <div > <img src="../img/LogoUNA.png" width="150" height="150"></div>
                <div> <img src="../img/LogoUEFA.png" width="150" height="150"></div>
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
<script src="js/main.js"></script>

</body>
</html>

