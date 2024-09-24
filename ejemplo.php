<?php
//Ejemplo de uso de la clase DateTime
$hoy = new DateTime('now');
echo $hoy -> format(("d-m-y h:i:s")) .'<br>';
//DateTime::modify()
$fecha = new DateTime('2000-12-01');
$fecha -> modify ('+1 day');
echo $fecha -> format('Y-m-d');
?>