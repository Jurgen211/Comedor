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
<body  >
<div id="navigation" class="navbar navbar-default navbar-static-top" style="background-color:#3a698d">

<div class="container"  style="display: flex;">
        <div class="navbar-header">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="IngresarEquipo.php" ><button type="button" class="btn btn-info">Insertar equipos</button></a></li>
                <li ><a href="Modificar-eliminar.php"><button type="button" class="btn btn-info">Modificar/Eliminar equipo</button></a></li>
                <li ><a href="./Buscador.php"><button type="button" class="btn btn-info">GruposUpdate</button></a></li>
                <li> <a href="Sorteo.php"><button type="button" onclick='return confirmar()' class="btn btn-info">Sorteo</button></a></li>

                <li ><a href="../index.php"><button type="button" class="btn btn-success">Main</button></a></li>

            </ul>


            <a href="logout.php"  style="position: fixed;left: 75%;top: 10px" class="btn btn-danger" role="button" aria-pressed="true">Logout</a>
        </div>




        <!--/.nav-collapse -->

</div>
</div>

<script>
    function confirmar(){
        var respuesta= confirm('Estas seguro que desea hacer el sorteo de grupos?');
        if(respuesta==true){
            return true;
        }else{
            return false;
        }
    }
</script>

<!-- JavaScript Libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/php-mail-form/validate.js"></script>
<script src="../lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="../js/functions.js"></script>
</body>
</html>

