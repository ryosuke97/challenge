<?php
require_once '../common/defineUtil.php'; // defineUtil.phpの読み込み
require_once '../common/scriptUtil.php'; // scriptUtil.phpの読み込み
require_once '../common/dbaccesUtil.php'; // scriptUtil.phpの読み込み

session_start();
    // insert.phpからのpostを格納
    $post_name     = $_POST['name'];
    // date型にするために1桁の月日を2桁にフォーマットしてから格納
    $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
    $post_year     = $_POST['year'];
    $post_month    = $_POST['month'];
    $post_day      = $_POST['day'];
    $post_type     = $_POST['type'];
    $post_tell     = $_POST['tell'];
    $post_comment  = $_POST['comment'];

    // セッション情報に格納
    $_SESSION['name']     = $post_name;
    $_SESSION['birthday'] = $post_birthday;
    $_SESSION['type']     = $post_type;
    $_SESSION['tell']     = $post_tell;
    $_SESSION['comment']  = $post_comment;
    $_SESSION['year']     = $post_year;
    $_SESSION['month']    = $post_month;
    $_SESSION['day']      = $post_day;

    // 登録結果画面で数値でなく種別名で表示されるように変数に格納する
    $display_type = change_num_to_section();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    // 課題2 生年月日の入力がされていない時にも正しく判定されるように修正
    // 名前,種別,電話番号,コメントが空でなく、年月日それぞれが'----','--'でないときは登録確認画面へ
    if(!empty($_POST['name']) && $_POST['year'] != '----' && $_POST['month'] != '--' && $_POST['day'] != '--' && !empty($_POST['type']) && !empty($_POST['tell']) && !empty($_POST['comment'])){
    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php    echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php    echo $display_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="submit" name="yes" value="はい">
          <!-- 課題5 アクセス権のある値を送信 -->
          <input type="hidden" name="permit" value="permit">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>

    <?php } else { ?>
        <h1>以下の入力項目が不完全です</h1><br>
        <p style="color:#f66; font-size:20px;">
            <?php
            // 課題3 どの項目が不完全なのかをわかるようにしなさい
            // postが空のものを表示する
            if (empty($_POST['name'])) {echo '・名前<br><br>';}
            if (empty($_POST['type'])) {echo '・種別<br><br>';}
            if (empty($_POST['tell'])) {echo '・電話番号<br><br>';}
            if (empty($_POST['comment'])) {echo '・自己紹介文<br><br>';}
            if ($_POST['year']=='----' || $_POST['month']=='--' || $_POST['day']=='--')  {echo '・生年月日<br><br>';}
            ?>
        </p>
        再度入力を行ってください
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
    <br>
    <!-- 課題1 トップページへの戻るリンクの実装 -->
    <?php echo return_top(); // トップへ戻るリンクを設置?>
</body>
</html>
