<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form</title>
  <style>
    body {
      font-family: system-ui;
    }

    .error-msg {
      background-color: #ce0c00;
      font-weight: bold;
      padding: 20px;
      text-align: center;
    }

    .ok-msg {
      background-color: #03ff68;
      font-weight: bold;
      padding: 20px;
      text-align: center;
    }

    input {
      font-family: inherit;
      font-size: inherit;
    }
  </style>
</head>
<body>
<?php
$languages = array();
if (isset($_POST['languages'])) {
  $languages = $_POST['languages'];
  print_r($languages);
} else {
  $languages = [];
}
?>
<?php if (strlen($_POST['password']) < 4 && strlen($_POST['password'] > 0)) { ?>
  <p class="error-msg">Error length</p>
<?php } ?>
<?php if (strlen($_POST['password']) > 4 && isset($_POST['user'])) { ?>
  <p class="ok-msg">Successfully!</p>
<?php } ?>
<form action="form.php" method="post">
  <label>
    User:
    <input type="text" name="user" value="<?php echo $_POST['user'] ?>">
  </label>
  <br>
  <label for="password">
    Password:
  </label><input type="password" name="password" id="password">
  <label for="">Options:
  </label>
  <br>
  <b>Options</b>
  <select name="opts" id="">
    <option value="true" <?php if ($_POST['opts'] == "true") echo "selected" ?>>True</option>
    <option value="false" <?php if ($_POST['opts'] == "false") echo "selected" ?>>False</option>
  </select>
  <br>
  <b>Levels</b>
  <label><input type="radio" name="level" value="easy" <?php if ($_POST['level'] == "easy") echo "checked" ?>>Easy</label>
  <label><input type="radio" name="level" value="medium" <?php if ($_POST['level'] == "medium") echo "checked" ?>>Medium</label>
  <label><input type="radio" name="level" value="advance" <?php if ($_POST['level'] == "advance") echo "checked" ?>>Advance</label>
  <br>
  <b>Languages</b><br>
  <input type="checkbox" name="languages[]" value="php" id="" <?php if (in_array("php", $languages)) echo "checked"; ?>>PHP<br>
  <input type="checkbox" name="languages[]" value="js" id=""<?php if (in_array("js", $languages)) echo "checked"; ?> >JS<br>
  <input type="checkbox" name="languages[]" value="java" id=""<?php if (in_array("java", $languages)) echo "checked"; ?>>Java<br>
  <input type="checkbox" name="languages[]" value="c#" id=""<?php if (in_array("c#", $languages)) echo "checked"; ?>>C#<br>
  <br>
  <input type="submit" value="Send">
</form>
<?php
print_r($_POST);
echo "<br>";
print_r($_COOKIE);
echo "<br>";
?>
</body>
</html>