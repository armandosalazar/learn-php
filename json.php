<?php
$array = ["name" => "luis", "lastname" => "perez"];
$numbers = [1, 2, 3, 4];
$data = Array(
  0 => $array,
  1 => $numbers
);
array_push($data, $array);
echo json_encode($data);