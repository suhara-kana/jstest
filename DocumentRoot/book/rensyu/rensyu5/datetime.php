<p>パソコンは時間を数字として扱っている <br>
ある日時からの経過秒をタイムスタンプといいます｡
<pre style="font: normal 1.1em/125% Consolas">
<?php
$n =  "\n";
// 日付書式はdate関数で引数として指定する
 echo $n,__LINE__,' : ' ,  date("Y-m-d H:i:s") ; 
  echo $n,$n,__LINE__,' : ' ,  date("Y年m月d日") ; 

 echo $n,__LINE__,' : ' ,  strtotime("2020-01-07");
  echo $n,$n,__LINE__,' : ' ,  strtotime("2020-01-08");
  
  date_default_timezone_set('Asia/Tokyo');

 echo $n,__LINE__,' : ' ,  strtotime("2020-12-17 12:00:00");
  echo $n,$n,__LINE__,' : ' ,  strtotime("2020-12-17 12:00:01");
  
  echo $n,__LINE__,' : ' ,  date("Y年m月d日",strtotime("2020-12-18"));
  echo $n ,'今現在のタイムスタンプ',time();

 ?>
  いつからの経過時間でしょうか? 

答えはここ↓
  https://paiza.io/projects/e/R2_lO8F0XSO6_Gb7yepXbQ?theme=twilight