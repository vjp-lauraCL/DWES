<?php
$saludo ='Hola';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DWES</title>
</head>
<body>
    <?=$saludo .($_GET['id']?? "Anonimo")?>
</body>
</html>
