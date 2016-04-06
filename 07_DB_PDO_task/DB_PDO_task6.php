<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題6</title>
</head>
<body>

<h2>課題6<span style="font-weight: normal; font-size: 20px;"><br> 課題2でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください
</span></h2><hr>
<?php
  // エラーハンドリングで接続時のエラーを確認
  try {
    $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
  } catch(PDOException $Exception){
    die('エラー：' . $Exception -> getMessage());
  }
  // 指定したレコードを消去する
  $dltRecode = 'delete from profiles where profilesID=6';
  $dltquery = $pdoObj -> prepare($dltRecode);
  $dltquery -> execute();
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