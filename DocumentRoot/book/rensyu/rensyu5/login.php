<?php
  if( !empty($_POST['acnt']) && !empty($_POST['pswd'])){
     $pswd = 'asdfg';

    if($_POST['pswd']==$pswd){

    echo "ようこそ" .$_POST['acnt']. "さん";
  }else{
    echo "パスワードが違います";
    form_view();
  }

}else{

  form_view();
}

function form_view(){


  echo <<<FM
<form action="" method="post">
  <p>アカウント <input type="text" name="acnt" >
  <p>パスワード <input type="password" name="pswd" >
  <p> <input type="submit" value="送信">
</form>
FM;
}