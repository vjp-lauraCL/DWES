<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Document</title>
</head>
<body>
<?php
//Muestra la fecha y la hora actuales con el formato dd/mm/yy hh:mm:ss
$fechaHoy = new DateTime('now');
echo $fechaHoy -> format('d-m-y h:i:s') . '<br>';

//Muestra el nombre de la zona horaria que se utiliza por defecto
echo date_default_timezone_get() .'<br>';

//Muestra la fecha dentro de 45 días
$fecha = new DateTime('2024-09-24');
$fecha -> modify( '+45 days');
echo $fecha -> format('Y-m-d') . '<br>';

//Muestra el numero de días que han pasado desde el 1 de enero
$diasEnero =new DateTime ('2024-01-01');
$diasActual = new DateTime('now');
$diferencia = $diasEnero -> diff ($diasActual);
echo $diferencia -> format ('%a dias han pasado desde el 1 de enero') . '<br>';

//Muestra la fecha y la hora actuales de Nueva York
$zona = new DateTimeZone ('America/New_York');
$horaNueva_York = new DateTime('now', $zona);
echo $horaNueva_York -> format('y-m-d h:i:s') . '<br>';

//Muestra el día de la semana que era el 1 de enero de este año
$diaEnero = new DateTime('2024-01-01');
echo $diaEnero -> format ('l') . '<br>';
?>
</body>
</html>

