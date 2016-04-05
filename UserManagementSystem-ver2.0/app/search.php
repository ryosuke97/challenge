<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';

session_start();

// 再入力時に前回の内容を保持するためにセッションに格納
if ($_POST['mode'] == 'REINPUT') {
    $_SESSION['name'] = !empty($_POST['name']) ? $_POST['name'] : null;
    $_SESSION['year'] = !empty($_POST['year']) ? $_POST['year'] : null;
    $_SESSION['type'] = !empty($_POST['type']) ? $_POST['type'] : null;
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報検索画面</title>
</head>
  <body>
    <!-- 修正(追記)見出しがないため<h1>を追加 -->
    <h1>ユーザー情報検索画面</h1>
    <form action="<?php echo SEARCH_RESULT ?>" method="GET">

        名前:
        <br>
        <!-- 修正 $_SESSION['name']に値があれば値を残して表示しておく -->
        <input type="text" name="name" value="<?php echo form_value('name'); ?>">
        <br><br>

        生年:
        <br>
        <select name="year">
            <option value="">----</option>
            <?php
            for($i=1950; $i<=2010; $i++){ ?>
            <!-- 修正 $_SESSION['year']に値があればその数値を残して表示しておく -->
            <option value="<?php echo $i;?> " <?php if ($i == form_value('year')) {
                  echo "selected";
              }  ?>><?php echo $i;?></option>
            <?php } ?>
        </select>年生まれ
        <br><br>

        種別:
        <br>
        <!-- 修正 種別を指定しない検索ができるように「指定しない」のボタンを追加 -->
        <input type="radio" name="type" value="" checked>指定しない<br>
        <?php
        for($i = 1; $i<=3; $i++){ ?>
        <input type="radio" name="type" value="<?php echo $i;?>" <?php
        // 修正 $_SESSION['type']に値があればその数値を残して表示しておく
        if ($i == form_value('type')) {echo 'checked';}?>> <?php echo ex_typenum($i);?><br>
        <?php } ?>
        <br>
        <input type="hidden" name="mode" value="SEARCH_RESULT">
        <input type="submit" name="btnSubmit" value="検索">
    </form>

    <!-- 修正 トップページへのリンク-->
    <?php echo return_top(); ?>
  </body>
</html>
