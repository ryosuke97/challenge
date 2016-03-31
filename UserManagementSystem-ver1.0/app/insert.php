<?php
require_once '../common/defineUtil.php'; // defineUtil.phpの読み込み
require_once '../common/scriptUtil.php'; // scriptUtil.phpの読み込み

session_start();
// sessionに前回の入力内容があれば格納(課題4)
$rec_name    = isset($_SESSION['name']) ? $_SESSION['name'] : null;
$rec_year    = isset($_SESSION['year']) ? $_SESSION['year'] : null;
$rec_month   = isset($_SESSION['month']) ? $_SESSION['month'] : null;
$rec_day     = isset($_SESSION['day']) ? $_SESSION['day'] : null;
$rec_type    = isset($_SESSION['type']) ? $_SESSION['type'] : null;
$rec_tell    = isset($_SESSION['tell']) ? $_SESSION['tell'] : null;
$rec_comment = isset($_SESSION['comment']) ? $_SESSION['comment'] : null;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" name="name" value="<?php echo $rec_name;?>">
    <br><br>

    生年月日:
    <select name="year">
        <option value="----">----</option>
        <?php
            // 「年」に値が入っていればその年を表示(課題4)
            if ($rec_year != null) {
                echo '<option selected value="' . $rec_year . '">' . $rec_year . '</option>';
            }
         ?>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
    </select>年

    <select name="month">
        <option value="--">--</option>
        <?php
            // 「月」に値が入っていればその月を表示(課題4)
            if ($rec_month != null) {
                echo '<option selected value="' . $rec_month . '">' . $rec_month . '</option>';
            }
         ?>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ;?>
    </select>月

    <select name="day">
        <option value="--">--</option>
        <?php
            // 「日」に値が入っていればその日を表示(課題4)
            if ($rec_day != null) {
                echo '<option selected value="' . $rec_day . '">' . $rec_day . '</option>';
            }
         ?>
        <?php
            for($i = 1; $i<=31; $i++){ ?>
            <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <!-- $rec_typeと合致しているボタンにチェックを入れる(課題4) -->
    <input type="radio" name="type" value="1" <?php if ($rec_type == 1) {
        echo 'checked';
    } ?>>エンジニア<br>
    <input type="radio" name="type" value="2" <?php if ($rec_type == 2) {
        echo 'checked';
    } ?>>営業<br>
    <input type="radio" name="type" value="3" <?php if ($rec_type == 3) {
        echo 'checked';
    } ?>>その他<br>
    <br>

    電話番号:
    <!-- $rec_tellの値を表示(課題4) -->
    <input type="text" name="tell" value="<?php echo $rec_tell;?>">
    <br><br>

    自己紹介文
    <br>
    <!-- $rec_commentの値を表示(課題4) -->
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $rec_comment; ?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>

    <!-- 課題1 トップページへの戻るリンクの実装 -->
    <?php echo return_top(); // トップへ戻るリンクを設置?>
</body>
</html>