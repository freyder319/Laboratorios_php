
<?php  
$cedula = $_REQUEST['cedula'];
$nombre = $_REQUEST['nombre'];
$monto_credito = $_REQUEST['montocredito'];
$monto_intereses = $_REQUEST['montointereses'];
$plazo = $_REQUEST['plazo'];
echo "Cédula: " . $cedula . "<br>";
echo "Nombre: " . $nombre . "<br>";
$cuota_fija = $monto_credito * ($monto_intereses * pow(1 + $monto_intereses, $plazo)) / (pow(1 + $monto_intereses, $plazo) - 1);
$cuota_fija1 = round($cuota_fija, 2);
$contador = 1;
?>
<br><br>
<table>
    <tr style="background-color: #054559; border:1px solid #003749;color:white;font-family:Arial, Helvetica, sans-serif">
        <th>No. Cuota</th>
        <th>Saldo Anterior</th>
        <th>Valor Cuota Fija</th>
        <th>Abono Interés</th>
        <th>Abono Capital</th>
        <th>Nuevo Saldo</th>
    </tr>
    <?php  
        while($contador <= $plazo){ 
            $monto_credito1 = round($monto_credito, 2);
            echo "<tr style='background-color:#f0f0f0;'>";
            echo "<td>" . $contador . "</td>";
            echo "<td>" . $monto_credito1 . "</td>";
            echo "<td>" . $cuota_fija1 . "</td>";
            $abono_interes = $monto_credito * $monto_intereses;
            $abono_capital = $cuota_fija - $abono_interes;
            $nuevo_saldo = $monto_credito - $abono_capital;
            echo "<td>" . round($abono_interes, 2) . "</td>";
            echo "<td>" . round($abono_capital, 2) . "</td>";
            echo "<td>" . round($nuevo_saldo, 2) . "</td>";
            $monto_credito = $nuevo_saldo;
            $contador++;
            echo "</tr>";
        }
    ?>
</table>