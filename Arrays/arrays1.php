<?php
$nombre = ['Laura', 'Beatriz', 'Ruben', 'Vanesa'];
echo count($nombre);
$nombres = implode (',', $nombre);
echo $nombres;

//ordenar
sort($nombre);
print_r($nombre);

//desordenar el array
rsort($nombre);
print_r($nombre);

//desordenar de forma aleatoria
shuffle($nombre);
print_r($nombre);

//Mostrar la posicion de un elemento
$posicion = array_search('Laura', $nombre);
echo $posicion;

//Mostrar los alumnos que contengan la letra a
$alumnos = preg_grep("/a/i", $nombre);
print_r($alumnos);

//muestra el id, nombre y la edad del alumno
$alumnos = [
    ['id' =>1 , 'nombre' => 'Laura', 'edad'=> 27],
    ['id' =>2 , 'nombre' => 'Beatriz', 'edad'=> 25],
    ['id' =>3 , 'nombre' => 'Ruben', 'edad'=> 30],
    ['id' =>4 , 'nombre' => 'Vanesa', 'edad'=> 28]
];

foreach($alumnos as $alumno){
    foreach($alumno as $clave => $value){
       
    }
}
?>