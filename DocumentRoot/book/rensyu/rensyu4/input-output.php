<?php
  if(isset($_POST['btn'] )){
    
    var_dump( 
      //echo "sct\n";
	  //($_POST['sct']) // string(0) ""
		//( !empty($_POST['sct']) )// bool(true) ←正解
		//( isset($_POST['sct']) ) //bool(true)


      //$_POST['rdo'],
      //!empty($_POST['rdo']),($_POST['rdo']),($_POST['rdo']) // bool(false) NULL NULL
      //isset($_POST['rdo']),($_POST['rdo']),($_POST['rdo'])   // bool(false) NULL NULL  ←正解

    //($_POST['txt']) // → string(0) ""
		// // 未入力の場合は0バイトの文字列が送られてくる
		//( isset($_POST['txt'])) // bool(true)
		//( !empty($_POST['txt'])) //bool(false)←正解

     // echo "checkBox\n";
		//($_POST['chk']) //NULL
		
		//!empty($_POST['chk'][0]) , //false
    //!empty($_POST['chk'][1]) , //false
    //!empty($_POST['chk'][2])  //false
		// );
    //isset($_POST['chk'][0]) , //false  //←正解
    //isset($_POST['chk'][1]) , //false
    //isset($_POST['chk'][2]) , //false
    );
  }
  //エラーが出ないのは'txt'と'chk'のみ
?>
 
<form method="post">
  <input type="text" name="txt" >
  
  <input type="checkbox" name="chk[]" value="0">
  <input type="checkbox" name="chk[]" value="1">
  <input type="checkbox" name="chk[]" value="2">
  
  <input type="radio" name="rdo" value="4" >
  <input type="radio" name="rdo" value="5">
  <input type="radio" name="rdo" value="6">
  
  <select name="sct" >
    <option value="">選択してね</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
  </select>
<!-- 送信ボタン -->
  <input type="submit" name="btn" value="sousin">
</form>
