<style>
  body {
    font-family: system-ui;
  }

  label {
    font-weight: bold;
    font-style: italic;
  }

  input {
    font-family: inherit;
    font-size: inherit;
  }

  input[type="text"] {
    width: 40px;
  }
</style>
<form action="">
  <label>
    A:
    <input type="text" name="a" value="<?php echo $_GET['a'] ?>">
  </label>
  <label>
    B:
    <input type="text" name="b" value="<?php echo $_GET['b'] ?>">
  </label>
  <input type="submit" value="Calc">
</form>
<?php
include("operations.php");
?>
<span><b>Result:</b> <?php validateFields(); ?></span>
