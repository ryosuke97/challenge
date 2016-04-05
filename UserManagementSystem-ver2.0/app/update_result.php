<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
session_start();
// 修正 前ページからのアクセスか判定
$mode = ($_POST['mode']) ? $_POST['mode'] : null;
if ($mode != "UD_RESULT") {
    echo 'アクセスルートが不正です。もう一度トップページからやり直してください。';
    echo '<br><br>';
}else{
    $id = $_GET['userid'];

    //更新前の値を格納
    $name     = $_POST['name'];
    $birthday = $_POST['birthday'];
    $type     = $_POST['type'];
    $tell     = $_POST['tell'];
    $comment  = $_POST['comment'];

    // 更新後の値を格納
    $ud_name     = bind_p2s('ud_name');
    $ud_birthday = bind_p2s('ud_birthday');
    $ud_year     = bind_p2s('ud_year');
    $ud_month    = bind_p2s('ud_month');
    $ud_day      = bind_p2s('ud_day');
    $ud_type     = bind_p2s('ud_type');
    $ud_tell     = bind_p2s('ud_tell');
    $ud_comment  = bind_p2s('ud_comment');

    // 「月」「日」を2桁に設定して格納
    $ud_birthday = $ud_year.'-'.sprintf('%02d',$ud_month).'-'.sprintf('%02d',$ud_day);

    ?>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
    <meta charset="UTF-8">
          <title>更新結果画面</title>
    </head>
      <body>
    <?php 
    //ポストの存在チェックとセッションに値を格納しつつ、連想配列にポストされた値を格納
    $ud_confirm_values = array(
                            'ud_name' => $ud_name,
                            'ud_year' => $ud_year,
                            'ud_month' => $ud_month,
                            'ud_day' => $ud_day,
                            'ud_type' => $ud_type,
                            'ud_tell' => $ud_tell,
                            'ud_comment' => $ud_comment);

    if(in_array(null,$ud_confirm_values, true)){
        ?>
        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください<br>
        <h3>不完全な項目</h3>
        <?php
        //連想配列内の未入力項目を検出して表示
        foreach ($ud_confirm_values as $key => $value){
            if($value == null){
                if($key == 'ud_name'){
                    echo '名前';
                }
                if($key == 'ud_year'){
                    echo '年';
                }
                if($key == 'ud_month'){
                    echo '月';
                }
                if($key == 'ud_day'){
                    echo '日';
                }
                if($key == 'ud_type'){
                    echo '種別';
                }
                if($key == 'ud_tell'){
                    echo '電話番号';
                }
                if($key == 'ud_comment'){
                    echo '自己紹介';
                }
                //if($key == 'day_chk'){
                    //break;
                //}
                echo 'が未記入です<br>';
            }
        }

        ?>
        <form action="<?php echo UPDATE; ?>?id=<?php echo $id ?>" method="POST">
            <!-- 修正 登録画面への不正アクセス対策としてhiddenでmodeの値を送信 -->
            <input type="hidden" name="mode" value="REINPUT" >
            <input type="submit" name="no" value="登録画面に戻る">
        </form><br><br>
        <?php
    }
    else{
        $result = update_profile($id, $ud_name, $ud_birthday, $ud_type, $ud_tell, $ud_comment);
        //エラーが発生しなければ表示を行う
        if(!isset($result)){
            ?>
            <h1>更新確認</h1>
            <?php
            // それぞれの項目で更新前と更新後の値が異なる場合は表示する
            if($name != $ud_name){?>
                名前:<?php echo $name; ?> → <?php echo $ud_name; ?><br>
            <?php
            }
            if($birthday != $ud_birthday){ ?>
                生年月日:<?php echo $birthday; ?> → <?php echo $ud_birthday; ?><br>
            <?php }
            if($type != $ud_type){ ?>
                種別:<?php echo ex_typenum($type); ?> → <?php echo ex_typenum($ud_type); ?><br>
            <?php }
            if($tell != $ud_tell){ ?>
                電話番号:<?php echo $tell; ?> → <?php echo $ud_tell; ?><br>
            <?php }
            if($comment != $ud_comment){ ?>
                自己紹介:<?php echo $comment; ?> → <?php echo $ud_comment; ?><br><br>
            <?php } ?>
            以上の内容で更新しました。<br>
            <?php
        }else{
            echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
        }
    }
}
    echo return_top();
    ?>
  </body>
</html>
