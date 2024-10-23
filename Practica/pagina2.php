<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    $mail= $_POST['mail'];
    $vSql = "select * FROM alumnos WHERE eMail ='$mail' ";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
    $fila = mysqli_fetch_array($vResultado);
    if(mysqli_num_rows($vResultado) == 0) {
        echo ("Usuario inexistente <br>");
    }
    else{
        $_SESSION['usuario']= $fila['Nombre'];
    }
    ?>
    <a href="pagina3.php">Ingresar a pagina principal</a>
</body>
</html>