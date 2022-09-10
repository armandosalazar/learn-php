<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP!</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: system-ui;
        }
    </style>
</head>
<body>
<a href="./general.php">General PHP</a>
<p><?php echo "Hello World!"; ?></p>
<p><?= "Wey" ?></p>
<!-- Salida no html desde el servidor -->
<?php
// header("Content-Type: text/html");
// echo "Hola mundo";
?>
<?php
// @session_start();
error_reporting(E_ALL ^ E_WARNING);
header("Content-Type: application/json");
// Esto dará un warn porque lo primero que debería enviarse es el php en lugar de cualquier otra cosa, para evitar eso utilizamos error_reporting.
// Create a PHP data array.
$data = ["response" => "Hello Word", "name" => "Armando"];
// json_encode will convert it to a valid JSON string.
echo json_encode($data);
print json_encode($data);
printf("%s\n", "Hola mundo")
?>
<pre><?php echo json_encode($data) ?></pre>
<?php
echo memory_get_usage() . "\n";
unset($data);
echo memory_get_usage();
?>
<?php

class SomeClass
{
    // public static int $counter = 0;
}

// SomeClass::$counter += 1;
// echo (int)SomeClass::$counter;
?>
</body>
</html>