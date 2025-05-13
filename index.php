<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Formulario Definitivas de notas</h1>
    <form class="form1" action="formulario1.php">
        Parcial 1: <input min=0 max=5 step="0.01" class="input1" type="number" name="parcial1"><br><br>
        Parcial 2: <input min=0 max=5 step="0.01" class="input1" type="number" name="parcial2"><br><br>
        Parcial 3: <input min=0 max=5 step="0.01"  class="input1" type="number" name="parcial3"><br><br>
        Examen Final: <input min=0 max=5 step="0.01" class="input2" type="number" name="examenfinal"><br><br>
        Trabajo Final: <input min=0 max=5 step="0.01" class="input3" type="number" name="trabajofinal"><br><br>
        <input class="input4" type="submit" value="Enviar">
    </form>
    <h1>Formulario Comision x Ventas</h1>
    <form class="form2" action="formulario2.php">
        Nombre del Vendedor: <input class="input5" type="text" name="nombre"><br><br>
        Cantidad automoviles Vendidos: <input min=0 class="input6" type="number" name="cantidad"><br><br>
        Precio total automoviles vendidos: <input min=0 class="input7" type="number" name="precio"><br><br>
         <input class="input8" type="submit" value="Enviar">
    </form>
    <h1>Calcular Indice de Masa Corporal</h1>
    <form class="form3" action="formulario3.php">
        Nombre del paciente: <input class="input9" type="text" name="nombre"><br><br>
        Peso en kilogramos: <input min=0 step="0.01" class="input10" type="number" name="peso"><br><br>
        Estatura en metros: <input min=0 step="0.01" class="input11" type="number" name="estatura"><br><br>
         <input class="input12" type="submit" value="Enviar">
    </form>
    <h1>Tabla de Amortizacion de un credito</h1>
    <form class="form4" action="formulario4.php">
        Cedula del cliente: <input class="input13" type="text" name="cedula"><br><br>
        Nombre del cliente: <input class="input14" type="text" name="nombre"><br><br>
        Monto del credito: <input class="input15" min=0 type="number" name="montocredito"><br><br>
        Monto del Tasa de intereses mensual: <input step="0.01" class="input11" min=0 type="number" name="montointereses"><br><br>
        Plazo en meses: <input  class="input16" min=0 type="number" name="plazo"><br><br>
        <input class="input17" type="submit" value="Enviar">
    </form>
</body>
</html>