<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
<?php
if (isset($errorLogin))
  echo $errorLogin;
?>
<form action="" method="post">
  <h2>Iniciar sesión</h2>
  <label for="">Usuario<br>
    <input type="text" name="username" id="">
  </label><br>
  <label for="">Contraseña<br>
    <input type="password" name="password" id="">
  </label>
  <p>
    <input type="submit" value="Iniciar sesión">
  </p>
</form>
</body>
</html>