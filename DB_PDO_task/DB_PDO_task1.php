<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題1</title>
</head>
<body>

<h2>課題1<span style="font-weight: normal; font-size: 20px;"><br> Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください
</span></h2>
<?php
  try{
    $pdo_object = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','ryosuke97','yamano0197');
  } catch(PDOException $Exception) {
    die('接続に失敗しました：' . $Exception -> getMessage());
  }
  $pdo_object = null;
?>
</body>
</html>