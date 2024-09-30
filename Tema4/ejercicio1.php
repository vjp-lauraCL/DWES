<?php
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

?>