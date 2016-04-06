<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎2課題1-9</title>
</head>
<body>

<!-- 課題10 -->
<h2>課題10</h2>
<p style="font-weight: bold; font-size: 20px;">クエリストリングを利用して、以下の処理を実現してください。<br>
簡易素因数分解のロジックを作成します。<br>
クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、
元の値と素因数分解の結果を表示するようにしてください。<br>
2ケタ以上の素数が含まれた数値の場合は、
「元の値　1ケタの素因数　その他」と表記して、その他　に含んでください。</p>
<hr>
<?php

  // クエリストリンクから渡された数値を受け取る変数
  $originNum = $_GET['num'];
  //$originNum = 33;
  $num = $originNum;


  // 1桁の素数で割った回数の初期化
  $devideTimes2 = $devideTimes3 = $devideTimes5 = $devideTimes7 = null;

  while ($num % 2 == 0) { // $numを2で割り続ける
    $num /= 2;
    $devideTimes2++;
  }
  while ($num % 3 == 0) { // $numを3で割り続ける
    $num /= 3;
    $devideTimes3++;
  }
  while ($num % 5 == 0) { // $numを5で割り続ける
    $num /= 5;
    $devideTimes5++;
  }
  while ($num % 7 == 0) { // $numを7で割り続ける
    $num /= 7;
    $devideTimes7++;
  }

  // 素数2,3,5,7,その他を定義
  $prime2 = $prime3 = $prime5 = $prime7 = $primeOther = null;
  // 2桁以上の素数の有無
  if ($num == 1) {
    $primeOther = null;
  } else {
    $primeOther = 'その他';
  }
  // 2の素数の数
  if ($devideTimes2 >= 1) {
    $prime2 = 2;
  } else {
    $prime2 = null;
  }
  // 3の素数の数
  if ($devideTimes3 >= 1) {
    $prime3 = 3;
  } else {
    $prime3 = null;
  }
  // 5の素数の数
  if ($devideTimes5 >= 1) {
    $prime5 = 5;
  } else {
    $prime5 = null;
  }
  // 7の素数の数
  if ($devideTimes7 >= 1) {
    $prime7 = 7;
  } else {
    $prime7 = null;
  }

  echo '2で割った回数は' . $devideTimes2 . '回です'.'<br>';
  echo '3で割った回数は' . $devideTimes3 . '回です'.'<br>';
  echo '5で割った回数は' . $devideTimes5 . '回です'.'<br>';
  echo '7で割った回数は' . $devideTimes7 . '回です'.'<br>';
?>

<h3>素因数分解の結果</h3>
<p>元の値：<?php echo $originNum;?></p>
<p>
  1桁の素因数：<?php
  echo $prime2 . '<sup>' . $devideTimes2 . '</sup>';
  echo $prime3 . '<sup>' . $devideTimes3 . '</sup>';
  echo $prime5 . '<sup>' . $devideTimes5 . '</sup>';
  echo $prime7 . '<sup>' . $devideTimes7 . '</sup>';
  echo $primeOther;
  ?>
</p>

</body>
</html>