<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP study</title>
</head>
<body>
  <form action="" method="GET">
    <input type="text" name="val">
    <input type="submit">
  </form>
<?php
$val = isset($_GET['val']) ? $_GET['val'] : "";
echo "<p>{$val}</p>";
?>
</body>
</html>