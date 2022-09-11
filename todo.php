<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TODO</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      background-color: #D4F1EF;
      color: #166E6A;
    }
    .todoapp {
      width: 500px;
      margin: 30px auto 0;
      padding: 30px;
      text-align: center;
    }

    .todoapp>form {
      margin-bottom: 20px;
    }

    .todoapp h1 {
      margin-bottom: 20px;
      text-align: left;
    }

    input[type="text"] {
      outline: none;
      padding: 10px 25px;
      border-radius: 4px;
      border: 1px solid #cccccc;
      font-size: inherit;
    }

    input[type="submit"] {
      font-family: inherit;
      background-color: transparent;
      padding: 5px 10px;
      border-radius: 4px;
      border: none;
    }

    .todo {
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #46484F;
      background-color: #fff;
      margin-bottom: 1px;
      padding: 10px;
    }

    /*
    .todolist .todo:nth-child(even) {
      background-color: #ccc;
    }
    */

    input.delete {
      background-color: #ce0c00;
      color: #fff;
      font-weight: bold;
      padding: 10px 15px;
    }
    input.add {
      background-color: #166E6A;
      color: #fff;
      font-weight: bold;
      padding: 10px 15px;
      font-size: inherit;
    }
  </style>
</head>

<body>
<div class="todoapp">
  <h1>TODO App</h1>
  <form action="">
    <label>
      <b>
        TODO:
      </b>
      <input type="text" name="text">
    </label>
    <input type="submit" value="Add" class="add">
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
    } elseif (isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $connection->query("DELETE FROM todo WHERE  id = $id");
    }
    $sql = "SELECT * FROM todo WHERE status = false ORDER BY text ASC";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        // var_dump($row);
        // print_r($row);
        ?>
        <div class="todo">
          <form action="" id="todo-<?php echo $row['id'] ?>">
            <label>
              <input id="<?php echo $row['id'] ?>" type="checkbox" onchange="completed(this)" name="id"
                     value="<?php echo $row['id']; ?>">
              <?php echo $row['text'] ?>
            </label>
          </form>
          <form action="" id="todo-delete-<?php echo $row['id']; ?>">
            <input type="hidden" name="delete" value="<?php echo $row['id'] ?>">
            <input type="submit" value="Delete" class="delete">
          </form>
        </div>
        <?php
      }
    }

    $connection->close();
    ?>
  </div>
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