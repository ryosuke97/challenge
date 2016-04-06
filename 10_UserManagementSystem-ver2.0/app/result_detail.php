<?php
    require_once '../common/defineUtil.php';
    require_once '../common/scriptUtil.php';
    require_once '../common/dbaccesUtil.php';
    session_start();

    $mode = isset($_POST['mode']) ? $_POST['mode'] : null;   // modeの情報を格納
    $id   = isset($_GET['userid']) ? $_GET['userid'] : null; // useridを格納


    // idとmodeの値によって不正アクセスの判別
    if($mode != 'RESULT_DETAIL' && $id == null){
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください';
        echo '<br><br>';
    // RESULT_DETAILが送られてきた場合はゲットの値をセッションに格納 ! toDo 関数化 !
    }else{

    ?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
    <meta charset="UTF-8">
          <title>ユーザー情報詳細画面</title>
    </head>
    <body>
        <?php
        // useridからレコードの情報を取得し配列に格納する
        $result = profile_detail($id);
        //エラーが発生しなければ表示を行う
        if(is_array($result)){
            $d_name     = $result[0]['name'];
            $d_birthday = $result[0]['birthday'];
            $d_type     = $result[0]['type'];
            $d_tell     = $result[0]['tell'];
            $d_comment  = $result[0]['comment'];
            $d_newdate  = $result[0]['newdate'];
        ?>

        <h1>詳細情報</h1>
        名前:<?php    echo $d_name;?><br>
        生年月日:<?php echo $d_birthday;?><br>
        種別:<?php    echo ex_typenum($d_type);?><br>
        電話番号:<?php echo $d_tell;?><br>
        自己紹介:<?php echo $d_comment;?><br>
        登録日時:<?php echo date('Y年n月j日　G時i分s秒', strtotime($d_newdate)); ?><br>

        <form action="<?php echo UPDATE; ?>" method="POST">
            <!-- 修正 hiddenでuseridを更新ページへ送る -->
            <input type="hidden" name="userid" value="<?php echo $id; ?>">
            <input type="submit" name="update" value="変更"style="width:100px">
        </form>
        <form action="<?php echo DELETE; ?>" method="GET">
            <input type="hidden" name="userid" value="<?php echo $id; ?>">
            <!-- 修正 削除画面への不正アクセス対策としてhiddenでmodeの値を送信 -->
            <input type="hidden" name="mode" value="DELETE">
            <input type="submit" name="delete" value="削除"style="width:100px">
        </form>
        <!-- 修正 search_resultへ戻るボタンの追加 -->
        <form action="<?php echo SEARCH_RESULT; ?>" method="GET">
            <input type="hidden" name="userid" value="<?php echo $id; ?>">
            <input type="hidden" name="mode" value="BK_SEARCH_RESULT">
            <input type="submit" name="NO" value="検索結果画面に戻る"style="width:120px">
        </form>
        <?php
        }else{ // エラーの場合そのエラー文を表示する
            echo 'データの検索に失敗しました。次記のエラーにより処理を中断します:'.$result;
        }
    }
    echo return_top();?>
</body>
</html>
