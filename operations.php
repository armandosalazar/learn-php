<?php
function multiplicate($a, $b) {
  return $a * $b;
}

function isNumeric($n1, $n2) {
  return is_numeric($n1) && is_numeric($n2);
}

function err() {
  echo "<span style='font-weight: bold; color: #ce0c00'>NaN</span>";
}

function validateFields() {
  if (isset($_GET['a']) && isset($_GET['b'])) {
    if (isNumeric($_GET['a'], $_GET['b'])) {
      echo multiplicate($_GET['a'], $_GET['b']);
    } else {
      err();
    }
  }
}