<?php
$_SESSION = [];
?>
<?php echo $val;?>
<?php
require dirname(__FILE__)."/../config/db_config.php";
try{
  $pdo = new PDO(PDO_DSN, USERNAME, PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $e){
  $pdo = null;
  echo "<p>データベースの接続に失敗しました</p>";
}
$pdo = null;
session_destroy();
?>
<div>
  <a href="">home</a>
</div>