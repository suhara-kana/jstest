<?php session_start(); ?>

<?php include_once '../../book/header.php'; ?>
<?php require_once 'menu.php'; ?>

<?php
$id=$_REQUEST['id'];
if (!isset($_SESSION['product'])) {
	$_SESSION['product']=[];
}
$count=0;
if (isset($_SESSION['product'][$id])) {
	$count=$_SESSION['product'][$id]['count'];
}
$_SESSION['product'][$id]=[
	'name'=>$_REQUEST['name'], 
	'price'=>$_REQUEST['price'], 
	'count'=>$count+$_REQUEST['count']
];
echo '<p>カートに商品を追加しました。</p>';
echo '<hr>';
require_once 'cart.php';
?>
<?php include_once '../../book/footer.php'; ?>
