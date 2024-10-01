
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
      <label for="fecha">Fecha:</label>
      <input type="date" name="fecha" value=""><br>
      <label for="dias">Número de días:</label>
      <input type="text" name="dias" value=""><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
//Escribir un programa en php que lea una fecha y un numero de días y calcule que resulta
//de sumarle el numero de días a la fecha introducida.
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           echo 'la fecha selecionada es:' . $_POST['fecha'] . '<br>';
           echo 'Días ingresados: ' .$_POST['dias'] . '<br>';
           $fecha = new DateTime($_POST['fecha']);
           $fecha -> modify(( + $_POST['dias'] . 'days'));
           echo $fecha -> format('Y-m-d') . '<br>';
        }
    ?>
</body>
</html>