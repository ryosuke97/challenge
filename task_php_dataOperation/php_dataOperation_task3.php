<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題3</title>
</head>
<body>
  <h2>課題3<span style="font-weight: normal; font-size: 20px;"> クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。</span></h2>

<?php
  date_default_timezone_set('Asia/Tokyo');
  // アクセス時の時間を記録
  $accessTime = date('Y年m月d日 H時i分s秒');
  setcookie('LastLoginDate', $accessTime);
  // 前回アクセス時の時間を取り出す
  $lastDate = $_COOKIE['LastLoginDate'];
  echo '前回のアクセス時刻：' . $lastDate;
?>

</body>
</html>