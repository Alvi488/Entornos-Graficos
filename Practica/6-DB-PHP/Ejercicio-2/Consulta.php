<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Listados completo </title>
    </head>
    <body>
        <?php
        include("conexion.inc");
        $vSql = "SELECT * FROM doc_utn";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
        ?>
        <table border=1>
            <tr>
                <td><b>ID</b></td>
                <td><b>Ciudad</b></td>
                <td><b>Pais</b></td>
                <td><b>Habitantes</b></td>
                <td><b>Superficie</b></td>
                <td><b>tieneMetro</b></td>
            </tr>
            <?php
            while ($fila = mysqli_fetch_array($vResultado)){
                ?>
                <tr>
                    <td><?php echo ($fila['id']); ?></td>
                    <td><?php echo ($fila['ciudad']); ?></td>
                    <td><?php echo ($fila['pais']); ?></td>
                    <td><?php echo ($fila['habitantes']); ?></td>
                    <td><?php echo ($fila['superficie']); ?></td>
                    <td><?php echo ($fila['tieneMetro']); ?></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <?php
                        }
                        mysqli_free_result($vResultado);
                        mysqli_close($link);
                        ?>
                    </td>
                </tr>
        </table>
        <p>&nbsp;</p>
        <p align="center"><a href="Menu.html">Volver al menu del ABML</a></p>
    </body>
</html>