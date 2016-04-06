<?php
  date_default_timezone_set('Asia/Tokyo');

  require_once 'const.php';
  $pass = PASSWORD;
  $chkpass=null;
  if(empty($_POST['password'])){
    $chkpass=null;
  }else{
    $chkpass=$_POST['password'];
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎1課題1~6</title>
</head>
<body>
<h2>課題9<br><span style="font-weight: normal; font-size: 20px;"> デモのソースコードを参考に、以下の仕様のソースコードを作成しなさい。細かな仕様はデモと同じとするように<br>
・パスワードはpassword<br>
・入力項目は[名前][本文]の掲示板システムを作成<br>
・セッションは120秒で途切れるように</span></h2>
<hr>

<h1>ログイン画面</h1>

<?php 
  if($chkpass!==$pass){
    if($chkpass!==null){
        echo 'パスワードが異なります。もう一度ログインパスワードを入力してください<br>';
    }else{
        echo 'ログインパスワードを入力してください<br>';
  }
?>
    <form action="<?php echo LOGIN ?>" method="POST"> 
        <input type="text" name="password">
        <input type="submit" name="btnSubmit" value="ログイン">
    </form>
<?php 
  }else{
    echo 'ログインに成功しました。3秒後にサービストップに移動します';
    echo '<meta http-equiv="refresh" content="3;URL='.INPUT.'">'; // 3秒後に遷移

    session_start();
    $_SESSION['last_access']=mktime();
  }
?>
</body>
</html>