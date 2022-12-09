<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title> Subpagina</title>

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

    <div id="navigation" class="navbar navbar-default navbar-static-top" style="background-color:#3a698d;display: flex;justify-content: center; width: 100%">
        <h1>Tablas de Grupos</h1>
    </div></header>
<body>
<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo A</caption>
            <thead style="background-color: #5bc0de;color: black">
            <tr >
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoA ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>


<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo B</caption>
            <thead  style="background-color: #5bc0de;color: black">
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoB ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>


<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo C</caption>
            <thead  style="background-color: #5bc0de;color: black">
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoC ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>



<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo D</caption>
            <thead style="background-color: #5bc0de;color: black">
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoD ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>



<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo E</caption>
            <thead style="background-color: #5bc0de;color: black">
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoE ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>


<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo F</caption>
            <thead style="background-color: #5bc0de;color: black">
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoF ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>


<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo G</caption>
            <thead style="background-color: #5bc0de;color: black">
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoG ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>



<div style="width: 100%;display: flex;justify-content: center">
    <div style="justify-content: center; display: flex;width: 40%;">
        <table class="table table-bordered table-dark">
            <caption style="color: white">Grupo H</caption>
            <thead style="background-color: #5bc0de;color: black">
            <tr>
                <th scope="col">Club</th>
                <th scope="col">Pais</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">PTS</th>
            </tr>
            </thead>

            <tbody>
            <?php
            require '../Connect/connect.php';
            $query="SELECT * FROM GrupoH ORDER BY Pts DESC";
            $consulta1=$mysqli->query($query);
            while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
                echo "<tr style='background-color: whitesmoke;color: black'>
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
					</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
</div>

<!--CAROUSELL -->
</body>
</html>
