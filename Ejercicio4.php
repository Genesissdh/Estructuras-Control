<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora basica</title>
</head>

<body bgcolor="#FCA5FD">
    <hr>
    <a href="index.php">Volver atrás</a>
    <center>
        <div align="center">
            <h2>Calculadora Basica</h2>
        </div>

        <form action="Ejercicio4.php" method="post" autocomplete="off">
            <p><b>Ingrese dos valores:</b></p>
            <p><b>Valor 1: </p></b><input type="number" name="v1"><br>
            <br>
            <select name="opciones">
                <option value="0">+</option>
                <option value="1">-</option>
                <option value="2">x</option>
                <option value="3">/</option>
                <option value="4">^</option>


            </select>
            <p><b>Valor 2: </p></b> <input type="number" name="v2"><br>
            <br>
            <input type="submit" name="calcular" value="Calcular">
            <br>


        </form>
        <?php
        $resultado = 0;

        if (isset($_POST['v1']) and isset($_POST['v2'])) {

            switch ($_POST['opciones']) {
                case 0:
                    $resultado = $_POST['v1'] + $_POST['v2'];
                    break;
                case 1:
                    $resultado = $_POST['v1'] - $_POST['v2'];
                    break;
                case 2:
                    $resultado = $_POST['v1'] * $_POST['v2'];
                    break;
                case 3:
                    if ($_POST['v2'] != 0) {
                        $resultado = $_POST['v1'] / $_POST['v2'];
                    } else {
                        $resultado = "Valor no identificado";
                    }
                    break;
                case 4:
                    $resultado = $_POST['v1'] ** $_POST['v2'];
                    break;
            }
        }


        ?>

        <br>
        <?php
        echo "<h4>RESULTADO:</h4> <b>$resultado</b>"
        ?>
</body>

</html>
</center>
<br>
<?php
include_once("../php/plantilla_pie.php");
?>