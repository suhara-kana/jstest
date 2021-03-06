<?php 
session_start(); 

include_once '../../book/header.php'; 
require_once 'menu.php'; 

if (!isset($_SESSION['customer'])) {
	echo '購入手続きを行うにはログインしてください。';
} else 
if (empty($_SESSION['product'])) {
	echo 'カートに商品がありません。';
} else {
	echo '<p>お名前：', $_SESSION['customer']['name'], '</p>';
	echo '<p>ご住所：', $_SESSION['customer']['address'], '</p>';
	echo '<hr>';
	require 'cart.php';
	echo '<hr>';
	echo '<p>内容をご確認いただき、購入を確定してください。</p>';
	echo '<a href="purchase-output.php">購入を確定する</a>';
}
?>
<?php include_once '../../book/footer.php'; ?>