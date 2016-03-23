<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPのデータ操作課題1</title>
</head>
<body>
<!-- 以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述してください。-->
<!--・名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス-->
  <form action="php_dataOperation_task2.php" method="post">
    <p>名前：<input type="text" name="name"></p>
    <p>性別：男性<input type="radio" value="male" name="gender">女性<input type="radio" value="female" name="gender"></p>
    <p>趣味：<br><textarea name="hobby" cols="40" rows="3"></textarea></p>
    <input type="submit" value="送信">
  </form>
</body>
</html>