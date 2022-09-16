<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <style>
    * {
    }

    header {
      display: flex;
      justify-content: space-around;
      align-items: center;
      border: #166E6A 1px solid;
      border-radius: 5px;
    }
  </style>
</head>
<body>
<header>
  <h2>Home</h2>
  <nav>
<!--    <a href="" onclick="--><?php //$userSession->closeSession(); header('location: ../index.php'); ?><!--">Cerrar sesión</a>-->
    <a href="views/logout.php">Cerrar sesión</a>
  </nav>
</header>
<h2>Welcome <?php echo $user->getUser() ?></h2>

</body>
</html>