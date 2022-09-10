<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TODO</title>
</head>

<body>
  <form action="">
    <label>
      <b>
        TODO
      </b>
      <input type="text" name="text">
    </label>
    <input type="submit" value="Add">
  </form>
  <div class="todolist">
    <?php
    include "database.php";
    $connection = getConnection();
    if (isset($_GET['text'])) {
      $text = $_GET['text'];
      if (strlen($text) > 0) {
        $sql = "INSERT INTO todo (`text`,`status`) VALUES ('$text', false)";
        if ($connection->query($sql) === true) {
          // echo '<div><form action=""><input type="checkbox" name="" id="">' . $text . '</form></div>';
        } else {
          die("Error " . $connection->error);
        }
      }
    } elseif (isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = $connection->query("SELECT status FROM todo WHERE id = $id");
      // echo 'Message: ';
      $status = (boolean)$result->fetch_assoc()['status'];
      // var_dump($status);
      if ($status) {
        $sql = "UPDATE todo SET status = false WHERE id = $id";
      } else {
        $sql = "UPDATE todo SET status = true WHERE id = $id";
      }
      $connection->query($sql);
    }
    $sql = "SELECT * FROM todo WHERE status = false";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        // var_dump($row);
        // print_r($row);
    ?>
        <div>
          <form action="" id="todo-<?php echo $row['id'] ?>">
            <label>
              <input id="<?php echo $row['id'] ?>" type="checkbox" onchange="completed(this)" name="id" value="<?php echo $row['id']; ?>">
              <?php echo $row['text'] ?>
            </label>
          </form>
        </div>
    <?php
      }
    }

    $connection->close();
    ?>
  </div>
</body>
<script>
  function completed(evt) {
    const id = `todo-${evt.id}`;
    console.log(id);
    const form = document.getElementById(id);
    form.submit();
  }
</script>

</html>