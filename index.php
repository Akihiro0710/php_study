<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP study</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="val">
    <input type="submit">
  </form>
<?php
$val = isset($_POST['val']) ? $_POST['val'] : "";
echo "<p>{$val}</p>";
?>
</body>
</html>