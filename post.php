<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST and GET</title>
</head>
<body>
<form action="recibir_post.php" method="post">
    <label>
        Name:
        <input type="text" name="name">
    </label>
    <label>
        Lastname:
        <input type="text" name="lastname">
    </label>
    <input type="submit" value="Send">
</form>

<form action="recibir_post.php" method="get">
    <label>
        Name:
        <input type="text" name="name">
    </label>
    <label>
        Lastname:
        <input type="text" name="lastname">
    </label>
    <input type="submit" value="Send">
</form>

</body>
</html>