<?php
// Connect to DataBase
$conn = mysqli_connect("127.0.0.1", "root", "root", "test_db", 8889);
if ($conn) {
  echo "Success connection to database<br>";
  echo "Success: " . $conn->host_info . "<br>";
}
$sql = "SELECT * FROM users";
if ($result = $conn->query($sql)) {
  while ($user = $result->fetch_object()) {
    echo var_dump($user->username) . "<br>";
    echo var_dump($user->password) . "<br>";
    echo var_dump($user->created) . "<br>";
  }
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sessions PHP</title>
  <style>
    body {
      font-family: system-ui;
    }
  </style>
</head>
<body>

</body>
</html>
