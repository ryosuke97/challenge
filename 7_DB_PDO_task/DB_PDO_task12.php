<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPからのDB操作課題12</title>
</head>
<body>

<h2>課題12<span style="font-weight: normal; font-size: 20px;"><br> 検索用のフォームを用意し、名前、年齢、誕生日を使った複合検索ができるようにしてください。
</span></h2><hr>
<form action="DB_PDO_task12.php" method="post" name="search">
  <p>
    name：<input type="text" name="name">
  </p>
  <p>
    age：<input type="text" name="age">
  </p>
  <p>
    birthday：<select name="bd">
      <option value="">選択してください</option>
    <?php
      for ($i=1960; $i <= 2000; $i++) {
       echo '<option value="' . $i . '">' . $i . '</option>';
      }
       ?>
    </select>
  </p>
  <p>
    <input type="submit" value="検索">
  </p>
</form>
<hr>
<?php
  if (!empty($_POST['name'])) {
    $name = "%" . $_POST['name'] . "%";
  } else {
    $name = null;
  }
  if (!empty($_POST['age'])) {
    $age = $_POST['age'];
  } else {
    $age = null;
  }
  if (!empty($_POST['bd'])) {
    $bd = $_POST['bd'];
  } else {
    $bd = null;
  }

  $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
  // 更新のsql文
  $searchSql = 'select * from profiles where name like :name or age like :age or birthday like :bd';
  $searchQuery = $pdoObj -> prepare($searchSql);
  $searchQuery -> bindValue(':name', $name);
  $searchQuery -> bindValue(':age', $age);
  $searchQuery -> bindValue(':bd', $bd);
  $searchQuery -> execute();
  $searchResultsCnt = $searchQuery -> rowCount();
  echo '検索結果：' . $searchResultsCnt . '件'. '<br>';
  $searchData = $searchQuery -> fetchall(PDO::FETCH_ASSOC);
  foreach ($searchData as $valueData) {
    echo '<hr><br>';
    foreach ($valueData as $key => $value) {
      echo '【' . $key . '】' . $value;
    }
  }
  $pdoObj = null;

?>
</body>
</html>