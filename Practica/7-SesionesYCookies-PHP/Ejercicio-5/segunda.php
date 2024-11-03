<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];
echo "<a href='tercera.php'>Tercera pagina</a>";
?>