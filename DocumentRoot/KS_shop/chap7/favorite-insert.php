<?php session_start(); 

include_once '../../book/header.php'; 
require_once 'menu.php'; 

if (isset($_SESSION['customer'])) {
 require_once '../connect.php';
	$sql=$pdo->prepare('insert into favorite values(?,?)');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo 'お気に入りに商品を追加しました。';
	echo '<hr>';
	require_once 'favorite.php';
} else {
	echo 'お気に入りに商品を追加するには、ログインしてください。';
}
?>
<?php include_once '../../book/footer.php'; ?>
