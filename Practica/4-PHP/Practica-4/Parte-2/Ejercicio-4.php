<?php

//Analizar la siguiente función, y escribir un script para probar su funcionamiento:

function comprobar_nombre_usuario($nombre_usuario){

    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){ //strlen: Devuelve la longitud de un string.
        echo $nombre_usuario . " no es válido<br>"; 
    return false;
    }

    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){ //===: true si $a es igual a $b, y son del mismo tipo.
            echo $nombre_usuario . " no es válido<br>";
        return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
return true;
} 

//Probamos la función:
comprobar_nombre_usuario("Alvaro_08"); //Resultado esperado: "Alvaro_08 es válido".

comprobar_nombre_usuario("Alvaro_08@"); //Resultado esperado: "Alvaro_08@ no es válido".

?>