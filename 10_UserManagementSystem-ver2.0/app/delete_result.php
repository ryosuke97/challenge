<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除結果画面</title>
</head>
<body>
    <?php
    $id = isset($_POST['userid']) ? $_POST['userid'] : null; // useridを格納
    // 登録者のレコードを連想配列として受け取り格納
    $result = delete_profile($id);
    //エラーが発生しなければ表示を行う
    if(!isset($result)){
    ?>
    <h1>削除確認</h1>
    削除しました。<br>
    <?php
    }else{ // エラーの場合そのエラー文を表示する
        echo 'データの削除に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top();
    ?>
   </body>
</body>
</html>