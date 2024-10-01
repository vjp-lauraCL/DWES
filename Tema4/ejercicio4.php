<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
<form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
        <select name="zonaHoraria">
            <option value="Europe/Madrid">Madrid</option>
            <option value="Europe/Paris">Paris</option>
            <option value="Europe/London">London</option>
            <option value="Europe/Berlin">Berlin</option>
            <option value="Europe/Rome">Roma</option>
            <option value="America/New_York">Nueva York</option>
            <option value="America/Los_Angeles">Los Angeles</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <?php
    //Crea un programa que permita seleccionar una zona horaria e imprima
    //la fecha y la hora actual. Tiene que quedar algo asi: "Hora de:" "la fecha actual" , "la hora actual:"
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            date_default_timezone_set($_POST['zonaHoraria']);
            echo 'La fecha es: ' . date('d-m-Y') .  '<br>' . 'La hora es: ' . date('H:i:s') . '<br>' . ' La zona horaria es: ' . $_POST['zonaHoraria'];
        }

    ?>

</body>
</html>