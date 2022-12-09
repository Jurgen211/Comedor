<?php

require "../Connect/connect.php";

$PartidosJ=0;
$PartidosG=0;
$PartidosP=0;
$PartidosE=0;
$GolesF=0;
$GolesE=0;
$DiferenciaG=0;
$Pts=0;
$IDA=1;
$IDB=1;
$IDC=1;
$IDD=1;
$IDE=1;
$IDF=1;
$IDG=1;
$IDH=1;


for ($i=0;$i<=32;$i++){

    $Aleatorio=mt_rand(1,40);

    $columna ="SELECT * FROM Equipo WHERE Id='$Aleatorio'";
    $result = $mysqli->query($columna);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($Aleatorio == $row['Id']) {
        $Club=$row['Club'];
        $Pais=$row['Pais'];
        $campos="Club='$Club',Pais='$Pais',PartidosJugados='$PartidosJ',Ganados='$PartidosG',Perdidos='$PartidosP',Empatados='$PartidosE',
        GolesFavor='$GolesF',GolesContra='$GolesE',DiferenciaGoles='$DiferenciaG',Pts='$Pts'" ;

        if($i>=1 && $i<=4){

            $query="UPDATE GrupoA SET $campos WHERE ID='$IDA'";

            if($mysqli->query($query)) {
                echo "Datos A guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDA+=1;
        }elseif($i>=5&&$i<=8){

            $query="UPDATE GrupoB SET $campos WHERE ID='$IDB'";

            if($mysqli->query($query)) {
                echo "Datos B guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDB+=1;
        }elseif($i>=9&&$i<=12){

            $query="UPDATE GrupoC SET $campos WHERE ID='$IDC'";

            if($mysqli->query($query)) {
                echo "Datos C guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDC+=1;
        }elseif($i>=13&&$i<=16){

            $query="UPDATE GrupoD SET $campos WHERE ID='$IDD'";

            if($mysqli->query($query)) {
                echo "Datos D guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDD+=1;
        }elseif($i>=17&&$i<=20){

            $query="UPDATE GrupoE SET $campos WHERE ID='$IDE'";

            if($mysqli->query($query)) {
                echo "Datos E guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDE+=1;
        }elseif($i>=21&&$i<=24){

            $query="UPDATE GrupoF SET $campos WHERE ID='$IDF'";

            if($mysqli->query($query)) {
                echo "Datos F guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDF+=1;
        }elseif($i>=25&&$i<=28){

            $query="UPDATE GrupoG SET $campos WHERE ID='$IDG'";

            if($mysqli->query($query)) {
                echo "Datos G guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDG+=1;
        }elseif($i>=29&&$i<=32){

            $query="UPDATE GrupoH SET $campos WHERE ID='$IDH'";

            if($mysqli->query($query)) {
                echo "Datos H guardados<br>";
            }
            $Del="SELECT Id FROM Equipo WHERE Club=$Club";
            $q="DELETE FROM Equipo WHERE Club='$Club'";

            if($mysqli->query($q)){
                echo "Dato Eliminado de Equipo<br><br>";

            }
            $IDH+=1;
        }


    } else {
        $i--;
    }

}

