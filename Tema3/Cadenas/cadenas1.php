<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Cadenas1</title>
</head>
<body>
    <?php
    //Crea una variable llamada nombre e inicializala con el valor "anaMarial"
    $nombre = 'anaMArial';
    //Muestra el nombre en pantalla
    echo "Nombre: $nombre<br>";
    //Muestra la longitud del nombre
    echo strlen($nombre) . "<br>";
    //Muestra el nombre en mayúsculas
    echo strtoupper($nombre) . "<br>";
    //Muestra el nombre en minúsculas
    echo strtolower($nombre) . "<br>";
    //Muestra el nombre con la primera letra en mayúsculas
    echo substr_count($nombre, 'a') . "<br>";
    //Muestra el código ASCII de la primera letra del nombre
    $ascii = ord($nombre);
    print($ascii);
    echo "<br>";
    //Muestra la posicion de la primera A existente  en el nombre. Si no hay ninguna mostrará -1
    echo strpos($nombre, "A");
    echo "<br>";

 
    //Lo mismo pero con la última A
    echo strcspn($nombre, "a");
    echo "<br>";
       // $resultado = strrpos(strtolower($nombre),"a");
    // if ($resultado !== false){
    //     echo "La última aparece en la última posición " . $resultado .'<br>';
    // }else{
    //     echo "no se ha encontrado ninguna 'a' en el texto";
    // }
    
    //Muestra el nombre sustituyendo las letras por el número cero.
    echo  str_ireplace('$nombre', '0', '$nombre');
    echo "<br>";
    //Indica si el nombre comienza por "al" o no. 
    if (str_starts_with($nombre, "al") == true) {
        echo " si ";
    }
    echo "<br>";
    //Elimina los espacios del principio y el final del nombre si los hubiera y muestra el resultado por pantalla
    echo trim($nombre);
    echo "<br>";
    //Muestra la variable nombre con la primera letra en mayúsculas y las demás en minúsculas
    echo ucfirst(strtolower($nombre));
    ?>
</body>
</html>
