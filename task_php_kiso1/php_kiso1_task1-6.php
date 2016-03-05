<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎1課題1~6</title>
</head>
<body>

<!-- 課題1 -->
<h2>課題1<span style="font-weight: normal; font-size: 20px;"> 「Hello world.」を表示してください。</span></h2>
<?php echo 'Hello world.';?>
<br><br><br><br>
<hr>

<!-- 課題2 -->
<h2>課題2<span style="font-weight: normal; font-size: 20px;"> 「groove」「-」「gear」の３つの文字列を連結して表示してください。</span></h2>
<?php echo 'groove'.'-'.'gear';?>
<br><br><br><br>
<hr>

<!-- 課題3 -->
<h2>課題3<span style="font-weight: normal; font-size: 20px;"> 自分の自己紹介を作成してみてください。</span></h2>
<?php echo '山野良介です。<br>前職は教師です。<br>現在フロントエンドエンジニアとして転職活動中です。<br>よろしくお願いいたします！';?>
<br><br><br><br>
<hr>

<!-- 課題4 -->
<h2>課題4<span style="font-weight: normal; font-size: 20px;"> 定数と変数を宣言し、それぞれに数値を入れて四則演算を行ってください。</span></h2>
<?php
  const NUM = 10;

  $ansAdd = NUM + NUM;
  $ansSubtract = NUM - NUM;
  $ansMultiply = NUM * NUM;
  $ansDivide = NUM / NUM;

  $addition = NUM.' + '.NUM.' = '.$ansAdd.'<br>'.'<br>';
  $subtraction = NUM.' - '.NUM.' = '.$ansSubtract.'<br>'.'<br>';
  $multiplication = NUM.' × '.NUM.' = '.$ansMultiply.'<br>'.'<br>';
  $division = NUM.' ÷ '.NUM.' = '.$ansDivide;

  echo '※課題5で表示';

?>
<br><br><br><br>
<hr>

<!-- 課題5 -->
<h2>課題5<span style="font-weight: normal; font-size: 20px;"> 四則演算の結果をそれぞれ表示してください。</span></h2>
<?php

  echo $addition;
  echo $subtraction;
  echo $multiplication;
  echo $division;

?>
<br><br><br><br>
<hr>

<!-- 課題6 -->
<h2>課題6<span style="font-weight: normal; font-size: 20px;"> 変数を宣言し、その変数の中身によって以下の表示を行ってください。<br>
⇒値が 1 なら「１です！」<br>
⇒値が 2 なら「プログラミングキャンプ！」<br>
⇒値が 'a' なら「文字です！」<br>
⇒それ以外なら「その他です！」</span></h2>
<?php

  $content = 2;

  if ($content == 1) {
    echo '1です！';
  } elseif ($content == 2) {
    echo 'プログラミングキャンプです！';
  } elseif ($content == 'a') {
    echo '文字です！';
  } else {
    echo 'その他です！';
  }

?>
<br><br><br><br>
<hr>






</body>
</html>