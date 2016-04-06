<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎1課題7</title>
</head>
<body>

<!-- 課題7 -->
<h2>課題7<span style="font-weight: normal; font-size: 20px;"><br> スーパーのレジでレシートを作る仕組みを作成します。
クエリストリングで総額・個数・商品種別を受け取って処理します。</span></h2>
<?php

  // 総額・個数・商品種別の受け取る変数
  $totalPrice = $_GET['totalPrice'];  // 総額
  $num = $_GET['num'];                // 個数
  $section = $_GET['section'];        // 商品種別

  /* test------------------------------------------
  $totalPrice = 3000;  // 総額
  $num = 3;            // 個数
  $section = 2;        // 商品種別
  -----------------------------------------------*/


  // ①商品種別は、３つ。１：雑貨、２：生鮮食品、３：その他  まずは、この商品種別を表示してください。

  // 各商品種別表示の変数
  $section1 = '雑貨';
  $section2 = '生鮮食品';
  $section3 = 'その他';

  // 送られてきた商品種別の表示分岐
  if ($section == 1) {
    echo '種別：'.$section1.'<br>'.'<br>';
  } elseif ($section == 2) {
    echo '種別：'.$section2.'<br>'.'<br>';
  } else {
    echo '種別：'.$section3.'<br>'.'<br>';
  }


  // ②総額と個数から１個当たりの値段を算出してください。総額と１個当たりの値段を表示してください。
  echo '総額：'.$totalPrice.'円'.'<br>'.'個数：'.$num.'個'.'<br>';
  echo '単価：'.$totalPrice / $num.'円'.'<br>'.'<br>';


  // ③3000円以上購入で4%、5000円以上購入で5%のポイントが付きます。購入額に応じたポイントの表示を行ってください。

  // ポイントレートの設定
  $pointRate5 = floor($totalPrice * 0.05);        // 5000円以上のポイント
  $pointRate4 = floor($totalPrice * 0.04);        // 3000円以上5000円未満のポイント
  $pointRateNormal = floor($totalPrice * 0.01);   // 3000円未満のポイント

  // 購入総額に応じたポイントの付与と表示
  if ($totalPrice >= 5000) {
    echo '今回のポイントは'.$pointRate5.'ポイントです。';
  } elseif ($totalPrice >= 3000) {
    echo '今回のポイントは'.$pointRate4.'ポイントです。';
  } else {
    echo '今回のポイントは'.$pointRateNormal.'ポイントです。';
  }


?>

</body>
</html>