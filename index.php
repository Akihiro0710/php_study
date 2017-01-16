<?php
session_start();
$val = isset($_SESSION['val']) ? $_SESSION['val'] : "";
$val = isset($_POST['val']) ? $_POST['val'] : $val;
$submit = isset($_POST['submit']) ? $_POST['submit'] : "form";
?>
<?php include "./commons/header.php";?>
<?php include "./modules/{$submit}.php";?>
<?php include "./commons/footer.php";?>