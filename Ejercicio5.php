<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de ITBIS</title>
</head>

<body bgcolor="#FCA5FD">
    <hr>
    <a href="index.php">Volver atrás</a>
    <center>
        <div align="center">
            <h2>Calculadora de ITBIS</h2>
        </div>

        <form action="Ejercicio5.php" method="post" autocomplete="off">
            <p><b>Monto: </p></b> <input type="number" name="total"><br>
            <p><b>ITBIS: </p></b>
            <select name="opciones" style='width:180px'>
                <option value="0">0%</option>
                <option value="1">16%</option>
                <option value="2">18%</option>
            </select>
            <br>
            <br>
            <input type="submit" name="calcular" value="Calcular" style='width:70px; height:25px'>
            <br>


        </form>
        <?php
        $ITBIS = 0;
        $monto = 0;
        if (isset($_POST['total'])) {

            switch ($_POST['opciones']) {
                case 0:
                    $monto = $_POST['total'];
                    break;
                case 1:
                    $ITBIS = (0.16 * $_POST['total']);
                    $monto =  $_POST['total'] + $ITBIS;
                    break;
                case 2:
                    $ITBIS = (0.18 * $_POST['total']);
                    $monto =  $_POST['total'] + $ITBIS;
                    break;
                case ($_POST['total'] == ""):
                    $ITBIS = 0;
                    $monto = 0;
                    break;
            }
        }


        ?>
        <br>
        <?php
        echo "ITBIS generado: <h3>$$ITBIS </h3>";
        echo "Monto total a pagar: <h3>$$monto </h3>";
        ?>
</body>

</html>
</center>
<br>
<br>
<br>
<br>

<?php
include_once("../php/plantilla_pie.php");
?>