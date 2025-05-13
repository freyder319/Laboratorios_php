<?php
$nota1=$_REQUEST['parcial1'];
$nota2=$_REQUEST['parcial2'];
$nota3=$_REQUEST['parcial3'];
$nota4=$_REQUEST['examenfinal'];
$nota5=$_REQUEST['trabajofinal'];
$resultado1=((($nota1+$nota2+$nota3)/3)*35)/100;
$resultado2=($nota4*35)/100;
$resultado3=($nota5*30)/100;
$total=$resultado1+$resultado2+$resultado3;
if ($total<3){
    echo "Estas reprobado con ".$total;
}else{
    echo "Estas Aprobado con ".$total;
}
?>