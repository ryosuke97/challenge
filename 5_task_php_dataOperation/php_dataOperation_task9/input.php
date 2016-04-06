<?php
    date_default_timezone_set('Asia/Tokyo');

    require_once 'function.php';
    require_once 'const.php';

    session_chk();

    if(!isset($_COOKIE['login_count']) && !isset($_COOKIE['last_login'])){ // 最初のアクセス時
        $lcount = 1;
        $llogin = mktime();
        setcookie('login_count',$lcount);
        setcookie('last_login',$llogin);
        setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
    }else if($_COOKIE['PHPSESSID']!=$_COOKIE['SAVEDPHPSESSID']){
        setcookie('login_count',$_COOKIE['login_count']+1);
        $lcount = $_COOKIE['login_count'];
        $llogin = $_COOKIE['last_login'];
        setcookie('last_login',mktime());
        setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
    }else{
        $lcount = $_COOKIE['login_count'];
        $llogin = $_COOKIE['last_login'];
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo INPUT ?></title>
</head>
<body>
    <h1>掲示板-トップ-</h1>
    今回で<?php echo $lcount ?>回目のアクセスです！　最終ログイン日時 <?php echo date('Y年m月d日 H時i分s秒',$llogin)?> <br>

    <form action="<?php echo SHOW ?>" method="post">
        名前:
        <input type="text" name="name" value="">
        <br><br>

        本文<br>
        <textarea name="text" id="" cols="120" rows="5"></textarea>
        <br><br>

        <input type="submit" name="btnSubmit" value="投稿">
    </form>
    <br><br>
</body>
</html>