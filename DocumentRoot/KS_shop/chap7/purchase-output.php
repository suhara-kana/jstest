<?php session_start(); ?>
<?php include_once '../../book/header.php'; ?>
<?php require_once 'menu.php'; ?>

<?php
require_once '../connect.php';
$purchase_id=1;
foreach ($pdo->query('select max(id) from purchase') as $row) {
	$purchase_id=$row['max(id)']+1;
}
$sql=$pdo->prepare('insert into purchase values(?,?)');
if ($sql->execute([$purchase_id, $_SESSION['customer']['id']])) {
	foreach ($_SESSION['product'] as $product_id=>$product) {
		$sql=$pdo->prepare('insert into purchase_detail values(?,?,?)');
		$sql->execute([$purchase_id, $product_id, $product['count']]);
	}
	unset($_SESSION['product']);
	echo '購入手続きが完了しました。ありがとうございます。';
} else {
	echo '購入手続き中にエラーが発生しました。申し訳ございません。';
}
?>
<?php include_once '../../book/footer.php'; ?>
