<?php include_once '../../book/header.php'; ?>
<link rel="stylesheet" href="../style2.css">
<div class="th0">商品番号</div>
<div class="th1">商品名</div>
<div class="th1">商品価格</div>
<form action="edit3.php" method="post">
<input type="hidden" name="command" value="insert">
<div class="td0"></div>
<div class="td1"><input type="text" name="name"></div>
<div class="td1"><input type="text" name="price"></div>
<div class="td2"><input type="submit" value="追加"></div>
</form>
<?php include_once '../../book/footer.php'; ?>
