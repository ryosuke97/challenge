<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
session_start();

// useridを格納
$id = isset($_POST['userid']) ? $_POST['userid'] : null;
// modeの情報を格納
$mode = isset($_POST['mode']) ? $_POST['mode'] : null;

// 不正アクセス対策
if($mode != "UPDATE" && $mode != "REINPUT" && $id == null){
    echo 'アクセスルートが不正です。もう一度トップページからやり直してください';
    echo '<br><br>';
}else{
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>変更入力画面</title>
</head>
<body>
<?php
    $result = profile_detail($id);
    // 更新前の情報を変数に格納
    $ini_name     = $result[0]['name'];
    $ini_birthday = $result[0]['birthday'];
    $ini_year     = explode('-', $ini_birthday)[0];
    $ini_month    = explode('-', $ini_birthday)[1];
    $ini_day      = explode('-', $ini_birthday)[2];
    $ini_type     = $result[0]['type'];
    $ini_tell     = $result[0]['tell'];
    $ini_comment  = $result[0]['comment'];

    // 修正 更新後の値をセッションに格納
    $ud_name = form_value('ud_name');
    $ud_year = form_value('ud_year');
    $ud_month = form_value('ud_month');
    $ud_day = form_value('ud_day');
    $ud_type = form_value('ud_type');
    $ud_tell = form_value('ud_tell');
    $ud_comment = form_value('ud_comment');

    //セッションの中身を変数に格納する。
    $ud_name = isset($ud_name) ? $ud_name : $ini_name;
    $ud_year = isset($ud_year)? $ud_year : $ini_year;
    $ud_month = isset($ud_month) ? $ud_month : $ini_month;
    $ud_day = isset($ud_day) ? $ud_day : $ini_day;
    $ud_type = isset($ud_type) ? $ud_type : $ini_type;
    $ud_tell = isset($ud_tell) ? $ud_tell : $ini_tell;
    $ud_comment = isset($ud_comment) ? $ud_comment : $ini_comment;
?>

    <!-- 修正 クエリストリングでuseridもつけて送る -->
    <form action="<?php echo UPDATE_RESULT ?>?userid=<?php echo $id; ?>" method="POST">

        名前:
        <input type="text" name="ud_name" value="<?php echo $ud_name; ?>">
        <br><br>

        生年月日:　
        <select name="ud_year">
            <option value="">----</option>
            <?php
            for($i=1950; $i<=2010; $i++){ ?>
            <option value="<?php echo $i;?>" <?php if ($i == $ud_year) {
                echo 'selected';
            } // 修正 「checked」→「selected」 ?>><?php echo $i ;?></option>
            <?php } ?>
        </select>年

        <select name="ud_month">
            <option value="">--</option>
            <?php
            for($i = 1; $i<=12; $i++){?>
            <option value="<?php echo $i;?>" <?php if ($i == $ud_month) {
                echo 'selected';
            } // 修正 「checked」→「selected」 ?>><?php echo $i;?></option>
            <?php } ;?>
        </select>月

        <select name="ud_day">
            <option value="">--</option>
            <?php
            for($i = 1; $i<=31; $i++){ ?>
            <option value="<?php echo $i; ?>" <?php if ($i == $ud_day) {
                echo 'selected';
            } // 修正 「checked」→「selected」 ?>><?php echo $i;?></option>
            <?php } ?>
        </select>日
        <br><br>

        種別:
        <br>
        <?php
        for($i = 1; $i<=3; $i++){ ?>
        <input type="radio" name="ud_type" value="<?php echo $i; ?>"<?php if($i==$ud_type){echo "checked";}?>><?php echo ex_typenum($i);?><br>
        <?php } ?>
        <br>

        電話番号:
        <input type="text" name="ud_tell" value="<?php echo $ud_tell; ?>">
        <br><br>

        自己紹介文
        <br>
        <textarea name="ud_comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $ud_comment; ?></textarea><br><br>
        <!-- 更新前の値を送信する -->
        <input type="hidden" name="userid" value="<?php echo $id; ?>">
        <input type="hidden" name="name" value="<?php echo $ini_name; ?>">
        <input type="hidden" name="birthday" value="<?php echo $ini_birthday; ?>">
        <input type="hidden" name="type" value="<?php echo $ini_type; ?>">
        <input type="hidden" name="tell" value="<?php echo $ini_tell; ?>">
        <input type="hidden" name="comment" value="<?php echo $ini_comment; ?>">
        <input type="hidden" name="mode" value="UD_RESULT">
        <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">
    </form>
    <form action="<?php echo RESULT_DETAIL; ?>" method="POST">
        <!-- 修正 詳細画面への不正アクセス対策としてhiddenでmodeの値を送信 -->
        <input type="hidden" name="mode" value="RESULT_DETAIL">
        <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
    </form>
    <?php } ?>
    <?php echo return_top(); ?>
</body>

</html>
