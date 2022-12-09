<?php
require '../Connect/connect.php';

$Club=$_POST['Club'];
$Pais=$_POST['Pais'];
$NClub=$_POST['NuevoClub'];
$NPais=$_POST['NuevoPais'];
$contador=0;



$var="SELECT * FROM Equipo WHERE Club='$Club'";
$consulta=$mysqli->query($var);
$fila=$consulta->fetch_array(MYSQLI_ASSOC);


$cont = "SELECT count(*) FROM Equipo WHERE Pais='{$NPais}'";
$r= $mysqli->query($cont);
while($line =$r->fetch_assoc()){
    $contador+=$line['count(*)'];
}

if($NClub!="" && $NPais=="" && $contador<4){
    $campos="Club='$NClub',Pais='$Pais'" ;

}elseif($NPais!="" && $NClub=="" && $contador<4){

    $campos="Club='$Club',Pais='$NPais'";

}elseif ($NClub!="" && $NPais!="" && $contador<4){
    $campos="Club='$NClub',Pais='$NPais'";
}elseif ($NClub=="" && $NPais=="" && $contador<4){
    header('location: http://3.91.201.45/Proyecto1/php/Modificar-eliminar.php' );
}
else{
    $campos="Club='$Club',Pais='$Pais'";
}
$query="UPDATE Equipo SET $campos WHERE Club='$Club'";

if($mysqli->query($query)){

    echo "<script>
alert('Modificado correctamente');
 location.href = 'http://184.72.123.238/Proyecto1/php/Modificar-eliminar.php';
</script>";
}else{
    echo "<script>
alert('Ocurrió un error');
 location.href = 'http://184.72.123.238/Proyecto1/php/Modificar-eliminar.php';
</script>";
}