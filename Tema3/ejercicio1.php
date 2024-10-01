<?php
//Al escribir en el URL lo escribimos de la siguiente forma ?id=nombre&ci=ciudad&ed=edad
if(isset($_GET['id'])){
    $nombre = $_GET['id'];
} else {
    $nombre = 'XXX';
}


if(isset($_GET['ci'])){
    $ciudad = $_GET['ci'];
} else {
    $ciudad = 'XXX';
}


if(isset($_GET['ed'])){
    $edad = $_GET['ed'];
} else {
    $edad = 'XXX';
}


echo "Hola, soy " . $nombre . ", tengo " . $edad . " años y vivo en la ciudad de " . $ciudad;
 
//Otra posible solucion
//$nombre = $_GET['id'] ?? 'XXX';
//echo "Hola soy .(_GET['nombre]?? 'XX');
?>