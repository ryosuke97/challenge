<?php
    date_default_timezone_set('Asia/Tokyo');

    require_once 'const.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo REDIRECT ?></title>
</head>
<body>
    <?php 
    if(isset($_GET['mode']) && $_GET['mode']=='timeout'){
    ?>
        <h1>セッション有効切れ</h1>
        セッション有効期限切れです。3秒後にログイン画面に移動します
    <?php 
    }else{
    ?>
        <h1>不正なアクセス</h1>
        不正なアクセスです。3秒後にログイン画面に移動します
    <?php
    }
    ?>
    <meta http-equiv="refresh" content="3;URL='.TOP.'">
</body>
</html>