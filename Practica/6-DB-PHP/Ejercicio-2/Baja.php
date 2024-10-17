<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baja</title>
    </head>
    <body>
        <?php
        include ("conexion.inc");
        $vCiu = $_POST ['ciu'];
        $vSql = "SELECT * FROM doc_utn WHERE ciudad='$vCiu' ";
        $vResultado = mysqli_query($link, $vSql);
        if(mysqli_num_rows($vResultado) == 0){
            echo ("Ciudad inexistente...!!! <br>");
            echo ("<A href='FormBajaIni.html'>Continuar</A>");
        }
        else{
            //Arma la instrucción SQL y luego la ejecuta
            $vSql= "DELETE FROM doc_utn WHERE ciudad = '$vCiu' ";
            mysqli_query($link, $vSql);
            echo("La ciudad fue borrada<br>");
            echo("<A href='Menu.html'>Volver al Menu del ABML</A>");
        }
        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>
    </body>
</html>