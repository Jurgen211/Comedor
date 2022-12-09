<?php
require "../Connect/connect.php";

$Club = $_POST['Club'] ;
$Pais= $_POST['Pais'];
$frase="";


$sql = "SELECT * FROM Equipo WHERE Club = '$Club'";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);



$contador=0;
$var=0;


//$queryCountD = "SELECT count(*) FROM REGISTRO_SEMANAL WHERE DIA = '{$diaSQL}'";
$cont = "SELECT count(*) FROM Equipo WHERE Pais='{$Pais}'";
$data = "SELECT * FROM Equipo WHERE Club != ''";


$resultado=$mysqli->query($data);
while($linea=$resultado->fetch_assoc()){
    $contador+=$linea['count(*)'];
}

$r= $mysqli->query($cont);
while($line =$r->fetch_assoc()){
    $var+=$line['count(*)'];
}

if ($Club==$row['Club']) {

    $frase="El equipo ya existe en el sistema";
}
elseif ($var>=4){

    $frase="Ya hay 4  equipos de ese pais";

}
elseif ($contador>=32){

    $frase="Ya ha añadido en numero maximo de equipos";

}

else {

    $query = "INSERT INTO Equipo(Club,Pais) VALUES('{$Club}','{$Pais}')";

    if($mysqli->query($query)) {
        $frase = "Datos guardados";
    }
}
echo "<script>
alert('$frase');
 location.href = 'http://184.72.123.238/Proyecto1/php/IngresarEquipo.php';
</script>";


