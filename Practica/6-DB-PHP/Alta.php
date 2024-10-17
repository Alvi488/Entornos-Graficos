<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta</title>
    </head>
    <body>
        <?php
        include("conexion.inc");

        //Captura datos desde el Form anterior
        $vIde = $_POST['ide'];
        $vCiu = $_POST['ciu'];
        $vPai = $_POST['pai'];
        $vHab = $_POST['hab'];
        $vSup = $_POST['sub'];
        $vTie = $_POST['tie'];
        
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "SELECT Count(ciudad) as canti FROM doc_utn WHERE ciudad='$vCiu'";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
        $vCantCiudades = mysqli_fetch_assoc($vResultado);
        
        if ($vCantCiudades ['canti']!=0){
            echo ("La ciudad ya existe<br>");
            echo ("<A href='Menu.html'>VOLVER AL ABML</A>");
        }
        else {
            $vSql = "INSERT INTO doc_utn (id, ciudad, pais, habitantes, superficie, tieneMetro) values ('$vIde','$vCiu', '$vPai', '$vHab', '$vSub', '$vTie')";
            mysqli_query($link, $vSql) or die (mysqli_error($link));
            echo("La ciudad fue registrada<br>");
            echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
        }
        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>
    </body>
</html>