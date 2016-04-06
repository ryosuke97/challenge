<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題4</title>
</head>
<body>
  <h2>課題4<span style="font-weight: normal; font-size: 20px;"> ３と同じ機能をセッションで作成してください。</span></h2>

<?php
  date_default_timezone_set('Asia/Tokyo');
  session_start(); // セッションスタート
  // セッションに時刻がすでにある場合はその時刻を表示
  if (isset($_SESSION['lastAccessTime'])){
      echo ('前回アクセス時刻：'.$_SESSION['lastAccessTime']);
  }
  // セッションに現在の時刻を代入
  $_SESSION['lastAccessTime'] = date('Y年m月d日 H時i分s秒');
?>

</body>
</html>