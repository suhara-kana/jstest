<pre style="font-size:1.1em; line-height:1.5em">
台形の面積をもとめなさい
台形A,B,Cの面積を変数A,B,Cにそれぞれ関数に代入して表示しなさい
<?php
 //台形A
 $j = 32; $k = 23; $h = 11;
 function trapezoid($j,$k,$h){
  return ($j+$k)*$h/2;}
  echo  "台形Aの面積は",trapezoid($j,$k,$h),"です\n";

 //台形B
 $j = 43; $k = 31; $h = 9;
 function trapezoid2($j,$k,$h){
  return ($j+$k)*$h/2;}
  echo "台形Bの面積は",trapezoid2($j,$k,$h),"です\n";
 //台形C
 $j = 51; $k = 65; $h = 31;
 function trapezoid3($j,$k,$h){
  return ($j+$k)*$h/2;}
  echo "台形Cの面積は",trapezoid3($j,$k,$h),"です\n";

?>

次の扇型の面積を求めなさい
<?php
  const CIR = 360;
  define('PAI', 3.14);
  $h = 12 ; //半径
  $s = 45 ; //内角
  function fanshape($h,$s){
    return($h**2 *PAI / CIR);}
    echo "扇型の面積は",fanshape($h,$s),"です\n";


  $h = 9 ; //半径
  $s = 120 ; //内角