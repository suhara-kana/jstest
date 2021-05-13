なにも選ばずに送信した場合に値が届くのはどれ?
不足したタグを追加して試してください

値が入ってるかどうかの判定をしてください｡
<?php
	if(isset($_POST['btn'])){
		var_dump( 
			!empty($_POST['txt']) , 
			!empty($_POST['chk']), 
			!empty($_POST['rdo']) , 
			!empty($_POST['sct']) , 
		);
	}
?>
<form action="output.php" method="post">

<input type="text" name="txt" >

<input type="checkbox" name="chk[]" value="0">
<input type="checkbox" name="chk[]" value="1">
<input type="checkbox" name="chk[]" value="2">

<input type="radio" name="rdo" value="4">
<input type="radio" name="rdo" value="5">
<input type="radio" name="rdo" value="6">

<select name="sct" >
<option disabled selected value>選択</option>
	<option>7</option>
	<option>8</option>
	<option>9</option>
</select>

<input type="submit" name="btn" value="送信">
</form>