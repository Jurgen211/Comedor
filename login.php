<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UEFA-UNA/Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../img/iconoUEFA.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation" style="background-color: #162E58">






<section id="contact" name="contact">
    <div id="footerwrap">
        <div class="container" style="align-items: center;display: flex;align-content: center; flex-wrap:wrap;">


            <div class="col-lg-7">
                <h3>Login</h3>

                <br>
                <form  action="./php/checklogin.php" method="POST">

                    <div class="form-group">
                        <label >Username</label>
                        <input type="text" name="username" class="form-control" id="Username" placeholder="Username" >
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="contact-email">Password</label>
                        <input type="password" name="password" class="form-control" id="Email" placeholder="Password" >
                        <div class="validate"></div>
                    </div>






                        <button type="submit" class="btn btn-info">Login</button>


                </form>

            </div>
            <div class="col-lg-5" style="display: flex; justify-content: space-around; align-content: center;top:100px" >
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
