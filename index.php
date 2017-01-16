<?php include "./commons/header.php";?>
<?php $val = isset($_POST['val']) ? $_POST['val'] : "";?>
<?php include "./modules/form.php";?>
<?php include "./modules/confirm.php";?>
<?php echo "<p>{$val}</p>";?>
<?php include "./commons/footer.php";?>