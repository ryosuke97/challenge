<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題4</title>
</head>
<body>

<h2>課題4<span style="font-weight: normal; font-size: 20px;"><br> 前回の課題1で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください
</span></h2><hr>
<?php
  // エラーハンドリングで接続時のエラーを確認
  try {
    $pdo_object = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8;', 'root');
  } catch(PDOException $Exception) {
    die('接続に失敗しました：' . $Exception -> getMessage());
  }
  // DB操作
  $selectProfiles = 'select * from profiles where profilesID=1';// IDが1のデータを表示するコマンドの格納
  $queryProfiles = $pdo_object -> prepare($selectProfiles);// 全データ表示の実行と結果を受け取る変数
  $queryProfiles -> execute();

  // 1行ごとデータを格納
  $data = $queryProfiles -> fetchall(PDO::FETCH_ASSOC);
  // データを取り出す
  foreach ($data as $value) { // 全ての登録者を取り出す
    foreach ($value as $keyData => $valueData) { // 登録者のデータを取り出す
      echo '【' . $keyData . '】' . $valueData;
    }
    echo '<br>' . '<hr>';// 1人分で区切る
  }


?>
</body>
</html>