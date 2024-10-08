<?php
function obtenerCanciones(){
    $canciones = [
    ["titulo" => "Witch's Spell", "Género"=> "Rock", "Album"=> "Power Up"], 
    ["titulo" => "Tutto con te", "Género"=> "Pop", "Album"=> "Gira, il mondo gira"], 
    ["titulo" => "Somethin' Stupid", "Género"=> "Jazz", "Album"=> "The World We Knew"], 
    ["titulo" => "Cofessin' The Blues", "Género"=> "Blues", "Album"=> "Deuces Wild"],   
];
    return $canciones;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $textoBusqueda = $_POST['textoBusqueda'];
    $tipoBusqueda = $_POST['tipoBusqueda'];
    $genero = $_POST['genero'];

    $listaCanciones = obtenerCanciones();
    $resultado = [];

    foreach($listaCanciones as $cancion){
        if($genero && $cancion['genero'] != $genero){
            continue;
        }
        if($tipoBusqueda == 'titulo' && strpos($cancion['titulo'], $textoBusqueda) !== false){
            $resultado[] = $cancion;    
        }elseif($tipoBusqueda == 'nombre' && strpos($cancion['nombre'], $textoBusqueda) !== false){
            $resultado[] = $cancion;
        }elseif($tipoBusqueda == 'ambosCampos' && (strpos($cancion['titulo'], $textoBusqueda) !== false || strpos($cancion['nombre'], $textoBusqueda) !== false)){
            $resultado[] = $cancion;
        }
    }

    if(!empty($resultado)){
        echo '<table border="1">';
        echo '<tr><th>Titulo</th><th>Genero</th><th>Album</th></tr>';
        foreach($resultado as $cancion){
            echo '<tr>';
            echo '<td>' . $cancion['titulo'] . '</td>';
            echo '<td>' . $cancion['genero'] . '</td>';
            echo '<td>' . $cancion['album'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    else{
        echo 'No hay conicidencias con su búsqueda';
    }
}
    require 'index.php';
?>