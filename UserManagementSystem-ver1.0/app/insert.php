<?php
require_once '../common/defineUtil.php'; // defineUtil.phpの読み込み
require_once '../common/scriptUtil.php'; // scriptUtil.phpの読み込み

session_start();
// sessionに前回の入力内容があれば格納(課題4)
$recName     = isset($_SESSION['name']) ? $_SESSION['name'] : null;
$recBirthday = isset($_SESSION['birthday']) ? $_SESSION['birthday'] : null;
$recYear     = isset($_SESSION['year']) ? $_SESSION['year'] : null;
$recMonth    = isset($_SESSION['month']) ? $_SESSION['month'] : null;
$recDay      = isset($_SESSION['day']) ? $_SESSION['day'] : null;
$recType     = isset($_SESSION['type']) ? $_SESSION['type'] : null;
$recTell     = isset($_SESSION['tell']) ? $_SESSION['tell'] : null;
$recComment  = isset($_SESSION['comment']) ? $_SESSION['comment'] : null;
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
    <input type="text" name="name" value="<?php echo $recName;?>">
    <br><br>

    生年月日:
    <select name="year">
        <option value="----">----</option>
        <?php
            // 「年」に値が入っていればその年を表示(課題4)
            if ($recYear != null) {
                echo '<option selected value="' . $recYear . '">' . $recYear . '</option>';
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
            if ($recMonth != null) {
                echo '<option selected value="' . $recMonth . '">' . $recMonth . '</option>';
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
            if ($recDay != null) {
                echo '<option selected value="' . $recDay . '">' . $recDay . '</option>';
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
    <!-- $recTypeと合致しているボタンにチェックを入れる(課題4) -->
    <input type="radio" name="type" value="1" <?php if ($recType == 1) {
        echo 'checked';
    } ?>>エンジニア<br>
    <input type="radio" name="type" value="2" <?php if ($recType == 2) {
        echo 'checked';
    } ?>>営業<br>
    <input type="radio" name="type" value="3" <?php if ($recType == 3) {
        echo 'checked';
    } ?>>その他<br>
    <br>

    電話番号:
    <!-- $recTellの値を表示(課題4) -->
    <input type="text" name="tell" value="<?php echo $recTell;?>">
    <br><br>

    自己紹介文
    <br>
    <!-- $recCommentの値を表示(課題4) -->
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $recComment; ?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>

    <!-- 課題1 トップページへの戻るリンクの実装 -->
    <?php echo return_top(); // トップへ戻るリンクを設置?>
</body>
</html>