<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題5</title>
</head>
<body>

<h2>課題5<span style="font-weight: normal; font-size: 20px;"><br> nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください
</span></h2><hr>
<?php
  // エラーハンドリングで接続時のエラーを確認
  try {
    $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
  } catch(PDOExceprion $Exception) {
    die('エラー：' . $Exception -> getMessage());
  }
  // DB内nameに「茂」を含む情報を取得し画面に表示
  $selectName = 'select * from profiles where name like "%茂%"';
  $querySelectName = $pdoObj -> prepare($selectName);
  $querySelectName -> execute();
  $nameData = $querySelectName -> fetchall(PDO::FETCH_ASSOC);// 1行ごとにデータを格納
  // 登録者を取り出す
  foreach ($nameData as $value) {
    echo '<hr>'; // 1人分で区切る
    foreach ($value as $keyData => $valueData) {
      echo '【' . $keyData . '】' . $valueData;
    }
  }

  $pdoObj = null;

?>
</body>
</html>