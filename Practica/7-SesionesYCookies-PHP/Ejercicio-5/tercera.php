<?php
session_start();
echo "Nombre de usuario: " . $_SESSION['usuario'] . "<br>";
echo "Clave: " . $_SESSION['clave'] . "<br>";
?>