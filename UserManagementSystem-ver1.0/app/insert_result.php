<?php
require_once '../common/defineUtil.php'; // defineUtil.phpの読み込み
require_once '../common/scriptUtil.php'; // scriptUtil.phpの読み込み
require_once '../common/dbaccesUtil.php'; // dbaccesUtil.phpの読み込み
// 課題5 直リンク対策としてpostの値を受けとっていなければトップページへ飛ぶ
if (empty($_POST['permit'])) {
    jump_to_top();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php
    session_start();
    $name     = $_SESSION['name'];
    $birthday = $_SESSION['birthday'];
    $tell     = $_SESSION['tell'];
    $comment  = $_SESSION['comment'];
    $type     = $_SESSION['type'];
    // 登録結果画面で数値でなく種別名で表示されるように変数に格納する
    switch ($_SESSION['type']) {
          case 1:
              $display_type = 'エンジニア';
              break;
          case 2:
              $display_type = '営業';
              break;
          case 3:
              $display_type = 'その他';
              break;
    }
    ?>

    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php echo $birthday;?><br>
    種別:<?php echo $display_type?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br>
    以上の内容で登録しました。<br>

    <!-- 課題1 トップページへの戻るリンクの実装 -->
    <?php echo return_top(); // トップへ戻るリンクを設置 ?>

</body>

</html>
