<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎3課題1</title>
</head>
<body>

<!-- 課題1 -->
<h2>課題1</h2>
<p style="font-weight: bold; font-size: 20px;">自分のプロフィール(名前、生年月日、自己紹介を3行に分けて表示するユーザー定義関数を作り、関数を10回呼び出して下さい</p>
<?php
  // 自己紹介の関数
  function myProfile() {
    echo '名前： 山野良介' . '<br>';
    echo '生年月日： 1989/09/07' . '<br>';
    echo '自己紹介：よろしくお願いします' . '<br><br>';
    return true;
  }
  // 自己紹介を10回呼び出す
  for ($i=0; $i < 10; $i++) {
    echo $i+1 . '回目' . '<br>';
    myProfile();
  }
?>
<br><br><br><br>
<hr>

<!-- 課題2 -->
<h2>課題2</h2>
<p style="font-weight: bold; font-size: 20px;">引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください</p>
<?php
  $numX = 3;
  function discriminateNum($num) {
    if ($num % 2 == 0) {
      echo $num . 'は偶数です。';
    } else {
      echo $num . 'は奇数です。';
    }
  }
  discriminateNum($numX);
?>
<br><br><br><br>
<hr>

<!-- 課題3 -->
<h2>課題3</h2>
<p style="font-weight: bold; font-size: 20px;">引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。</p>
<?php
  $numY = 1;
  $num5 = 5;
  $type = false;
  // bool値によって計算を変える関数
  function culc($numA, $numB, $type){
    $result = $numA * $numB;
    if ($type == false) {
      echo $result;
    } else {
      echo $result * $result;
    }
  }
  $type = true;
  culc($numY, $num5, $type);
?>
<br><br><br><br>
<hr>

<!-- 課題4 -->
<h2>課題4</h2>
<p style="font-weight: bold; font-size: 20px;">課題1で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する</p>
<?php
  // 自己紹介の変数
  $myName = '山野良介';
  $myBirthday = '1989/09/07';
  $myIntro = 'よろしくお願いします!';
  // 課題1の関数を$actFlugに格納
  $actFlug = myProfile($myName, $myBirthday, $myIntro);
  //bool値によって表示を変える
  if ($actFlug === true) {
    echo 'この処理は正しく実行できました';
  } else {
    echo '正しく実行できませんでした';
  }
?>
<br><br><br><br>
<hr>

<!-- 課題5 -->
<h2>課題5</h2>
<p style="font-weight: bold; font-size: 20px;">
戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する
</p>
<?php
  // 表示するデータを定義
  function dataDisplay(){
    $profId = 19890000;
    $profName = '山野良介';
    $profBirthday = '1989/09/07';
    $profAddress = '◯県△市□町';
    return array('id'=>$profId, '名前'=>$profName, '生年月日'=>$profBirthday, '住所'=>$profAddress);
  }
  // データを表示の実行
  foreach(dataDisplay() as $key => $value){
    echo '【' . $key . '】' . '-> ' . $value . '<br>';
  }

?>
<br><br><br><br>
<hr>

<!-- 課題6 -->
<h2>課題6</h2>
<p style="font-weight: bold; font-size: 20px;">
名前による検索プログラムを実装する。3人分のプロフィール(項目は課題5参照)をあらかじめ定義しておく。引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。それ以降などは課題5と同じ扱いに
</p>
<?php

  function search($person){
    // 登録するデータ
    // 登録者1
    $id1 = 00001;
    $name1 = 'たけし';
    $bd1 = '1980/01/01';
    $address1 = '東京';
    $person1 = array('id'=>$id1, '名前'=>$name1, '生年月日'=>$bd1, '住所'=>$address1);

    // 登録者2
    $id2 = 00002;
    $name2 = 'まさし';
    $bd2 = '1985/02/02';
    $address2 = '北海道';
    $person2 = array('id'=>$id2, '名前'=>$name2, '生年月日'=>$bd2, '住所'=>$address2);

    // 登録者3
    $id3 = 00003;
    $name3 = 'ようこ';
    $bd3 = '1990/03/03';
    $address3 = '沖縄';
    $person3 = array('id'=>$id3, '名前'=>$name3, '生年月日'=>$bd3, '住所'=>$address3);

    if (strstr($name1, $person)) {
      return $person1;
    } elseif (strstr($name2, $person)) {
      return $person2;
    } elseif (strstr($name3, $person)) {
      return $person3;
    } else {
      echo '該当者なし';
      return null;
    }
  }

  $searchPerson = 'た';
  if (search($searchPerson) != null) {
    foreach(search($searchPerson) as $key => $value){
    echo '【' . $key . '】' . '-> ' . $value . '<br>';
    }
  }


?>
<br><br><br><br>
<hr>

</body>
</html>