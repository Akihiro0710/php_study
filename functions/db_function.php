<?php
require dirname(__FILE__)."/../config/db_config.php";
function db_connect(){
  try{
    $pdo = new PDO(PDO_DSN, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }catch(PDOException $e){
    $pdo = null;
  }
  return $pdo;
}
?>