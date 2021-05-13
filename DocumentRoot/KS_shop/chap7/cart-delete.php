<?php session_start(); ?>

<?php include_once '../../book/header.php'; ?>
<?php require_once 'menu.php'; ?>

<?php
unset($_SESSION['product'][$_REQUEST['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require_once 'cart.php';
?>
<?php include_once '../../book/footer.php'; ?>