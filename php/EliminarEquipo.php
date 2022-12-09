<?php
require '../Connect/connect.php';

if(isset($_GET['Club'])){
    $Club=$_GET['Club'];
    $query="DELETE FROM Equipo WHERE Club='$Club'";
    if($mysqli->query($query)){
        header('location: http://184.72.123.238/Proyecto1/php/Modificar-eliminar.php' );

    }else{
        echo "Error no se pudo eliminar el registro";
    }
}else{
    echo "Error no se pudo procesar la peticion";
}
