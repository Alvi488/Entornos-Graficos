<?php
//isset($var): Determina si una variable está definida y no es NULL. False: null, True: otro.
//gettype($mivar): Devuelve el tipo de la variable.

//$_GET[]: Array asociativo de variables pasadas al script actual a través de la URL. 
//$_POST[]: Array asociativo de variables pasadas al script actual a través del método HTTP POST.


$arreglo = $_POST;

$consulta = consultaSQL("SELECT * FROM usuarios WHERE usuario = '$arreglo[usuario]' AND password = 'md5($arreglo[password])'");
if(isset($consulta)){
    echo "";
}


if($arreglo['rememberMe'] == true){
    setcookie("usuario", $arreglo['usuario'], time() + 3600);
    setcookie("password", $arreglo['password'], time() + 3600);
}


?>