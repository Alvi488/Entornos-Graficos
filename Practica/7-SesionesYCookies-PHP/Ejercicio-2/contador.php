<?php
if (!isset($_COOKIE["contador"])) {
  $visitas = 1;
  setcookie("visitas", $visitas , time()+ 3600*24*365); 
  echo "¡Bienvenido! Esta es la primera vez que visitas esta página";
}
else {
  $visitas = $_COOKIE["visitas"] + 1;
  setcookie("visitas", $visitas , time()+ 3600*24*365); // Actualiza la cookie
  echo "¡Bienvenido!" . "Has visitado " . $visitas . "veces la página";
}
?>