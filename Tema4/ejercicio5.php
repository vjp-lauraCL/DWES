<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>
<form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
    <label for="ingresarPalabra">Ingrese una frase: </label>
    <input type="text" name="ingresarPalabra" value=""><br>
    <label for="buscarPalabra">Buscar la palabra: </label>
    <input type="text" name="buscarPalabra" value=""><br>
    <input type="submit" value="Enviar">
</form>
<?php
//Comprobar si una frase contiene una palabra determinada. Por ejemplo si ingresamos la frase :
// "Estoy aprendiendo a programar" en el formulario y la palabra "programar " en  el campo,  
//el programa imprimirá el siguiente resultado: "contiene la palabra programar"

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $frase  = $_POST['ingresarPalabra'];
        $buscada = $_POST['buscarPalabra'];
        if(strpos($frase, $buscada) !== false){
            echo 'contiene la palabra ' . $buscada;
        }
        else{
            echo 'No contiene la palabra' . $buscada;
        }
        
    }
?>
    
</body>
</html>