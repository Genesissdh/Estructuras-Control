<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Numeros Impares(For)</title>
</head>
<?php
error_reporting(0);
?>
<body bgcolor="#FCA5FD">
    <hr>
    <a href="index.php">Volver atrás</a>
    <center>
        <div align="center">
            <h2>Generador de # impares</h2>
        </div>

        <form action="Ejercicio6.php" method="post" autocomplete="off">
            <p><b>Ingrese dos valores para generar los numeros impares entre esos dos numeros</b></p>
            <p><b>Del Número: </p></b><input type="number" name="1" style='width:90px'><br>
            <br>

            <p><b>Al Número: </p></b> <input type="number" name="2" style='width:90px'><br>
            <br>
            <input type="submit" name="Gimpares" value="Generar impares">
            <br>
            <br>
            <br>

            <?php
            $v1 = $_POST['1'];
            $v2 = $_POST['2'];
            if (isset($v1) and isset($v2)) {
                if ($v1 >= $v2) {
                    echo "<h5>El primer valor debe ser menor.</h5>";
                } else {
                    echo "<table border=1>
                    <thead>
                    <th bgcolor='pink' >RESULTADO</th>
                    </thead>
";
                    for ($v1; $v1 <= $v2; $v1++) {
                        if (($v1 % 2) != 0) {
                            echo "<tr>
                                <td>$v1</td>
                            </tr>";
                        }
                    }
                }
            }
            ?>
        </form>
        <br>
</body>

</html>

