<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題7入力画面</title>
</head>
<body>
<!-- 課題7 -->
  <?php 
    // $_POSTの中身があるか
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $_SESSION['initName'] = $name;
    }
    if (isset($_POST['gender'])) {
      $gender = $_POST['gender'];
      $_SESSION['initGender'] = $gender;
    }
    if (isset($_POST['hobby'])) {
      $hobby = $_POST['hobby'];
      $_SESSION['initHobby'] = $hobby;
    }

    // $_SESSIONの中身があるか
    if (isset($_SESSION['initName'])) {
      $initName = $_SESSION['initName'];
    } else {
      $initName = '';
    }
    if (isset($_SESSION['initGender'])) {
      $initGender = $_SESSION['initGender'];
    } else {
      $initGender = '';
    }
    if (isset($_SESSION['initHobby'])) {
      $initHobby = $_SESSION['initHobby'];
    } else {
      $initHobby = '';
    }
  ?>

  <h2>課題7</h2>
  <p style="font-weight: normal; font-size: 20px;">
    名前・性別・趣味を入力するページを作成してください。<br>
    また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
    記録されたデータを初期値として表示してください。
  </p>
  <hr>
  <form action="" method="post">
    <p>名前：　<input type="text" name="name" value="<?php echo $initName ?>"></p>
    <p>性別：　男性<input type="radio" name="gender" value="男性" <?php 
        if ($initGender == "男性") {
          echo 'checked';
        }
     ?>>　女性<input type="radio" name="gender" value="女性" <?php 
        if ($initGender == "女性") {
          echo 'checked';
        }
     ?>></p>
    <textarea name="hobby" cols="30" rows="10"><?php echo $initHobby; ?></textarea>
    <br><br>
    <input type="submit" value="送信">
  </form>

</body>
</html>