<?php
$arreglo = array(1, 2, 3, 4, 5);
print_r($arreglo);
echo count($arreglo) . "<br>";
// Arreglos asociativos
$edades = array("Marcos" => 34, "María" => 24);
print_r($edades);
echo "<br>";
foreach ($edades as $key => $value) {
    echo $key . " " .$value . "<br>";
}
// Otra forma
$names = ["Luis", "Pedro"];
for ($i = 0; $i < sizeof($names); $i++) {
  print $names[$i];
}