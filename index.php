<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP study</title>
</head>
<body>
  <?php $val = isset($_POST['val']) ? $_POST['val'] : "";?>
  <form action="" method="POST">
    <input type="text" name="val" value="<?php echo $val;?>">
    <input type="submit" name="submit" value="submit">
  </form>
<?php echo "<p>{$val}</p>";?>
</body>
</html>