<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎3課題1</title>
</head>
<body>

<!-- 課題7 -->
<h2>課題7</h2>
<p style="font-weight: bold; font-size: 20px;">引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。この関数を20回呼び出す</p>
<?php
  $g_num = 3;
  function calk(){
    global $g_num;
    static $i = 1;
    $g_num *= 2;
    echo $i . '回目' . '結果：' . $g_num . '<br>';
    $i++;
  }

  for ($i=0; $i < 20; $i++) { 
    echo calk();
  }

?>
<br><br><br><br>
<hr>

<!-- 課題8 -->
<h2>課題8</h2>
<p style="font-weight: bold; font-size: 20px;">課題2のユーザー定義箇所を含んだutil.phpを作成し、requireで呼び出して表示する</p>
<?php
  // util.phpの呼び出し
  require "util.php";
  discriminateNum($numX);
  echo '<br><br>';
  myProfile();
?>
<br><br><br><br>
<hr>

<!-- 課題9 -->
<h2>課題9</h2>
<p style="font-weight: bold; font-size: 20px;">3人分のプロフィールについてIDと住所以外を表示する処理を実行する。2重のforeachとcontinueを必ず用いること</p>
<?php
  function registration1(){
    // 登録者1
    $id1 = 00001;
    $name1 = 'たけし';
    $bd1 = '1980/01/01';
    $address1 = '東京';
    $info1 = array('id'=>$id1, '名前'=>$name1, '生年月日'=>$bd1, '住所'=>$address1);
    return $info1;
  }
  function registration2(){
    // 登録者2
    $id2 = 00002;
    $name2 = 'まさし';
    $bd2 = '1985/02/02';
    $address2 = '北海道';
    $info2 = array('id'=>$id2, '名前'=>$name2, '生年月日'=>$bd2, '住所'=>$address2);
    return $info2;
  }
  function registration3(){
    // 登録者3
    $id3 = 00003;
    $name3 = 'ようこ';
    $bd3 = '1990/03/03';
    $address3 = '沖縄';
    $info3 = array('id'=>$id3, '名前'=>$name3, '生年月日'=>$bd3, '住所'=>$address3);
    return $info3;
  }
  // 登録者の配列
  $registrationAll = array('registration1' => registration1(), 'registration2' => registration2(), 'registration3' => registration3());
  // 登録者を取り出す
  foreach ($registrationAll as $value1) {
    foreach ($value1 as $key2 => $value2) {
      switch ($key2) {
        case 'id': // キーが'id'のときはスキップ
          continue;
          break;
        case '名前': // キーが'名前'のときは表示
          echo $value2 . '<br>';
          break;
        case '生年月日': // キーが'生年月日'のときは表示
          echo $value2 . '<br>';
          break;
        case '住所':
          continue;
          break;
      }
    }
  }
?>
<br><br><br><br>
<hr>

<!-- 課題10 -->
<h2>課題10</h2>
<p style="font-weight: bold; font-size: 20px;">
課題9の処理のうち2人目まででforeachのループを抜けるようにする
</p>
<?php

  // 登録者を取り出す
  foreach ($registrationAll as $key1 => $value1) {
    switch ($key1) {
      case 'registration3':
        break;
      default:
        foreach ($value1 as $value2) {
          echo $value2 . '<br>';
        }
        break;
    }
    echo '<br>';
  }
?>
<br><br><br><br>
<hr>

</body>
</html>