<?php
session_start();
if (!isset($_SESSION["nombre_usuario"])){
    echo "El último usuario ingresado es: " . $_SESSION["nombre_usuario"] . "<br>";
} else {
    echo "Nadie ha iniciado sesión anteriormente" . "<br>";
}
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nombre de Usuario Cookies PHP</title>
        <?php
        if (isset($_POST["nom"])){
            $_SESSION["nombre_usuario"] = $_POST["nom"];
        }
        ?>
    </head>

    <body>
        <label>
            <form method="POST" name="ingresoNombre">
                Ingrese nombre: <input required type="text" name="nom">
                <br>
                <input type="submit" name="submit" value="Ingresar">
            </form>
        </label>
    </body>
</html>

