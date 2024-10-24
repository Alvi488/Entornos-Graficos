<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nombre de Usuario Cookies PHP</title>

<?php
session_start();

if(!isset($_COOKIE['titular'])){
    echo "No se ha seleccionado ninguna noticia, seleccione una: <br>";
    include 'cambiar_noticia.html';
} else {
    echo "La noticia seleccionada es " . $_COOKIE['titular'];
    echo "<br> Cambiar noticia: <a href=" . "cambiar_noticia.html" . ">Ir a noticias</a>";   
}

if(isset($_POST['titular'])){
    setcookie('titular', $_POST['titular']);
}
?>
    </head>
</html>