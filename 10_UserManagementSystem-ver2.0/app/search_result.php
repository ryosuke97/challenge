<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
session_start();

$mode = isset($_GET['mode']) ? $_GET['mode'] : null;     // modeの値を格納
$id   = isset($_GET['userid']) ? $_GET['userid'] : null; // useridの値を格納

// $idと$modeの値によって不正アクセスの判別
if($mode != 'SEARCH_RESULT' && $id == null){
    echo 'アクセスルートが不正です。もう一度トップページからやり直してください';
    echo '<br><br>';
}else{
    // SEARCH_RESULTが送られてきた場合はゲットの値をセッションに格納...todo 関数化
    if ($mode == 'SEARCH_RESULT') {
        $name = bind_g2s('name');
        $year = bind_g2s('year');
        $type = bind_g2s('type');

    // BK_SEARCH_RESULTが送られてきた(この画面に戻ってきた)場合はセッションの値をそのまま保持する
    }elseif ($mode == 'BK_SEARCH_RESULT') {
        $name = $_SESSION['name'];
        $year = $_SESSION['year'];
        $type = $_SESSION['type'];
    }
?>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
    <meta charset="UTF-8">
          <title>検索結果画面</title>
    </head>
        <body>
            <h1>検索結果</h1>
            <table border=1>
                <tr>
                    <th>名前</th>
                    <th>生年</th>
                    <th>種別</th>
                    <th>登録日時</th>
                </tr>
            <?php
            // $resultの初期化として空にする
            $result = null;
            // 名前も年も種別の値もなければDBに登録されたすべてのレコードを連想配列として受け取る
            if(empty($name) && empty($year) && empty($type)){
                $result = search_all_profiles();// 修正 スペル「serch_all_profiles()」→「search_all_profiles()」
            }else{ // 名前か年、種別による複合検索をかけ、該当するレコードを連想配列として受け取る
                $result = search_profiles($name, $year, $type); // 修正 スペル「serch_profiles」→「search_profiles()」
            }
            // 連想配列の中身をすべて取り出し表示の準備
            foreach($result as $value){
            ?>
                <tr>
                    <!-- 名前をクリックするとそのuseridを添付し遷移先でその登録者の詳細を表示する -->
                    <td><a href="<?php echo RESULT_DETAIL ?>?userid=<?php echo $value['userid']; ?>"><?php echo $value['name']; ?></a></td>
                    <td><?php echo $value['birthday']; ?></td>
                    <td><?php echo ex_typenum($value['type']); ?></td>
                    <td><?php echo date('Y年n月j日　G時i分s秒', strtotime($value['newdate']));?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <br><br>

            <!-- 修正 検索画面へ戻るリンク -->
            <form action="<?php echo SEARCH;?>" method="POST">
                <input type="hidden" name="mode" value="REINPUT">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="year" value="<?php echo $year; ?>">
                <input type="hidden" name="type" value="<?php echo $type; ?>">
                <input type="submit" value="検索画面へ戻る">
            </form>
            <br><br>
<?php } ?>
        <!-- 修正 トップページへのリンク-->
        <?php echo return_top(); ?>
</body>
</html>
