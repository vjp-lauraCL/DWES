<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Cadena2</title>
</head>
<body>
    <?php
    // Obtener el parámetro 'name' de la query string
    $name = isset($_GET['name']) ? $_GET['name'] : 'Laura';

    // Eliminar los caracteres '/' del principio y el final
    $name = trim($name, '/');

    //Calcular la longitud del valor procesado
    $length = strlen($name);

    //Convertir el valor procesado a mayúsculas
    $name = strtoupper($name);

    //Convertir el valor procesado a minúsculas
    $name = strtolower($name);

    // Verificar si el nombre comienza con el prefijo
   $prefix = 'Lau';
   $starts_with_prefix = substr(($name), 0 , strlen($prefix)) === $prefix ? 'Sí' : 'No';

    // Contar el número de veces que aparece la letra 'e' (mayúscula o minúscula)
    $count_e = substr_count(strtolower($name), 'e');

    // Encontrar la posición de la primera 'a' (mayúscula o minúscula)
    $position_a = stripos($name, 'a');
    $position_a_text = $position_a !== false ? $position_a : 'No hay ninguna "a" en el nombre';

    // Sustituir las letras 'o' (mayúscula o minúscula) por el número cero
    $name_replaced = str_ireplace('o', '0', $name);

    // Mostrar el valor procesado
    echo "<p>Nombre: $name</p>";
    echo "<p>Longitud: $length</p>";
    echo "<p>Nombre en mayusculas: $name</p>";
    echo "<p>Nombre en minusculas: $name</p>";
    if ($prefix !== '') {
        echo "<p>¿El nombre comienza con el prefijo '$prefix'?: $starts_with_prefix</p>";
    }
    echo "<p>Número de veces que aparece la letra 'e': $count_e</p>";
    echo "<p>Posición de la primera 'a': $position_a_text</p>";
    echo "<p>Nombre con 'o' sustituido por '0': $name_replaced</p>";
    ?>
</body>
</html>