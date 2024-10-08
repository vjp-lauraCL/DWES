<?php
function obtenerCanciones(){
    $canciones = [
        ["titulo" => "Witch's Spell", "genero" => "Rock", "album" => "Power Up"], 
        ["titulo" => "Tutto con te", "genero" => "Pop", "album" => "Gira, il mondo gira"], 
        ["titulo" => "Somethin' Stupid", "genero" => "Jazz", "album" => "The World We Knew"], 
        ["titulo" => "Cofessin' The Blues", "genero" => "Blues", "album" => "Deuces Wild"],   
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
        if($genero && strcasecmp($cancion['genero'], $genero) != 0){
            continue;
        }
        if($tipoBusqueda == 'titulo' && strpos($cancion['titulo'], $textoBusqueda) !== false){
            $resultado[] = $cancion;    
        } elseif($tipoBusqueda == 'ambosCampos' && (strpos($cancion['titulo'], $textoBusqueda) !== false || strpos($cancion['album'], $textoBusqueda) !== false)){
            $resultado[] = $cancion;
        }
    }

    if(!empty($resultado)){
        echo '<table border="1">';
        echo '<tr><th>Titulo</th><th>Genero</th><th>Album</th></tr>';
        foreach($resultado as $cancion){
            echo '<tr>';
            echo '<td>' . htmlspecialchars($cancion['titulo']) . '</td>';
            echo '<td>' . htmlspecialchars($cancion['genero']) . '</td>';
            echo '<td>' . htmlspecialchars($cancion['album']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'No hay coincidencias con su búsqueda';
    }
}
?>