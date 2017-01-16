<?php
$_SESSION = [];
session_destroy();
?>
<?php echo $val;?>
<?php
define('DB_NAME',   'php_study');
define('DB_HOST',   'localhost');
define('USERNAME',  'php_study');
define('PASSWORD',  'password');
define('CHAR_TYPE', 'utf8');
define('PDO_DSN','mysql:dbname=' . DB_NAME .';host=' . DB_HOST . ';charset=' . CHAR_TYPE);

try{
  $pdo = new PDO(PDO_DSN, USERNAME, PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $e){
  $pdo = null;
  echo "<p>データベースの接続に失敗しました</p>";
}
$pdo = null;
?>
<div>
  <a href="">home</a>
</div>