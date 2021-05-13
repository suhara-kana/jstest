<?php 

include_once '../../book/header.php'; ?>
<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>
<?php require_once '../connect.php';
      
foreach ($pdo->query('select * from product') as $row) {
	echo '<tr>';
	echo '<td>', htmlspecialchars($row['id'],ENT_QUOTES), '</td>';
	echo '<td>', htmlspecialchars($row['name'],ENT_QUOTES), '</td>';
	echo '<td>', htmlspecialchars($row['price'],ENT_QUOTES), '</td>';
  echo '<td>';
  echo '<a href="delete-output.php?id=', $row['id'], '">削除</a>';
  echo '</td>';
	echo '</tr>';
	echo "\n";
}
?>
<?php include_once '../../book/footer.php'; ?>
