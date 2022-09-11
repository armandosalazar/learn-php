<?php
include_once "includes/survey.php";
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDO</title>
</head>
<body>
<form action="">
  <b>¿Cuál es tu lenguaje de programación favorito?</b><br>
  <input type="radio" name="language" id="" value="c">C<br>
  <input type="radio" name="language" id="" value="c++">C++<br>
  <input type="radio" name="language" id="" value="java">Java<br>
  <input type="radio" name="language" id="" value="swift">Swift<br>
  <input type="radio" name="language" id="" value="python">Python<br>
  <input type="submit" value="Votar">
</form>
<?php
$survey = new Survey();
$showResults = false;

if (isset($_GET['language'])) {
  $survey->setOptionSelected($_GET['language']);
  $survey->vote();
  $survey->getTotalVotes();
}
?>
</body>
</html>
