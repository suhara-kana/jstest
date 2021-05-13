<?php

/*
  1. eitango.txt を読み込んで 配列からランダムな1要素を取得して,日本語のキーを表示しなさい
  2. 英単語を入力させて,送信したらあたりの判定をする
  */
session_start();

  if( !empty($_POST["uanswer"]) && !empty($_SESSION["answer"]) ){
  if( $_POST["uanswer"] == $_SESSION["answer"] ){
    echo "当たり<br>",nextq();
  }else{
    echo "はずれ<br>", "正解は、", $_SESSION["answer"],"<br>",nextq();
  }
}else {
    nextq();
  }



  function nextq(){
    $file = "eitango-text.php";
    if( file_exists($file)){
    require_once $file;
    $count = count($tango);
  }
  //var_dump($count,$tango);

  $question =$tango[rand(0,$count)];
  foreach($question as $key =>$value){
    $_SESSION["answer"] = $value;
  }

?>
<p><?=$key?>を英語でなんという?</p>
<form method="post">
<input name="uanswer">
<input type="submit" name="submit" value="回答">
</form>
<?php
  }