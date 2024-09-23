<?php
//Creamos una funcion operaciones que muestre el resultado de una operacion con dos operandos
//se mostrará por pantalla el primer operando, el simbolo de la operacion, el segundo operando, el simbolo =
//y el resultado de la operacion. La operacion puede ser suma, resta, division o multiplicacion
//La funcion recibe 4 parámetros: una funcion anonima que se encargue de realizar la operacion, el simbolo a imprimir
//y los dos operandos de forma que podamos llamar distintas veces a la misma funcion cambiando la funcion aninima de la operacion y el símbolo de las distintas operaciones
function operaciones($operacion, $simbolo, $num1, $num2){
    echo $num1 . " " . $simbolo . " " . $num2 . " = " . $operacion($num1, $num2). "<br>";
}


$suma = function($num1, $num2){
    return $num1 + $num2;
};
//Llamamos a la funcion operaciones con una funcion anonima que realice la suma, el simbolo + y los operandos 5 y 3
operaciones($suma, "+", 5, 3);

//Llamamos a la funcion operaciones con una funcion anonima que realice la resta, el simbolo - y los operandos 5 y 3    
operaciones(function($num1, $num2){
    return $num1 - $num2;
}, "-", 5, 3);

//Llamamos a la funcion operaciones con una funcion anonima que realice la multiplicacion, el simbolo * y los operandos 5 y 3

operaciones(function($num1, $num2){
    return $num1 * $num2;
}, "*", 5, 3);


operaciones(function($num1, $num2){
    return $num1 / $num2;
}, "/", 5, 3);


?>