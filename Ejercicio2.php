<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayordomo 2.0</title>
</head>

<body bgcolor="#FCA5FD">
    <hr>
    <a href="index.php">Volver atrás</a>
    <center>
        <div align="center">
            <h1>Mayordomo 2.0</h1>
        </div>

        <form action="Ejercicio2.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <p><b>Ingrese los datos:</b></p>
            <p><b>Nombre: </p></b> <input type="text" name="nombre"><br>
            <p><b>Género: </p></b>
            <input type="radio" value="Hombre" name="sexoh" id="hombre" require /> Hombre
            <input type="radio" value="Mujer" name="sexo" id="Mujer" require /> Mujer
            <br>
            <br>
            <input type="submit" name="saludar" value="Saludar" style='width:70px; height:25px'>
            <br>
            <br>
            <br>
            <br>

        </form>
        <?php
        if (isset($_POST['sexoh']) == true) {
            echo "Saludos Sr. " . $_POST['nombre'];
        } elseif (isset($_POST['sexo']) == true) {
            echo "Saludos Sra. " . $_POST['nombre'];
        } else {
            echo "Ingrese su nombre y sexo";
        }

        ?>
</body>

</html>
</center>

<?php
include_once("../php/plantilla_pie.php");
?>