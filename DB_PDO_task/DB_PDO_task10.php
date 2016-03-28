<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題10</title>
</head>
<body>

<h2>課題10<span style="font-weight: normal; font-size: 20px;"><br> profileIDで指定したレコードを削除できるフォームを作成してください
</span></h2><hr>
<form action="DB_PDO_task10.php" method="post" name="insertData">
  <p>
    ID：<input type="text" name="id">
  </p>
  <p>
    <input type="submit" value="削除">
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
  if (isset($_POST['id'])) { // ポストの中身があるときは各変数に値を代入して以降の処理で使用する
    $id = $_POST['id'];
    // 削除のsql文
    $dltSql = 'delete from profiles where profilesID = :id';
    $dltQuery = $pdoObj -> prepare($dltSql);
    $dltQuery -> bindValue(':id', $id);
    $dltQuery -> execute();
    echo 'データ削除の完了';
  } else { // ポストの中身がなければ空にする
    $_POST['id'] = null;
  }
  $pdoObj = null;

?>
</body>
</html>