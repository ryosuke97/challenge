<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP組込み関数課題1-10</title>
</head>
<body>

<?php 
  $br = '<br>';
  date_default_timezone_set('Asia/Tokyo');
 ?>

<!-- 課題1 -->
<h2>課題1</h2>
<p style="font-weight: bold; font-size: 20px2">  2015年1月1日 0時0分0秒のタイムスタンプを作成し、表示してください。
</p>
<?php
  // timestamp生成
  $stamp = mktime(0, 0, 0, 1, 1, 2016);
  echo $stamp;
?>
<br><br><br><br>
<hr>

<!-- 課題2 -->
<h2>課題2</h2>
<p style="font-weight: bold; font-size: 20px;">
  現在の日時を「年-月-日 時:分:秒」で表示してください。
</p>
<?php
  $today = date('Y年m月d日 H時i分s秒');
  echo $today;
?>
<br><br><br><br>
<hr>

<!-- 課題3 -->
<h2>課題3</h2>
<p style="font-weight: bold; font-size: 20px;">
  2016年11月4日 10時0分0秒のタイムスタンプを作成し、「年-月-日 時:分:秒」で表示してください。
</p>
<?php
  $exampleStamp = mktime(10, 0, 0, 11, 4, 2016);
  $exampelToday = date('Y年m月d日 H時i分s秒', $exampleStamp);
  echo $exampelToday;
?>
<br><br><br><br>
<hr>

<!-- 課題4 -->
<h2>課題4</h2>
<p style="font-weight: bold; font-size: 20px;">
  2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（総秒）を表示してください。
</p>
<?php
  $beginStamp = mktime(0, 0, 0, 1, 1, 2015);    // 年始
  $endStamp = mktime(23, 59, 59, 12, 31, 2015); // 年末
  $diff = $endStamp - $beginStamp;
  echo $diff;
?>
<br><br><br><br>
<hr>

<!-- 課題5 -->
<h2>課題5</h2>
<p style="font-weight: bold; font-size: 20px;">
  自分の氏名について、バイト数と文字数を取得して、表示してください。
</p>
<?php
  $name = '山野良介';
  echo $name . 'は' . strlen($name) . 'バイト ' . mb_strlen($name) . '文字です。';
?>
<br><br><br><br>
<hr>

<!-- 課題6 -->
<h2>課題6</h2>
<p style="font-weight: bold; font-size: 20px;">
  自分のメールアドレスの「@」以降の文字を取得して、表示してください。
</p>
<?php
  $mailAddress = 'ryosuke.y.97@gmail.com';
  echo strstr($mailAddress, '@');
?>
<br><br><br><br>
<hr>

<!-- 課題7 -->
<h2>課題7</h2>
<p style="font-weight: bold; font-size: 20px;">
  以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、結果を表示してください。<br>「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」
</p>
<?php
  $txt = 'きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます';
  $search = array('U', 'I');
  $replace = array('う', 'い');
  echo str_replace($search, $replace, $txt);
?>
<br><br><br><br>
<hr>

<!-- 課題8,9 -->
<h2>課題8,9</h2>
<p style="font-weight: bold; font-size: 20px;">
  課題8:ファイルに自己紹介を書き出し、保存してください。<br>
  課題9:ファイルから自己紹介を読み出し、表示してください。
</p>
<?php
  $sampleFile = fopen('sample.txt', 'r');
  $file_text = fgets($sampleFile);
  fclose($sampleFile);
  echo $file_text;

  $sampleFile = fopen('sample.txt', 'w');
  fwrite($sampleFile, 'www');
  fclose($sampleFile);
  echo $file_text;
?>
<br><br><br><br>
<hr>

<!-- 課題10 -->
<h2>課題10</h2>
<p style="font-weight: bold; font-size: 20px;">
  紹介していないPHPの組み込み関数を利用して、処理を作成してください。
</p>
<?php
  echo '【数字にカンマをつける - number_format()関数 - 】' . $br . $br;

  // microtimeの返り値をexplodeで分割して別々の変数に保存
  list($micro, $Unixtime) = explode(" ", microtime());
  $sec = $micro + date("s", $Unixtime); // 秒"s"とマイクロ秒を足す
  $startTime = $endTime = date("Y年m月d日 g:i:", $Unixtime).$sec;

  $num = 1234567890;

  // logファイル書き込み
  $logFile = fopen('log.txt', 'w');
  $cutOffNum = number_format($num); // カンマで区切る
  fwrite($logFile, '開始時間：' . $startTime . $br . $cutOffNum . $br);
  fwrite($logFile, '終了時間：' . $endTime);
  fclose($logFile);

  // logファイルを表示
  $logFile = fopen('log.txt', 'r');
  $log_text = fgets($logFile);
  fclose($logFile);
  echo $log_text;

?>
<br><br><br><br>
<hr>

</body>
</html>