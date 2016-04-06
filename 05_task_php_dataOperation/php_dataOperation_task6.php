<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>アップロードPHP</title>
</head>
<body>
<?php
  $fileName = 'test';
  move_uploaded_file($_FILES['upfile']['tmp_name'], $fileName);
  //  ファイルの読み込み
  $fp = fopen($fileName, 'r');
  $showFile = fgets($fp);
  echo $showFile;
  fclose($fp);
?>
</body>
</html>