<style>
    body {
        font-family: system-ui;
    }
</style>
<?php
// Variables
$variable = 35;
$nombre = "Armando";
echo $variable;
echo "Mi nombre es " . $nombre;
echo "Mi nombre es $nombre";
// Tipos de datos
$char = 'c';
$int = 45;
$string = "Mi nombre es Armando";
$boolean = false;
$array = array("s", "m", "l");
$null = null;
echo $null . "<br>";
print  "$array[0]<br>";
print_r($array);
print "<br>";
printf("%c\n", 64);
// Funciones para strings
echo "<br>" . strlen($nombre) . "<br>";
echo str_word_count($string) . "<br>";
echo strrev($string) . "<br>";
echo strpos($string, "Mi");
echo "<br>";
echo str_replace("Mi", "My", $string);
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strcmp($nombre, $string);
echo "<br>";
echo substr($string, 0, 2);
echo "<br>";
echo trim($string);
// Operadores
echo "<br>";
$x = 5;
$y = "5";
echo 5 % 10;
echo "<br>";
echo 10 ** 5;
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);