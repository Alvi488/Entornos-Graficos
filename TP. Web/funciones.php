<?php

function consultaSQL($consulta){
    $link = mysqli_connect("localhost","root","","prueba") or die ("Problemas de conexión a la base de
    datos");
    $resultado = mysqli_query($link, $consulta);
    mysqli_close($link);
    return $resultado;
}


?>