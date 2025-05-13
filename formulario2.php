<?php 
$nombre=$_REQUEST['nombre'];
$cantidad=$_REQUEST['cantidad'];
$precio=$_REQUEST['precio'];
$minimo=737000;
$cantidad_total=50000*$cantidad;
$comision=($precio*5)/100;
$total=$minimo+$cantidad+$comision;
echo "Al vendedor ".$nombre.", El salario que le correspondiente es de $".$total;
?>