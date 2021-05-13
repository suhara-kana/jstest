<?php
  if( !empty($_POST['acnt']) && !empty($_POST['pswd'])  ){
    //送信されている場合はここに来る
    $pswd = 'asdfg'; //←アカウントに紐付いたパスワードだとする,
    
      if($_POST['pswd']== $pswd ){
        
        echo "ようこそ" .$_POST['acnt']. "さん";
      }else{
        echo "パスワードが違います";
        form_view(); //← ここでフォームを再度表示する
      }


  }else{
    // 未送信のとき
    form_view();
  }


  function form_view(){
  /*
    ヒアドキュメント構文 <<<任意文字 で開始の宣言
    開始した文字で修了の宣言｡
    " ' $変数 が自由に書ける｡
    注意しなければならないのは,開始,終了の行には空白やコメントもあってはならないこと
  */

    echo <<<FM
  <form action="" method="post">
    <p>アカウント <input type="text" name="acnt" >
    <p>パスワード <input type="password" name="pswd" >
    <p> <input type="submit" value="送信">
  </form>
FM;
 } 
