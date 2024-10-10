<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Práctica 5</title>
</head>
<body>
    <h1>Búsqueda de canciones</h1>
    <form action ="../index.php" method="POST">
        <label for="textoBusqueda">Texto a buscar: </label>
        <input type="text" name="textoBusqueda" id="textoBusqueda"> <br>
        <label for="tipoBusqueda">Buscar en:</label>
        <input type="radio" name="tipoBusqueda" value="titulo">Titulo de la canción
        <input type="radio" name="tipoBusqueda" value="nombreAlbum">Nombre del álbum
        <input type="radio" name="tipoBusqueda" value="ambosCampos">Ambos campos<br>
        <label for="genero">Genero músical: </label>
        <select name="genero" id="genero">
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="blues">Blues</option>
            <option value="jazz">Jazz</option>
        </select><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>