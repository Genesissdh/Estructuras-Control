<?php
 $dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
 $valor="";

 if ( isset( $_POST['numero'] ) ){

    if ($_POST['numero'] <=6 && $_POST['numero'] >=0) {

        switch ( $_POST['numero']) {
            case 0:
                $valor = $dias[0];
            break;
            case 1:
                $valor = $dias[1];
            break;
            case 2:
                $valor = $dias[2];
            break;
            case 3:
                $valor = $dias[3];
            break;
            case 4:
                $valor = $dias[4];
            break;
            case 5:
                $valor = $dias[5];
            break;
            case 6:
                $valor = $dias[6];
            break;
                
        }   
    }else {
        $valor = "EL VALOR DEBE ESTAR ENTRE 0 Y 6";
    }
    
    
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de la semana</title>
</head>
<body bgcolor="#FCA5FD">
    <hr>
    <a href="index.php">Volver atrás</a>
    <center>
    <div align="center"><h2>DÍAS DE LA SEMANA</h2></div>

    <form action="Ejercicio3.php" method="post" autocomplete="off">
        <h4>0)Lunes    1)Martes     2)Miércoles    3)Jueves    4)Viernes    5)Sábado    6)Domingo</h4>
        <p><b>Ingrese un número:</b></p> <input type="number" name="numero" style='width:80px'><br>
        <img src="./img/dias.jpg" width="150" height="200">
        <br>
        <input type="submit" name="buscar" value="Buscar día">
        <br>
       

    </form>
    <br>
    <?php
    echo "<i>El día correspondiente es: <h3>$valor</h3>"
    ?>
</body>
</html>
</center>
<br>

<br>
<?php 
    include_once("../php/plantilla_pie.php");
?>
