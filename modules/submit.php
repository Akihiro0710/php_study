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
  $colmns = array('val');
  $stmt = $pdo -> prepare("INSERT INTO ".$table." (val) VALUES (:val)");
  $stmt -> bindParam(':val', $val, PDO::PARAM_STR);
  $stmt -> execute();
  $pdo = null;
}
session_destroy();
?>
<div>
  <a href="">home</a>
</div>