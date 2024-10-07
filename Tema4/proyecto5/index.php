<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Práctica 5</title>
</head>
<body>
    <h1>Búsqueda de canciones</h1>
    <form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="textoBusqueda">Texto a buscar: </label>
        <input type="text"> <br>
        <label for="tipoBusqueda">Buscar en:</label>
        <input type="radio" name="titulo">Titulo de la canción
        <input type="radio" name="nombre">Nombre del álbum
        <input type="radio" name="ambosCampos">Ambos campos<br>
        <label for="genero">Genero músical: </label>
        <select>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="blues">Blues</option>
            <option value="jazz">Jazz</option>
        </select><br>
        <input type="submit" value="Buscar">
    </form>
   
    <?php
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
    ?>
</body>
</html>