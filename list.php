<?php
$pdo = db_connect();
?>
<?php
$_SESSION = [];
?>
<?php echo $val;?>
<?php
require dirname(__FILE__)."/../functions/db_function.php";
$pdo = db_connect();
if($pdo == null){
  echo "<p>データベースの接続に失敗しました</p>";
}else{
  $table = "data";
  $stmt = $pdo -> query("SELECT * FROM {$table} WHERE 1");
  $pdo = null;
}
session_destroy();
?>
<div>
  <a href="">home</a>
</div>