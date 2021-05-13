<?php
$pdo=new PDO('mysql:host=localhost;dbname=KS_shop;charset=utf8', 
'suhara_kana', 'Asdf3333-');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'select * from product where id ='. $_POST['shohin_id'];
$stmt = $pdo->query($sql);
$p = '';
foreach ( $stmt as $row) {
  $p .= $row['id']. ':';
  $p .= $row['name']. ':';
  $p .= $row['price'];
}
echo json_encode($p);