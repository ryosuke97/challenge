<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題9</title>
</head>
<body>

<h2>課題9<span style="font-weight: normal; font-size: 20px;"><br> フォームからデータを挿入できる処理を構築してください。
</span></h2><hr>
<form action="DB_PDO_task9.php" method="post" name="insertData">
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
    <input type="submit" value="データの挿入">
  </p>
</form>
<hr>
<?php

  // 接続時のエラーを確認
  try {
    $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
    $pdoObj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $Exception){
    die('エラー：' . $Exception -> getMessage());
  }
  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['tell']) && isset($_POST['age']) && isset($_POST['bd'])) { // ポストの中身があるときは各変数に値を代入して以降の処理で使用する
    $id = $_POST['id'];
    $name = $_POST['name'];
    $tell = $_POST['tell'];
    $age = $_POST['age'];
    $bd = $_POST['bd'];
    var_dump($_POST);
    // 挿入のsql文
    $insertSql = 'insert into profiles(profilesID, name, tell, age, birthday) values(:profilesID, :name, :tell, :age, :birthday)';
    $insertQuery = $pdoObj -> prepare($insertSql);
    $insertQuery -> bindValue(':profilesID', $id);
    $insertQuery -> bindValue(':name', $name);
    $insertQuery -> bindValue(':tell', $tell);
    $insertQuery -> bindValue(':age', $age);
    $insertQuery -> bindValue(':birthday', $bd);
    try{
    $insertQuery -> execute();
  }catch(PDOException $Exception){
    die('エラー：' . $Exception -> getMessage());
  }
    echo 'データ挿入の完了';
  } else { // ポストの中身がなければ空にする
    $_POST['id'] = $_POST['name'] = $_POST['tell'] = $_POST['age'] = $_POST['bd'] =  null;
  }

?>
</body>
</html>