<?php
require 'canciones.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $textoBusqueda = isset($_POST['textoBusqueda']) ? $_POST['textoBusqueda'] : '';
    $tipoBusqueda = isset($_POST['tipoBusqueda']) ? $_POST['tipoBusqueda'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';

    // Mensajes de depuración
    echo "Texto de búsqueda: $textoBusqueda<br>";
    echo "Tipo de búsqueda: $tipoBusqueda<br>";
    echo "Género: $genero<br>";

    $listaCanciones = obtenerCanciones();
    $resultado = [];

    foreach($listaCanciones as $cancion){
        if($genero && strcasecmp($cancion['genero'], $genero) != 0){
            continue;
        }
        if($tipoBusqueda == 'titulo' && stripos($cancion['titulo'], $textoBusqueda) !== false){
            $resultado[] = $cancion;    
        } elseif($tipoBusqueda == 'ambosCampos' && (stripos($cancion['titulo'], $textoBusqueda) !== false || stripos($cancion['album'], $textoBusqueda) !== false)){
            $resultado[] = $cancion;
        }
    }

    // Mensaje de depuración
    echo "Número de resultados: " . count($resultado) . "<br>";

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
} else {
    // Incluir el formulario si no se ha enviado el formulario
    include 'formulario.php';
}
?>