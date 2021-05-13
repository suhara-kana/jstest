複数の条件がある場合の条件式 &&(AND) ||(OR)

1.まだ食べておらず,所持金が500円以上なら"買える",どちらか１方でも満たせなければ"買えない"
と画面表示しなさい｡

<form action="ronri-enzan1-output.php" method="post">
<p>今日の朝ごはんは</p>
<p id="false"><input type="radio" name="tabeta" value="食べてない"required>食べてない</p>
<p><input type="radio" name="tabeta" value="食べた">食べた</p>
<p>所持金を選択してください。</p>
<p><input type="radio" name="syojikin" value="500円以上"required>500円以上</p>
<p><input type="radio" name="syojikin" value="499円以下"required>499円以下</p>
<p><input type="submit" name="sousin" value="送信"></p>
</form>



2.所持金が400円以上あるか,商品券があれば買える,どちらか１方でも満たせれば"買える"

$shojikin = 500;
$shohinken = false;
