<?php require '../header.php'; ?>
<?php
$password=$_REQUEST['password'];
if (preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}/', $password)) {
  echo 'パスワード「',$password,'」を確認しました。';
} else {
  echo 'パスワード「',$password,'」は適切ではありません。';
}
?>
<?php require '../footer.php'; ?>