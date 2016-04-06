<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題7</title>
</head>
<body>

<h2>課題7<span style="font-weight: normal; font-size: 20px;"><br> profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください
</span></h2><hr>
<?php
  // エラーハンドリングで接続時のエラーを確認
  try {
    $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
  } catch(PDOException $Exception){
    die('エラー：' . $Exception -> getMessage());
  }
  // profilesID[1]のレコードを更新する
  $updateRecode = 'update profiles set name="松岡修造", age=48, birthday="1967-11-06" where profilesID=1';
  $updateQuery = $pdoObj -> prepare($updateRecode);
  $updateQuery -> execute();
  // テーブルのデータを取得する
  $selectData = 'select * from profiles';
  $querySelect = $pdoObj -> prepare($selectData);
  $querySelect -> execute();
  $data = $querySelect -> fetchall(PDO::FETCH_ASSOC);
  // DBの登録内容を表示する
  foreach ($data as $value) {
    echo '<hr>';
    foreach ($value as $keyData => $valueData) {
      echo '【' . $keyData . '】' . $valueData;
    }
  }

?>
</body>
</html>