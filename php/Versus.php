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

<body>
<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Goles</th>
                <th scope="col">Club</th>
                <th scope="col">Goles</th>
                <th scope="col">Actualizar</th>

            </tr>
            </thead>
            <tbody>
            <?php

            require '../Connect/connect.php';
            $queryL="SELECT Club FROM GrupoA WHERE  ID=1";
            $queryV="SELECT Club FROM GrupoA WHERE ID=3";
            $consultaL=$mysqli->query($queryL);
            $consultaV=$mysqli->query($queryV);
            while($fila=$consultaL->fetch_array(MYSQLI_ASSOC)){
                echo "<tr>
                      <form action='./Partidos.php' method='get'>
						<td>".$fila['Club']."</td>
						<td style='color: black'><input type='text' name='GolesLocal'></td>
					   
						
				";

            }
            while($fila=$consultaV->fetch_array(MYSQLI_ASSOC)){
                echo"
                <td>".$fila['Club']."</td>
				<td style='color: black'><input type='text' name='GolesVisitante'></td>
				<td><input type='text' name='Grupo' value='GrupoA' hidden>
				<input type='text' name='IDL' value='1' hidden>
				<input type='text' name='IDV' value='3' hidden>
				<button type='button' class='btn btn-warning' type='submit'>Modificar </button></td>
                 </form>
                   </tr>
               
                ";


            }
            ?>
            </tbody>
        </table>

    </div>
</div>







</body>
</html>


<?php



?>

<?php
mysqli_close($mysqli);

