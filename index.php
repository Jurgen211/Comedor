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
                    <p>La Liga de Campeones de la CAF (en ingl??s, CAF Champions League), anteriormente conocida como Copa Africana de Clubes Campeones y actualmente llamada Total CAF Champions League por razones de patrocinio, es el torneo internacional oficial de f??tbol m??s prestigioso a nivel de clubes entre las competiciones organizadas por la Confederaci??n Africana de F??tbol</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/concacaf.png" alt="">
                    <p>La Confederaci??n de Norteam??rica, Centroam??rica y el Caribe de F??tbol, m??s conocida como Concacaf, es la confederaci??n de asociaciones nacionales de f??tbol en Am??rica del Norte, Am??rica Central y las islas del Caribe.???Es una de las seis confederaciones pertenecientes a la FIFA.</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/conmebol.png" alt="">
                    <p>La Copa Libertadores de Am??rica, denominada oficialmente Copa Conmebol Libertadores, ??? es un torneo anual internacional oficial de f??tbol organizado por la Confederaci??n Sudamericana de F??tbol, creado en 1960 bajo la denominaci??n de Copa de Campeones de Am??rica o Copa Campeones de Am??rica. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="img/afc.png" alt="">
                <p>La Confederaci??n Asi??tica de F??tbol (en ingl??s, Asian Football Confederation), tambi??n conocida por su siglas AFC, es la confederaci??n de asociaciones nacionales de f??tbol en la mayor parte de Asia, Australia, Guam e Islas Marianas del Norte. Es el m??ximo ente de este deporte en el continente, y una de las seis confederaciones pertenecientes a la FIFA. Fue fundada en 1954 y su sede central se encuentra en Kuala Lumpur, Malasia.</p>
            </div>
            <div class="col-lg-4">
                <img src="img/uefaaas.png" alt="">
                <p>La Uni??n de Federaciones Europeas de F??tbol1??? (en franc??s, Union des Associations Europ??ennes de Football),2??? referida com??nmente por su acr??nimo UEFA, es la confederaci??n europea de asociaciones nacionales de f??tbol y m??ximo ente de este deporte en el continente. Agrupa en la actualidad a 55 asociaciones y es una de las seis confederaciones pertenecientes a la Federaci??n Internacional de F??tbol Asociaci??n (FIFA), m??ximo rector en el mundo.3</p>
            </div>
            <div class="col-lg-4">
                <img src="img/ofc.png" alt="">
                <p>La Confederaci??n de F??tbol de Ocean??a (en ingl??s, Oceania Football Confederation; en franc??s, Conf??d??ration du football d'Oc??anie), tambi??n conocida por su acr??nimo OFC, es la confederaci??n de asociaciones nacionales de f??tbol en Ocean??a. Es el m??ximo ente de este deporte en el continente y una de las seis confederaciones pertenecientes a la FIFA. Fue fundada en 1966 y su sede central se encuentra en Auckland, Nueva Zelanda. </p>
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
                <h1 class="centered">??Qui??nes somos?</h1>
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
                                    <p>La UEFA, la Uni??n de Federaciones Europeas de F??tbol, es el ??rgano rector del f??tbol europeo. Es una asociaci??n de federaciones, una democracia representativa, y una organizaci??n global de 55 federaciones nacionales a lo largo de toda Europa.
                                        Sus objetivos son, entre otros, hacer frente a todas las cuestiones relativas al f??tbol europeo; promover el f??tbol en un esp??ritu de unidad, solidaridad, paz, comprensi??n y juego limpio sin ning??n tipo de discriminaci??n pol??tica, de raza, religi??n, g??nero o cualquier otra; salvaguardar los valores del f??tbol europeo; promover y proteger los est??ndares ??ticos y el buen gobierno del f??tbol europeo; mantener relaciones con todas las partes implicadas en el f??tbol europeo; y apoyar y salvaguardar a sus federaciones miembro por el bienestar general del f??tbol europeo.
                                        La UEFA es una sociedad inscrita en el registro mercantil dentro del marco del c??digo civil suizo. Es neutral, tanto pol??tica como religiosamente. Su sede est?? ubicada en Nyon (Suiza). Es una confederaci??n continental reconocida por el m??ximo organismo del f??tbol mundial, la FIFA, cuya sede se encuentra en Z??rich (Suiza).
                                        Los organismos a trav??s de los cuales funciona la UEFA son el Congreso de la UEFA, el Comit?? Ejecutivo de la UEFA, el Presidente de la UEFA y los organismos de la administraci??n de justicia.
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
                                    <p>La Uni??n Europea de Asociaciones de F??tbol (en franc??s, Union Europ??enne de Football Association) fue fundada el 15 de junio de 1954 en Basilea, Suiza,9??? debido a las necesidades imperantes en el f??tbol europeo continental, hasta entonces sin un organismo rector. Es por ello que surge tras un consenso de tres de las federaciones m??s reconocidas de la ??poca, la Federaci??n Italiana (FIGC), la Federaci??n Francesa (FFF) y la Federaci??n Belga (KBVB/URBSFA). Hasta la fecha eran las propias federaciones de cada pa??s las que velaban por dicho deporte en cada regi??n siguiendo las normativas FIFA, y que empezaba a internacionalizarse en el territorio merced sobre todo a partidos de ??ndole amistosa y a las primeras competiciones de clubes.

                                        Entre ellas destacaron la Copa de Europa Central y la Copa Latina de Europa del Sur, ambas consideradas predecesoras de la actual Liga de Campeones (originalmente Copa de Europa),10??? que fue la primera competici??n oficial lanzada por el organismo en 1955. Sin embargo, ya se encontraba inmersa desde su fundaci??n en la creaci??n de una competici??n europea de selecciones que finalmente vio la luz en 1960, la Copa de Europa de Naciones, m??s conocida como Eurocopa. Ambas son en la actualidad dos de las competiciones futbol??sticas m??s prestigiosas del mundo, y precisamente el promotor de esta ??ltima, Henri Delaunay, fue el primer secretario general del organismo mientras que Ebbe Schwartz fue su primer presidente.

                                        Su sede se ubic?? en Par??s, Francia, hasta que en 1959 fue trasladada a Berna y posteriormente en 1995 a Nyon, Suiza, donde contin??a localizada. Conocida simplemente por su acr??nimo UEFA est?? definido en el estatuto de la organizaci??n como la abreviaci??n de su nombre en franc??s, sin embargo es com??nmente asociado con el ingl??s Union of European Football Associations.

                                        El organismo es una de las m??s fuertes y reconocidas de las seis confederaciones mundiales, debido a la importancia de sus miembros, entre los que se encuentran varias de las principales asociaciones, ligas y selecciones de f??tbol del mundo. Un ejemplo de esto es que la FIFA otorg?? a la UEFA 13 de los 32 cupos de participantes para la Copa Mundial de 2014 que se celebr?? en Brasil.

                                        A nivel organizativo promueve competiciones de clubes, como la ya mencionada Liga de Campeones y la Liga Europa (originalmente Copa de la UEFA), o de selecciones nacionales, siendo la principal la Eurocopa (oficialmente Campeonato de Europa de Naciones), todas a nivel masculino.n 3??? En categor??a de mujeres organiza tambi??n la Liga de Campeones y la Eurocopa en claro reconocimiento y legitimidad al auge que tiene en la actualidad el f??tbol femenino.</p>
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

