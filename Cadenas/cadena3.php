<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Cadena3</title>
</head>
<body>
    <?php
    //A partir de una variable que contenga una URL, utiliza la función parse_url
    //para extrar de la url las siguientes partes y mostrarlas en pantalla:
    //El protocolo utilizado, el nombre del usuario, el path de la url, el query string de la url.
   $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
   echo parse_url($url,PHP_URL_USER) . "<br>";
   echo parse_url($url,PHP_URL_SCHEME) . "<br>";
   echo parse_url($url, PHP_URL_QUERY) . "<br>";
   echo parse_url($url, PHP_URL_PATH) . "<br>";
    ?>
</body>
</html>