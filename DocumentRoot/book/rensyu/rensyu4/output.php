
<?php
if(isset($_POST['btn'])){
	var_dump( 
		!empty($_POST['txt']) , 
		!empty($_POST['chk']), 
		!empty($_POST['rdo']) , 
		!empty($_POST['sct']) , 
	);
}

 $chk=$_POST['chk'];
 $rdo=$_POST['rdo'];
 $sct=$_POST['sct'];
	
    echo $_POST['txt'];
		foreach ($chk as $value){
			$c=$value;}
		echo $c;
		foreach ($rdo as $value){
			$r=$value;}
		echo $r;
		foreach ($sct as $value){
			$s=$value;}
		echo $s;
		<?php
  if(isset($_POST['btn'] )){
    var_dump( 
      !empty($_POST['chk'][0]) , 
      !empty($_POST['chk'][1]) , 
      !empty($_POST['chk'][2]) , 
    );
  }
?>
 
<form method="post">
  <input type="text" name="txt" >
  
  <input type="checkbox" name="chk[]" value="0">
  <input type="checkbox" name="chk[]" value="1">
  <input type="checkbox" name="chk[]" value="2">
  
  <input type="radio" name="rdo" value="4" required>
  <input type="radio" name="rdo" value="5">
  <input type="radio" name="rdo" value="6">
  
  <select name="sct" required>
    <option value="">選択してね</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
  </select>
<!-- 送信ボタン -->
  <input type="submit" name="btn" value="sousin">
</form>
