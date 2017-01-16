<?php
$val = isset($_POST['val']) ? $_POST['val'] : "";
$submit = isset($_POST['submit']) ? $_POST['submit'] : "form";
?>
<?php include "./commons/header.php";?>
<?php include "./modules/{$submit}.php";?>
<?php include "./commons/footer.php";?>