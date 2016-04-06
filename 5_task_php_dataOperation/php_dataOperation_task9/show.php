<?php
    date_default_timezone_set('Asia/Tokyo');

    require_once 'function.php';
    require_once 'const.php';

    session_chk();

    $get_data = array();

    if(!empty($_POST['name'])){
        $get_data['name'] = $_POST['name'];
    }
    if(!empty($_POST['text'])){
        $get_data['text'] = $_POST['text'];
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo SHOW ?></title>
</head>
<body>
    <h1>投稿内容</h1>
    <?php
    if(!isset($get_data['name']) || !isset($get_data['text'])){
        echo '入力データが不十分です。もう一度入力を行ってください。';
    }else{
        echo '名前：' . $get_data['name'] . '<br>';
        echo '投稿記事：'. $get_data['text'];
    }
    ?>
</body>
</html>
