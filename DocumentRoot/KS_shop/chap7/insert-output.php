<?php 

include_once '../../book/header.php'; 
require_once '../connect.php';
$sql=$pdo->prepare('insert into product values(null, ?, ?)');
if(empty($_REQUEST['name'])){
   echo '商品名を入力してください。';
}else 
if(!preg_match('/\d+/', $_REQUEST['price'])){
	echo '商品価格を整数で入力してください。';
}else
if ($sql->execute([htmlspecialchars($_REQUEST['name'],ENT_QUOTES), $_REQUEST['price']])) {
	echo '追加に成功しました。';
} else {
	echo '追加に失敗しました。';
}

include_once '../../book/footer.php'; ?>
