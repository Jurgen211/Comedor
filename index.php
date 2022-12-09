<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UEFA-UNA</title>
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
    <link href="css/style.css" rel="stylesheet">


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation" style=" padding-top: 44px;background-color: white;font-size: 16px;
  color: black;">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top" style="background-color:#3a698d">
    <div class="container"  style="display: flex;">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#desc" class="smothscroll"><button type="button" class="btn btn-info">Campeonatos</button></a></li>
                <li><a href="#contact" class="smothscroll"><button type="button" class="btn btn-info">Contacto</button></a></li>
                <li ><a href="./php/Subpagina.php"><button type="button" class="btn btn-success">Ver Grupos</button></a></li>
            </ul>
        </div>

        <a href="login.php"  style="position: fixed;left: 75%;top: 10px" class="btn btn-info" role="button" aria-pressed="true">Login</a>
        <!--/.nav-collapse -->
    </div>
</div>

<section id="desc" name="desc">
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>Campeonatos Continentales</h1>
                <br>
                <br>
                <div class="col-lg-4">
                    <img src="img/caf-logo.png" alt="">
                    <p>La Liga de Campeones de la CAF (en inglés, CAF Champions League), anteriormente conocida como Copa Africana de Clubes Campeones y actualmente llamada Total CAF Champions League por razones de patrocinio, es el torneo internacional oficial de fútbol más prestigioso a nivel de clubes entre las competiciones organizadas por la Confederación Africana de Fútbol</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/concacaf.png" alt="">
                    <p>La Confederación de Norteamérica, Centroamérica y el Caribe de Fútbol, más conocida como Concacaf, es la confederación de asociaciones nacionales de fútbol en América del Norte, América Central y las islas del Caribe.​Es una de las seis confederaciones pertenecientes a la FIFA.</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/conmebol.png" alt="">
                    <p>La Copa Libertadores de América, denominada oficialmente Copa Conmebol Libertadores, ​ es un torneo anual internacional oficial de fútbol organizado por la Confederación Sudamericana de Fútbol, creado en 1960 bajo la denominación de Copa de Campeones de América o Copa Campeones de América. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="img/afc.png" alt="">
                <p>La Confederación Asiática de Fútbol (en inglés, Asian Football Confederation), también conocida por su siglas AFC, es la confederación de asociaciones nacionales de fútbol en la mayor parte de Asia, Australia, Guam e Islas Marianas del Norte. Es el máximo ente de este deporte en el continente, y una de las seis confederaciones pertenecientes a la FIFA. Fue fundada en 1954 y su sede central se encuentra en Kuala Lumpur, Malasia.</p>
            </div>
            <div class="col-lg-4">
                <img src="img/uefaaas.png" alt="">
                <p>La Unión de Federaciones Europeas de Fútbol1​ (en francés, Union des Associations Européennes de Football),2​ referida comúnmente por su acrónimo UEFA, es la confederación europea de asociaciones nacionales de fútbol y máximo ente de este deporte en el continente. Agrupa en la actualidad a 55 asociaciones y es una de las seis confederaciones pertenecientes a la Federación Internacional de Fútbol Asociación (FIFA), máximo rector en el mundo.3</p>
            </div>
            <div class="col-lg-4">
                <img src="img/ofc.png" alt="">
                <p>La Confederación de Fútbol de Oceanía (en inglés, Oceania Football Confederation; en francés, Confédération du football d'Océanie), también conocida por su acrónimo OFC, es la confederación de asociaciones nacionales de fútbol en Oceanía. Es el máximo ente de este deporte en el continente y una de las seis confederaciones pertenecientes a la FIFA. Fue fundada en 1966 y su sede central se encuentra en Auckland, Nueva Zelanda. </p>
            </div>


            </div>
            <br>
            <hr>
        </div>
        <!--/ .container -->
    </div>
    <!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">¿Quiénes somos?</h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="centered" src="img/UEFA.jpg" alt="">
                </div>

                <div class="col-lg-6">
                    <h3>Algunas caracteristicas</h3>
                    <br>
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" style="color: #162E58">
                                    Sobre nosotros
                                </a>
                            </div>
                            <!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p>La UEFA, la Unión de Federaciones Europeas de Fútbol, es el órgano rector del fútbol europeo. Es una asociación de federaciones, una democracia representativa, y una organización global de 55 federaciones nacionales a lo largo de toda Europa.
                                        Sus objetivos son, entre otros, hacer frente a todas las cuestiones relativas al fútbol europeo; promover el fútbol en un espíritu de unidad, solidaridad, paz, comprensión y juego limpio sin ningún tipo de discriminación política, de raza, religión, género o cualquier otra; salvaguardar los valores del fútbol europeo; promover y proteger los estándares éticos y el buen gobierno del fútbol europeo; mantener relaciones con todas las partes implicadas en el fútbol europeo; y apoyar y salvaguardar a sus federaciones miembro por el bienestar general del fútbol europeo.
                                        La UEFA es una sociedad inscrita en el registro mercantil dentro del marco del código civil suizo. Es neutral, tanto política como religiosamente. Su sede está ubicada en Nyon (Suiza). Es una confederación continental reconocida por el máximo organismo del fútbol mundial, la FIFA, cuya sede se encuentra en Zúrich (Suiza).
                                        Los organismos a través de los cuales funciona la UEFA son el Congreso de la UEFA, el Comité Ejecutivo de la UEFA, el Presidente de la UEFA y los organismos de la administración de justicia.
                                    </p>
                                </div>
                                <!-- /accordion-inner -->
                            </div>
                            <!-- /collapse -->
                        </div>
                        <!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" style="color: #162E58">Historia</a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>La Unión Europea de Asociaciones de Fútbol (en francés, Union Européenne de Football Association) fue fundada el 15 de junio de 1954 en Basilea, Suiza,9​ debido a las necesidades imperantes en el fútbol europeo continental, hasta entonces sin un organismo rector. Es por ello que surge tras un consenso de tres de las federaciones más reconocidas de la época, la Federación Italiana (FIGC), la Federación Francesa (FFF) y la Federación Belga (KBVB/URBSFA). Hasta la fecha eran las propias federaciones de cada país las que velaban por dicho deporte en cada región siguiendo las normativas FIFA, y que empezaba a internacionalizarse en el territorio merced sobre todo a partidos de índole amistosa y a las primeras competiciones de clubes.

                                        Entre ellas destacaron la Copa de Europa Central y la Copa Latina de Europa del Sur, ambas consideradas predecesoras de la actual Liga de Campeones (originalmente Copa de Europa),10​ que fue la primera competición oficial lanzada por el organismo en 1955. Sin embargo, ya se encontraba inmersa desde su fundación en la creación de una competición europea de selecciones que finalmente vio la luz en 1960, la Copa de Europa de Naciones, más conocida como Eurocopa. Ambas son en la actualidad dos de las competiciones futbolísticas más prestigiosas del mundo, y precisamente el promotor de esta última, Henri Delaunay, fue el primer secretario general del organismo mientras que Ebbe Schwartz fue su primer presidente.

                                        Su sede se ubicó en París, Francia, hasta que en 1959 fue trasladada a Berna y posteriormente en 1995 a Nyon, Suiza, donde continúa localizada. Conocida simplemente por su acrónimo UEFA está definido en el estatuto de la organización como la abreviación de su nombre en francés, sin embargo es comúnmente asociado con el inglés Union of European Football Associations.

                                        El organismo es una de las más fuertes y reconocidas de las seis confederaciones mundiales, debido a la importancia de sus miembros, entre los que se encuentran varias de las principales asociaciones, ligas y selecciones de fútbol del mundo. Un ejemplo de esto es que la FIFA otorgó a la UEFA 13 de los 32 cupos de participantes para la Copa Mundial de 2014 que se celebró en Brasil.

                                        A nivel organizativo promueve competiciones de clubes, como la ya mencionada Liga de Campeones y la Liga Europa (originalmente Copa de la UEFA), o de selecciones nacionales, siendo la principal la Eurocopa (oficialmente Campeonato de Europa de Naciones), todas a nivel masculino.n 3​ En categoría de mujeres organiza también la Liga de Campeones y la Eurocopa en claro reconocimiento y legitimidad al auge que tiene en la actualidad el fútbol femenino.</p>
                                </div>
                                <!-- /accordion-inner -->
                            </div>
                            <!-- /collapse -->
                        </div>
                        <!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" style="color: #162E58">Paises que nos conforman</a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>Muchos paises</p>
                                </div>
                                <!-- /accordion-inner -->
                            </div>
                            <!-- /collapse -->
                        </div>
                        <!-- /accordion-group -->
                        <br>

                        <!-- /accordion-group -->
                        <br>
                    </div>
                    <!-- Accordion -->
                </div>
            </div>
        </div>
        <!--/ .container -->
    </div>
    <!--/ #features -->
</section>

<section id="contact" name="contact">
    <div id="footerwrap">
        <div class="container" style="align-items: center;display: flex; flex-wrap:wrap;align-content: center">

            <div class="col-lg-7">
                <h3>Drop Us A Line</h3>

                <br>
                <form  action="https://formsubmit.co/alexandergiralt22@gmail.com" method="POST">

                    <div class="form-group">
                        <label >Username</label>
                        <input type="text" name="Nombre" class="form-control" id="contact-name" placeholder="Username" >
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label >email</label>
                        <input type="email" name="Correo" class="form-control" id="contact-name" placeholder="Email" >
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label >mensaje</label>
                        <input type="text" name="mensaje" class="form-control" id="contact-name" placeholder="Mensaje" >
                        <div class="validate"></div>
                    </div>





                    <div class="form-send">
                        <button type="submit" class="btn btn-info">Enviar</button>
                    </div>

                </form>

            </div>
            <div class="col-lg-5" style="display: flex; justify-content: space-around; align-content: center;" >
                <div > <img src="./img/LogoUNA.png" width="150" height="150"></div>
                <div> <img src="./img/LogoUEFA.png" width="150" height="150"></div>



            </div>
        </div>
    </div>
</section>
<div id="copyrights">
    <div class="container">
        <p>
            &copy; Copyrights <strong>Universidad Nacional de Costa Rica</strong>. Todos los derechos reservados
        </p>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/php-mail-form/validate.js"></script>
<script src="lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/functions.js"></script>

</body>
</html>

