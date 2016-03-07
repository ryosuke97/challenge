<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎2課題1-9</title>
</head>
<body>

<!-- 課題1 -->
<h2>課題1</h2>
<p style="font-weight: bold; font-size: 20px;">switch文を利用して、以下の処理を実現してください。値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理</p>
<?php

  $numA = 1;

  switch ($numA) {
    case 1:
      echo 'one';
      break;
    case 2:
      echo 'two';
      break;
    default:
      echo '想定外';
      break;
  }

?>
<br><br><br><br>
<hr>

<!-- 課題2 -->
<h2>課題2</h2>
<p style="font-weight: bold; font-size: 20px;">switch文を利用して、以下の処理を実現してください。値が'A'なら「英語」、値が'あ'なら「日本語」、それ以外は何も表示しない処理</p>
<?php

  $str = 'A';

  switch ($str) {
    case 'A':
      echo '日本語';
      break;
    case 'あ':
      echo '日本語';
      break;
  }

?>
<br><br><br><br>
<hr>

<!-- 課題3 -->
<h2>課題3</h2>
<p style="font-weight: bold; font-size: 20px;">for文を利用して、8を20回掛ける処理を実現してください。</p>
<?php

  $numB = 1;

  for ($i=0; $i < 20; $i++) { 
    echo $numB *= 8;
    echo '<br>';
  }

?>
<br><br><br><br>
<hr>

<!-- 課題4 -->
<h2>課題4</h2>
<p style="font-weight: bold; font-size: 20px;">for文を利用して、'A'を30個連結する処理を実現してください。</p>
<?php

  $strA = 'A';

  for ($i=0; $i < 30; $i++) { 
    $strA .= 'A';
  }
  echo $strA;

?>
<br><br><br><br>
<hr>

<!-- 課題5 -->
<h2>課題5</h2>
<p style="font-weight: bold; font-size: 20px;">for文を利用して、0から100を全部足す処理を実現してください。</p>
<?php

  $numC = 0;

  for ($i=1; $i <= 100; $i++) { 
    $numC += $i;
  }
  echo $numC;

?>
<br><br><br><br>
<hr>

<!-- 課題6 -->
<h2>課題6</h2>
<p style="font-weight: bold; font-size: 20px;">while文を利用して、以下の処理を実現してください。1000を2で割り続け、100より小さくなったらループを抜ける処理</p>
<?php

  $numD = 1000;

  while ($numD >= 100) {
    $numD = $numD / 2;
  }
  echo $numD;

?>
<br><br><br><br>
<hr>

<!-- 課題7 -->
<h2>課題7</h2>
<p style="font-weight: bold; font-size: 20px;">以下の順番で、要素が格納された配列を作成してください。10, 100, 'soeda', 'hayashi', -20, 118, 'END'</p>
<?php

  $arr = array(10, 100, 'soeda', 'hayashi', -20, 118, 'END');
  echo $arr[2];

?>
<br><br><br><br>
<hr>

<!-- 課題8 -->
<h2>課題8</h2>
<p style="font-weight: bold; font-size: 20px;">７で作成した配列の'soeda'を33に変更してください。</p>
<?php

  $arr[2] = 33;
  echo $arr[2];

?>
<br><br><br><br>
<hr>

<!-- 課題9 -->
<h2>課題9</h2>
<p style="font-weight: bold; font-size: 20px;">以下の順で、連想配列を作成してください。1に'AAA', 'hello'に'world', 'soeda'に33, 20に20</p>
<?php

  $arrX = array(1 => 'AAA', 'hello' => 'world', 'soeda' => 33, 20 => 20);
  echo $arrX[1];

?>
<br><br><br><br>
<hr>


</body>
</html>