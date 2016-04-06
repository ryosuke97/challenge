<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題8</title>
</head>
<body>

<h2>課題8<span style="font-weight: normal; font-size: 20px;"><br> 検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください
</span></h2><hr>
<form action="DB_PDO_task8.php" method="post" name="searchName">
  <p>
    名前：<input type="text" name="name">
  </p>
  <p>
    <input type="submit" value="検索">
  </p>
</form>
<hr>
<?php

  // 接続時のエラーを確認
  try {
    $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
  } catch(PDOException $Exception){
    die('エラー：' . $Exception -> getMessage());
  }
  if (isset($_POST['name'])) { // ポストの中身があればその文字で検索する
    $name = $_POST['name'];
    $searchSql = 'select * from profiles where name like :name';
    $searchQuery = $pdoObj -> prepare($searchSql);
    $searchQuery -> bindValue(':name', "%$name%");
    $searchQuery -> execute();
    $searchResultsCnt = $searchQuery -> rowCount();
    echo '【' . $name . '】の検索結果：' . $searchResultsCnt . '件';
    echo '<hr>';
    $nameData = $searchQuery -> fetchall(PDO::FETCH_ASSOC);// 検索にヒットしたデータを格納
    // 登録者を表示
    foreach ($nameData as $value) {
      echo '<hr>'; // 1人分で区切る
      foreach ($value as $keyData => $valueData) {
        echo '【' . $keyData . '】' . $valueData;
      }
    }
  } else { // ポストの中身がなければ空にする
    $_POST['name'] = null;
  }
  $pdoObj = null;

?>
</body>
</html>