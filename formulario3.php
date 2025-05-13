<?php 
$nombre=$_REQUEST['nombre'];
$peso=$_REQUEST['peso'];
$estatura=$_REQUEST['estatura'];
$estatura_total=$estatura*$estatura;
$imc=$peso/$estatura_total;
if ($imc<18.5){
    echo "Tienes un IMC de ".$imc." tu categoria esta por debajo del peso";
}elseif($imc>=18.5 && $imc<=24.9){
    echo "Tienes un IMC de ".$imc." tu categoria es Saludable";
}elseif($imc>=25 && $imc<=29.9){
    echo "Tienes un IMC de ".$imc." tu categoria con Sobrepeso";
}elseif($imc>=30 && $imc<=39.9){
    echo "Tienes un IMC de ".$imc." tu categoria es Obeso";
}elseif($imc>=30 && $imc<=39.9){
    echo "Tienes un IMC de ".$imc." tu categoria es Obeso";
}elseif($imc>=40){
    echo "Tienes un IMC de ".$imc." tu categoria es Obeso Morbida";
}
?>