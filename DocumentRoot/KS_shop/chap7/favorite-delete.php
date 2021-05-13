<?php session_start(); 

include_once '../../book/header.php'; 
require_once 'menu.php'; 

if (isset($_SESSION['customer'])) {
	require_once '../connect.php';
	$sql=$pdo->prepare(
		'delete from favorite where customer_id=? and product_id=?');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo 'お気に入りから商品を削除しました。';
	echo '<hr>';
} else {
	echo 'お気に入りから商品を削除するには、ログインしてください。';
}
require_once 'favorite.php';
?>
<?php include_once '../../book/footer.php'; ?>