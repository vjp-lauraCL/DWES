<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$nombre = ['Laura', 'Beatriz', 'Ruben', 'Vanesa'];
echo count($nombre);
$nombres = implode (',', $nombre);
echo $nombres .'br>';

//ordenar
sort($nombre);
print_r($nombre) .'<br>';

//desordenar el array
rsort($nombre);
print_r($nombre) .'<br>';

//desordenar de forma aleatoria
shuffle($nombre);
print_r($nombre) .'<br>';

//Mostrar la posicion de un elemento
$posicion = array_search('Laura', $nombre);
echo $posicion . '<br>';

//Mostrar los alumnos que contengan la letra a
$alumnos = preg_grep("/a/i", $nombre);
print_r($alumnos) .'br>';

//Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y la edad del alumno
$alumnos = [
    ['id' => 1, 'nombre' => 'Laura', 'edad' => 20],
    ['id' => 2, 'nombre' => 'Beatriz', 'edad' => 21],
    ['id' => 3, 'nombre' => 'Ruben', 'edad' => 22],
    ['id' => 4, 'nombre' => 'Vanesa', 'edad' => 23]
];



//Crea una tabla html en la que se muestren todos los datos de los alumnos
echo '<table border="1">';
echo '<tr>';
echo '<th>Id</th>';
echo '<th>Nombre</th>';
echo '<th>Edad</th>';
echo '</tr>';
foreach($alumnos as $alumno){
    echo '<tr>';
    echo '<td>' . $alumno['id'] . '</td>';
    echo '<td>' . $alumno['nombre'] . '</td>';
    echo '<td>' . $alumno['edad'] . '</td>';
    echo '</tr>';
}
echo '</table>' . '<br>';

//Utiliza una función para obtener un array indexado que contenga únicamente los nombres de los alumnos
//y muestralos por pantalla
$nombres = array_column($alumnos, 'nombre');
print_r ($nombres) .'<br>';

//Crea un array con 10 numeros y utiliza la funcion para obtener la suma de los 10 numeros
$numeros = [23, 24, 25, 26, 27, 28, 33, 34, 35, 36];
$suma = array_sum(($numeros));
echo $suma . '<br>';

?>