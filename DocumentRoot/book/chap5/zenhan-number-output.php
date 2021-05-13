<?php require '../header.php'; ?>
<?php
$count=mb_convert_kana($_REQUEST['count'], 'n');
if (preg_match('/\d+/',$count)) {
  echo $count, '個を購入します。';
} else {
  echo $count, 'は数値ではありません。';
}
?>
<?php require '../footer.php'; ?>