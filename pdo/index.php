<?php
include_once "includes/survey.php";
$survey = new Survey();
$showResults = false;

if (isset($_GET['language'])) {
  $showResults = true;
  $survey->setOptionSelected($_GET['language']);
  $survey->vote();
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDO</title>
  <link rel="stylesheet" href="./styles.css">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: system-ui;
      accent-color: #0f3d3c;
    }

    .container {
      width: 90%;
      margin: 0 auto;
    }

    .container form {
      text-align: center;
      border: 1px solid #0f3d3c;
      padding: 50px;
      border-radius: 15px;
    }

    input[type="submit"] {
      all: unset;
      background-color: #166E6A;
      color: #ccc;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      text-align: center;
      width: 50%;
    }
  </style>
</head>
<body>
<div class="container">
  <?php
  if ($showResults) {
    $languages = $survey->getLanguagesAndVotes();
    echo '<h2>Total ' . $survey->getTotalVotes() . '</h2>';
    foreach ($languages as $language) {
      $percentage = $survey->getPercentageVotes($language['votes']);
      include "views/results.php";
    }
  } else {
    include_once "views/form.php";
  }
  ?>
</div>
</body>
</html>
