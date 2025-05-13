<?php 
$cedula=$_REQUEST['cedula'];
$nombre=$_REQUEST['nombre'];
$monto_credito=$_REQUEST['montocredito'];
$monto_intereses=$_REQUEST['montointereses'];
$plazo=$_REQUEST['plazo'];
echo "Cedula:".$cedula;
echo "<br>";
echo "Nombre:".$nombre;
$cuota_fija=$monto_credito*($monto_intereses*(1+$monto_intereses)**$plazo)/((1+$monto_intereses)**3-1);
?>
<br><br>
<table border="1px solid black">
    <tr>
        <td>No.cuota</td>
        <td>Saldo Anterior</td>
        <td>Valor Cuota Fija</td>
        <td>Abono Interés</td>
        <td>Abono Capital</td>
        <td>Nuevo Saldo</td>
    </tr>
    <tr>
    <?php 
        for ($x=0;$x==$plazo;$x++){?>
            <td> <?php echo $x; ?> </td>
            <?php
        }
        ?>
    </tr>
</table>