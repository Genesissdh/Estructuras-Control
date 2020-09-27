<?php
$resul = 0;
$resul = mt_rand(1, 20);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de dados</title>
</head>

<body bgcolor="#FCA5FD">
    <hr>
    <a href="index.php">Volver atrás</a>
    <center>
        <div align="center">
            <h1>SIMULADOR DE DADOS</h1>
        </div>

        <form action="Ejercicio1.php" method="get" enctype="multipart/form-data">
            <br>
            <h4>Gira cualquiera de los dados, y adivina cuantas posiciones avanzas</h4>
            <input type="image" name="moverdados" value="Mover dados" img src="./img/dados.png" width="150" height="150">
            <input type="image" name="moverdados1" value="Mover dados1" img src="./img/dados.png" width="150" height="150">
            <br>

        </form>
        <br>
        <br>
        <br>
        <?php
        echo "<i>Avanza:</i> <h3>$resul posiciones</h3>"


        ?>
</body>

</html>
</center>

<?php
include_once("../php/plantilla_pie.php");
?>