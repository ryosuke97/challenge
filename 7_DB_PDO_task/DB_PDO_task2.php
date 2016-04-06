<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題2</title>
</head>
<body>

<h2>課題2<span style="font-weight: normal; font-size: 20px;"><br> 前回の課題1で作成したテーブルに自由なメンバー情報を格納する処理を構築してください
</span></h2>
<?php
  try{
    $pdo_object = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
    var_dump($pdo_object);
    // 自由なメンバー情報を格納する
    $insertMemberInfo = "insert into profiles(profilesID, name, tell, age, birthday) values(:profilesID, :name, :tell, :age, :birthday)";
    // sql文を実行＆結果を受け取る変数
    $queryMemberInfo = $pdo_object -> prepare($insertMemberInfo);

    $queryMemberInfo -> bindValue(':profilesID', 7);
    $queryMemberInfo -> bindValue(':name', '田中角栄');
    $queryMemberInfo -> bindValue(':tell', '080-9999-9999');
    $queryMemberInfo -> bindValue(':age', 50);
    $queryMemberInfo -> bindValue(':birthday', '1950-10-10');
    $ans = $queryMemberInfo -> execute();
    var_dump($ans);
  } catch(PDOException $Exception) {
    die('接続に失敗しました：' . $Exception -> getMessage());
  }

  $pdo_object = null;

?>
</body>
</html>