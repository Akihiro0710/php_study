<?php include "./commons/header.php";?>
<?php $val = isset($_POST['val']) ? $_POST['val'] : "";?>
<form action="" method="POST">
  <input type="text" name="val" value="<?php echo $val;?>">
  <input type="submit" name="submit" value="submit">
</form>
<?php echo "<p>{$val}</p>";?>
<?php include "./commons/footer.php";?>