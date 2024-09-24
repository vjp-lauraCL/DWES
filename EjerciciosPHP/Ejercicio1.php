<?php
//Genera un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número
//Ejm. si se genera el 3 luego mostrar en la página el string "tres"
$aleatorio = rand (1,3);
if($aleatorio == 1){
    echo "Uno";
}else if ($aleatorio == 2){
    echo "Dos";
}else{
    echo "Tres";
}


//Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do while
echo "<br>Tabla de multiplicar del 2 con for<br>";
for($i = 1; $i <=10; $i++){
    echo "2 x $i = " .(2*$i) . "<br>";
}

echo "<br>Tabla de multiplicar del 2 con while<br>";
$i = 1;
while($i <= 10){
    echo "2 x $i = " .(2*$i) . "<br>";
    $i++;
}

echo "<br>Tabla de multiplicar del 2 con do while<br>";
$i = 1;
do{
    echo "2 x $i = " .(2*$i) . "<br>";
    $i++;
}while($i <= 10);

?>