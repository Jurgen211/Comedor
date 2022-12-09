<?php
require '../../Connect/connect.php';

$Club=$_POST['Club'];
$pais=$_POST['Pais'];
$pj=$_POST['PartidosJugados'];
$NPartidoJugados=$pj+1;
//------------
$ganados=$_POST['Ganados'];
$NG=$_POST['NuevoGanados'];
$ganadosT=$ganados+$NG;
//------------
$perdidos=$_POST['Perdidos'];
$NP=$_POST['NuevoPerdidos'];
$perdidosT=$perdidos+$NP;
//----------
$empatados=$_POST['Empatados'];
$NE=$_POST['NuevoEmpatados'];
$empatadosT=$empatados+$NE;
//---------
$golesF=$_POST['GolesFavor'];
$NGF=$_POST['NuevoGolesFavor'];
$golesFT=$golesF+$NGF;
//---------
$golesC=$_POST['GolesContra'];
$NGC=$_POST['NuevoGolesContra'];
$golesCT=$golesC+$NGC;
///---------
$diferenciagoles=$_POST['DiferenciaGoles'];
$NDF=$diferenciagoles+$golesF-$golesC;
//----
$Pts=$_POST['Pts'];
$NPts=$_POST['NuevoPts'];
$PtsT=$Pts+$NPts;

$campos="Club='$Club' ,Pais='$pais', PartidosJugados='$NPartidoJugados', Ganados='$ganadosT', Perdidos='$perdidosT',Empatados='$empatadosT',
 GolesFavor='$golesFT', GolesContra='$golesCT',DiferenciaGoles='$NDF',Pts='$PtsT'";

$query="UPDATE GrupoB SET Club='$Club', Pais='$pais', PartidosJugados=$NPartidoJugados, Ganados=$ganadosT, Perdidos=$perdidosT,Empatados=$empatadosT,
 GolesFavor=$golesFT, GolesContra=$golesCT,DiferenciaGoles=$NDF,Pts=$PtsT WHERE Club='$Club'";

if($mysqli->query($query)){
    echo "<script>
alert('Modificado correctamente');
 location.href = 'http://3.91.201.45/Proyecto1/php/Mod/ModA.php';
</script>";

}else{
    echo "<script>
alert('Ocurrió un error');
 location.href = 'http://3.91.201.45/Proyecto1/php/Mod/ModA.php';
</script>";
}