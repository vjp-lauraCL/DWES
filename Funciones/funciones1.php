<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Laura Casero Labrador">
  <title>Document</title>
</head>
<body>
<?php
//crear una funcion llamada insert que nos genere una sentencia tipo insert de SQL. Recibe dos parámetros:
//el nombre de la tabla y un array asociativo que contendrá los nombres y valores de los campos de la tabla.
//la sentencia tendrá la siguiente forma: "INSERT INTO NOMBRE_TABLA (CAMPO1, CAMPO2, CAMPO3) VALUES (VALOR1, VALOR2, VALOR3)"


$alumnos =array(
    ["dni"=> 111, "nombre"=> "Marta", "apellidos"=>'Garcia', "edad"=>21, "ciclo"=>"daw"], 
    ["dni"=> 222, "nombre"=> "Lucia", "apellidos"=>'Perez', "edad"=>18, "ciclo"=>"daw"], 
    ["dni"=> 333, "nombre"=> "Maya", "apellidos"=>'Rodriguez', "edad"=>22, "ciclo"=>"daw"], 
    ["dni"=> 444, "nombre"=> "Rita", "apellidos"=>'Gutierrez', "edad"=>25, "ciclo"=>"daw"], 

);
function insert($dni, $nombre, $apellidos, $edad, $ciclo){
  printf("INSERT INTO alumnos (dni, nombre, apellidos, edad, ciclo) VALUES (%d, %s, %s, %d, %s)", $dni, $nombre, $apellidos, $edad, $ciclo);
}

foreach($alumnos as $alumno){
     insert($alumno["dni"], $alumno["nombre"], $alumno["apellidos"], $alumno["edad"], $alumno["ciclo"]);
        echo "<br>";
}

?>
</body>
</html>
