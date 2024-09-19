<?php
$nombre = 'anaMArial';
echo "Nombre: $nombre<br>";
echo strlen($nombre) . "<br>";
echo strtoupper($nombre) . "<br>";
echo strtolower($nombre) . "<br>";
echo substr_count($nombre, 'a') . "<br>";
$ascii = ord($nombre);
print($ascii);
echo "<br>";
echo strpos($nombre, "A");
echo "<br>";
echo strcspn($nombre, "a");
echo "<br>";
echo  str_ireplace('$nombre', '0', '$nombre');
echo "<br>";
if (str_ends_with($nombre, "al") == true) {
    echo " si ";
}
echo "<br>";
echo rtrim($nombre);
echo "<br>";
