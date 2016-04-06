<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題11</title>
</head>
<body>

<h2>課題11<span style="font-weight: normal; font-size: 20px;"><br> profileIDで指定したレコードの、profileID以外の要素をすべて上書きできるフォームを作成してください
</span></h2><hr>
<form action="DB_PDO_task11.php" method="post" name="updateData">
  <p>
    ID：<input type="text" name="id">
  </p>
  <p>
    name：<input type="text" name="name">
  </p>
  <p>
    tell：<input type="text" name="tell">
  </p>
  <p>
    age：<input type="text" name="age">
  </p>
  <p>
    birthday：<input type="text" name="bd">
  </p>
  <p>
    <input type="submit" value="データを更新">
  </p>
</form>
<hr>
<?php

  // 接続時のエラーを確認
  try {
    $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
    //$pdoObj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $Exception){
    die('エラー：' . $Exception -> getMessage());
  }
  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['tell']) && isset($_POST['age']) && isset($_POST['bd'])) { // ポストの中身があるときは各変数に値を代入して以降の処理で使用する
    $id = $_POST['id'];
    $name = $_POST['name'];
    $tell = $_POST['tell'];
    $age = $_POST['age'];
    $bd = $_POST['bd'];
    // 更新のsql文
    $updateSql = 'update profiles set name = :name, tell = :tell, age = :age, bd = :bd where profilesID = :id';
    $updateQuery = $pdoObj -> prepare($updateSql);
    $updateQuery -> bindValue(':id', $id);
    $updateQuery -> bindValue(':name', $name);
    $updateQuery -> bindValue(':tell', $tell);
    $updateQuery -> bindValue(':age', $age);
    $updateQuery -> bindValue(':bd', $bd);
    $updateQuery -> execute();
    echo 'データ更新の完了';
  } else { // ポストの中身がなければ空にする
    $_POST['id'] = null;
  }
  $pdoObj = null;

?>
</body>
</html>