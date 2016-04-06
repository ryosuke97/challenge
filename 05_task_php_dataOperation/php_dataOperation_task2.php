<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題2</title>
</head>
<body>
  <h2>課題2<span style="font-weight: normal; font-size: 20px;"> １で作成したHTMLの入力データを取得し、画面に表示する</span></h2>

<?php

  $br = '<br>';
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $hobby = $_POST['hobby'];

  echo $name . $br;
  echo $gender . $br;
  echo $hobby;

?>

</body>
</html>