<!-- todo 検索における有効期限時間の実装 -->
<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
session_start();

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
        <!-- 修正 フォームの再入力時に、すでに$_SESSION['name']に対応した値があるときはその値を表示しておく -->
        <input type="text" name="name" value="<?php echo form_value('name'); ?>">
        <br><br>

        生年:
        <br>
        <select name="year">
            <option value="">----</option>
            <?php
            for($i=1950; $i<=2010; $i++){ ?>
            <!-- 修正 フォームの再入力時に、すでに$_SESSION['year']に対応した値があるときはその値表示しておく -->
            <option value="<?php echo $i;?>" <?php if ($i == form_value('year')) {
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
        // 修正 フォームの再入力時に、すでに$_SESSION['type']に対応した値があるときはその値を表示しておく
        if ($i == form_value('type')) {echo 'checked';}?>> <?php echo ex_typenum($i);?><br>
        <?php } ?>
        <!-- 修正 検索結果画面への不正アクセス対策としてhiddenでmodeの値を送信 -->
        <input type="hidden" name="mode" value="SEARCH_RESULT">
        <input type="submit" name="btnSubmit" value="検索">
    </form>
    <br><br>

    <!-- 修正 トップページへのリンク-->
    <?php echo return_top(); ?>
  </body>
</html>
