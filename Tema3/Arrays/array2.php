<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Laura Casero Labrador">
    <title>Document</title>
</head>
<body>
    <style>
        table{
            border: 2px solid black;
        }
        th{
            background-color: greenyellow;
        }
        td{
            background-color: lightskyblue;
        }
    </style>
<?php
//Realiza el código php necesario para visualizar la siguiente tabla (para ello utiliza un array multidimensional)

$paises =[
    ["País"=> "Alemania", "Capital"=> "Berlín", "Extensión" => 557046, "Habitantes"=> 78420000],
    ["País"=> "Austria", "Capital"=> "Viena", "Extensión" => 83858, "Habitantes"=> 7614000],
    ["País"=> "Bélgica", "Capital"=> "Bruselas", "Extensión" => 30518, "Habitantes"=> 9932000]
];

echo "<table border ='1'>";
echo "<tr>";
echo "<th>País</th>";
echo "<th>Capital</th>";
echo "<th>Extensión</th>";
echo "<th>Habitantes</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $paises[0]["País"] . "</td>";
echo "<td>" . $paises[0]["Capital"] . "</td>";
echo "<td>" . $paises[0]["Extensión"] . "</td>";
echo "<td>" . $paises[0]["Habitantes"] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $paises[1]["País"] . "</td>";
echo "<td>" . $paises[1]["Capital"] . "</td>";
echo "<td>" . $paises[1]["Extensión"] . "</td>";
echo "<td>" . $paises[1]["Habitantes"] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $paises[2]["País"] . "</td>";
echo "<td>" . $paises[2]["Capital"] . "</td>";
echo "<td>" . $paises[2]["Extensión"] . "</td>";
echo "<td>" . $paises[2]["Habitantes"] . "</td>";
echo "</tr>";

echo "</table>";

?>
    
</body>
</html>