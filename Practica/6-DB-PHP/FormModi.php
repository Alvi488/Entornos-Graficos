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
        $vCiu = $_POST['ciu'];
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "SELECT * FROM doc_utn WHERE ciu ='$vCiu' ";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
        $fila = mysqli_fetch_array($vResultado);

        if(mysqli_num_rows($vResultado) == 0) {
            echo ("Ciudad inexistente...!!! <br>");
            echo ("<A href='FormModiIni.html'>Continuar</A>");
        }
        else{
            ?>
            <FORM action="Modi.php" method="POST" name="FormModi">
                <table width="356">
                    <tr>
                        <td width="103"> Ingrese ID: </td>
                        <td width="243">
                            <input type="text" name="ide" size="20" maxlength="10" value="<?php echo($fila['id']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103"> Ingrese Ciudad: </td>
                        <td width="243">
                            <input type="TEXT" name="ciu" size="20" maxlength="20" value="<?php echo($fila['ciudad']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103"> Ingrese Pais: </td>
                        <td width="243">
                            <input type="TEXT" name="pai" size="20" maxlength="20" value="<?php echo($fila['pais']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103"> Ingrese Habitantes: </td>
                        <td width="243">
                            <input type="TEXT" name="hab" size="20" maxlength="10" value="<?php echo($fila['habitantes']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103"> Ingrese Superficie: </td>
                        <td width="243">
                            <input type="TEXT" name="sup" size="20" maxlength="10" value="<?php echo($fila['superficie']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103"> tieneMetro: </td>
                        <td width="243">
                            <input type="TEXT" name="tie" size="20" maxlength="1" value="<?php echo($fila['tieneMetro']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="SUBMIT" name="Submit" value="Modificar">
                        </td>
                    </tr>
                </table>
            </FORM>
            <?php
        }
        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>
    </body>
</html>