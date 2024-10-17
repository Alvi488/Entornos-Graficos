<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificacion</title>
    </head>
    <body>
        <?php
        include ("conexion.inc");
        //Captura datos desde el Form anterior
        $vIde = $_POST['ide'];
        $vCiu = $_POST['ciu'];
        $vPai = $_POST['pai'];
        $vHab = $_POST['hab'];
        $vSup = $_POST['sub'];
        $vTie = $_POST['tie'];
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "UPDATE doc_utn set id='$vIde', pais='$vPai', habitantes='$vHab', superficie='$vSup', tieneMetro='$vTie' where ciudad='$vCiu'";
        mysqli_query($link,$vSql) or die (mysqli_error($link));
        echo("La ciudad fue modificada<br>");
        echo("<A href= 'Menu.html'>Volver al Menu del ABML</A>");
        // Cerrar la conexion
        mysqli_close($link);
        ?>
    </body>
</html>