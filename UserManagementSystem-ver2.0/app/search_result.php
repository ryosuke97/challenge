<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
session_start();

// modeの情報を格納
$mode = isset($_GET['mode']) ? $_GET['mode'] : "";
$id = isset($_GET['userid']) ? $_GET['userid'] : "";

// 不正アクセス対策
if($mode != 'SEARCH_RESULT' && $id == null){
    echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
    echo '<br><br>';
}else{
    // SEARCH_RESULTが送られてきた場合はゲットの値をセッションに格納
    if ($mode == 'SEARCH_RESULT') {
        $_SESSION['name'] = $_GET['name'];
        $name = $_SESSION['name'];
        $_SESSION['year'] = $_GET['year'];
        $year = $_GET['year'];
        $_SESSION['type'] = $_GET['type'];
        $type = $_GET['type'];
        echo $name;
    // BK_SEARCH_RESULTが送られてきた(戻ってきた)場合はセッションの値をそのまま保持
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
            $result = null;
            if(empty($name) && empty($year) && empty($type)){
                $result = search_all_profiles();// 修正 スペル「serch_all_profiles()」→「search_all_profiles()」
            }else{
                $result = search_profiles($name, $year, $type); // 修正 スペル「serch_profiles」→「search_profiles()」
            }
            foreach($result as $value){
            ?>
                <tr>
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

            <!-- 修正 ユーザー情報検索画面へ戻るリンク -->
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
