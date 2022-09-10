<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Include and Require</title>
</head>
<body>
<?php
// La diferencia entre include y require es que al ocurrir un error en un archivo require no muestra el contenido a continuación a diferencia de include.
require("header.php");
include("header.php");
?>
</body>
</html>