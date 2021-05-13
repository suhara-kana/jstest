<?php require '../header.php'; ?>
<p>購入数を選択してください。</p>
<form action="select-for-output.php" method="post">
<select name="count">
<?php 
for ($i=0; $i<10; $i++) {
  echo '<option value="', $i, '">',$i, '</option>';
//「'」はphpが文字を囲むための記号
//「"」はhtmlの属性値を囲む記号
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>