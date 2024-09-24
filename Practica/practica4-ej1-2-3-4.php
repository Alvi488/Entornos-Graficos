<?php
function doble($i) {
 return $i*2;
 
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?>


<!-- 
las variables y su tipo 
$a y es de tipo boolean
$b y es de tipo string
$c y es de tipo string
$d y es de tipo integer
$f y es de tipo integer
$g y es de tipo integer


los operadores 
    Asignación (=):
        $a = TRUE;
        $b = "xyz";
        $c = 'xyz';
        $d = 12;
        $f = doble($d++);
        $g = $f += 10;
    Operador de incremento (++):
        ++$d;
        $d++;
    Operador ternario (? :):
        $d = $a ? ++$d : $d*3;
    Aritméticos:
        Multiplicación (*): return $i*2; y $d*3;
        Suma (+): $d += 4; y $f += 10;
    Lógicos:
        if (is_int($d))
        if (is_string($a))

Las funciones y sus parámetros
    Función doble($i): Toma un parámetro $i y devuelve su valor multiplicado por 2.
    Funciones internas de PHP:
        gettype($var): Toma una variable y devuelve su tipo.
        is_int($var): Verifica si una variable es un entero.
        is_string($var): Verifica si una variable es un string

Las estructuras de control 
    if (Condicional):
        if (is_int($d)) { $d += 4; }: Verifica si $d es un entero, e incrementa su valor en 4.
        if (is_string($a)) { echo "Cadena: $a"; }: Verifica si $a es una cadena, e imprime "Cadena: $a".
    Operador ternario (? :):
        $d = $a ? ++$d : $d*3;: Si $a es verdadero, incrementa $d; si es falso, multiplica $d por 3.

La salida por pantalla 
    booleanstringstringinteger1xyzxyz184444
-->

<!-- Ejercicio 2 -->


<?php 
 $i = 1; 
 while ($i <= 10) { 
     print $i++;   
 } 
?>

<?php 
$i = 1; 
 while ($i <= 10): 
     print $i; 
     $i++; 
 endwhile; 
?> 

<?php 
 $i = 0; 
 do { 
     print ++$i; 
 } while ($i<10); 
?> 

<!-- Los tres producen la misma salida -->

<?php 
for ($i = 1; $i <= 10; $i++) { 
     print $i; 
 } 
?>

<?php 
for ($i = 1; $i <= 10; print $i, $i++) ; 
?>

<?php 
for ($i = 1; ;$i++) { 
     if ($i > 10) { 
         break; 
     } 
     print $i; 
 } 
?>

<?php 
 $i = 1; 
 for (;;) { 
     if ($i > 10) { 
         break; 
     } 
     print $i; 
     $i++; 
 } 
?> 

<!-- Los 4 codigos producen la misma salida -->

<?php 

if ($i == 0) { 
    print "i equals 0"; 
} elseif ($i == 1) { 
    print "i equals 1"; 
} elseif ($i == 2) { 
    print "i equals 2"; 
} 
?> 

<?php 

switch ($i) { 
    case 0: 
        print "i equals 0"; 
        break; 
    case 1: 
        print "i equals 1"; 
        break; 
    case 2: 
        print "i equals 2"; 
        break; 
} 
?> 

<!-- Los 2 producen la misma salida -->

<!-- Ejercicio 3 -->


<html> 
<head><title>Documento 1</title></head> 
<body> 
<?php 
    echo "<table width = 90% border = '1' >"; 
    $row = 5; 
    $col = 2; 
    for ($r = 1; $r <= $row; $r++) { 
         echo "<tr>";  
         for ($c = 1; $c <= $col;$c++) { 
             echo "<td>&nbsp;</td>\n"; 
         }      echo "</tr>\n"; 
    } 
    echo "</table>\n"; 
?> 
</body></html> 

<!-- Genera una tabla HTML con un ancho del 90% y un borde de 1 píxel donde la tabla tiene 5 filas ($row = 5) y 2 columnas ($col = 2).
Utiliza dos bucles for para iterar y crear las filas y columnas hasta el tamaño definido, creando  celdas (<td>) vacías con. -->


<html> 
<head><title>Documento 2</title></head> 
<body> 
<?php 
if (!isset($_POST['submit'])) { 
?> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    Edad: <input name="age" size="2"> 
    <input type="submit" name="submit" value="Ir"> 
    </form> 


<?php 
    } 
else { 
    $age = $_POST['age']; 
    if ($age >= 21) { 
        echo 'Mayor de edad'; 
        } 
    else { 
        echo 'Menor de edad'; 
    } 
} 
?> 
</body></html> 

<!-- 
El código genera un formulario en el que el usuario ingresa su edad. Cuando se envía el formulario:
    Si la edad es 21 o mayor, muestra "Mayor de edad".
    Si es menor de 21, muestra "Menor de edad". 
-->

<!-- Ejercicio 4 -->
<?php 
    echo "El $flor $color \n";  
    include 'datos.php'; 
echo " El $flor $color";  
?>  
<!-- datos.php contiene -->
<?php 
    $color = 'blanco'; 
    $flor = 'clavel'; 
?> 
<!-- 
Primera Salida: El
    $flor no está definido (cadena vacía) y $color tampoco, resultando en un espacio extra.
Segunda Salida: El clavel blanco
    Después de incluir datos.php, $flor se define como 'clavel' y $color como 'blanco'. -->

<!-- Ejercicio 5 -->
