Ejercicio 4
- Contar las páginas visitadas por un usuario durante su sesión.

<?php
session_start();
if (!isset($_SESSION["contador"])) {
  $_SESSION["contador"] = 1;
}
else {
  $_SESSION["contador"]++;
}
echo "Has visitado " . $_SESSION["contador"] . " páginas";
?>
