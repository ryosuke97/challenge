<?php
// variable.phpを読み込む
require 'variable.php';
// var_dump($_POST['sun1']);
var_dump($_POST['mon1']);
var_dump($_POST['subject']);
// 日曜日-1-
if ($_POST['sun1'] == 'sun1') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    // var_dump($subject);
    $udSunSub1Sql = 'update week_schedule set sub_date_1=:sub_date_1 where id=:id';
    $udSunSub1Query = $pdoObj -> prepare($udSunSub1Sql);
    $udSunSub1Query -> bindValue(':id', 1);
    $udSunSub1Query -> bindValue(':sub_date_1', $subject);
    $udSunSub1Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    // var_dump($teacher);
    $udSunT1Sql = 'update week_teacher set t_date_1=:t_date_1 where id=:id';
    $udSunT1Query = $pdoObj -> prepare($udSunT1Sql);
    $udSunT1Query -> bindValue(':id', 1);
    $udSunT1Query -> bindValue(':t_date_1', $teacher);
    $udSunT1Query -> execute();
  }
}
// 日曜日-2-
if ($_POST['sun2'] == 'sun2') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    var_dump($subject);
    $udSunSub2Sql = 'update week_schedule set sub_date_1=:sub_date_1 where id=:id';
    $udSunSub2Query = $pdoObj -> prepare($udSunSub2Sql);
    $udSunSub2Query -> bindValue(':id', 2);
    $udSunSub2Query -> bindValue(':sub_date_1', $subject);
    $udSunSub2Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    var_dump($teacher);
    $udSunT2Sql = 'update week_teacher set t_date_1=:t_date_1 where id=:id';
    $udSunT2Query = $pdoObj -> prepare($udSunT2Sql);
    $udSunT2Query -> bindValue(':id', 2);
    $udSunT2Query -> bindValue(':t_date_1', $teacher);
    $udSunT2Query -> execute();
  }
}

// 月曜日-1-
if ($_POST['mon1'] == 'mon1') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    // var_dump($subject);
    $udMonSub1Sql = 'update week_schedule set sub_date_2=:sub_date_2 where id=:id';
    $udMonSub1Query = $pdoObj -> prepare($udMonSub1Sql);
    $udMonSub1Query -> bindValue(':id', 1);
    $udMonSub1Query -> bindValue(':sub_date_2', $subject);
    $udMonSub1Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    // var_dump($teacher);
    $udMonT1Sql = 'update week_teacher set t_date_2=:t_date_2 where id=:id';
    $udMonT1Query = $pdoObj -> prepare($udMonT1Sql);
    $udMonT1Query -> bindValue(':id', 1);
    $udMonT1Query -> bindValue(':t_date_2', $teacher);
    $udMonT1Query -> execute();
  }
}
// 月曜日-2-
if ($_POST['mon2'] == 'mon2') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    var_dump($subject);
    $udMonSub2Sql = 'update week_schedule set sub_date_2=:sub_date_2 where id=:id';
    $udMonSub2Query = $pdoObj -> prepare($udMonSub2Sql);
    $udMonSub2Query -> bindValue(':id', 2);
    $udMonSub2Query -> bindValue(':sub_date_2', $subject);
    $udMonSub2Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    var_dump($teacher);
    $udMonT2Sql = 'update week_teacher set t_date_2=:t_date_2 where id=:id';
    $udMonT2Query = $pdoObj -> prepare($udMonT2Sql);
    $udMonT2Query -> bindValue(':id', 2);
    $udMonT2Query -> bindValue(':t_date_2', $teacher);
    $udMonT2Query -> execute();
  }
}

// 火曜日-1-
if ($_POST['tue1'] == 'tue1') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    // var_dump($subject);
    $udTueSub1Sql = 'update week_schedule set sub_date_3=:sub_date_3 where id=:id';
    $udTueSub1Query = $pdoObj -> prepare($udTueSub1Sql);
    $udTueSub1Query -> bindValue(':id', 1);
    $udTueSub1Query -> bindValue(':sub_date_3', $subject);
    $udTueSub1Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    // var_dump($teacher);
    $udTueT1Sql = 'update week_teacher set t_date_3=:t_date_3 where id=:id';
    $udTueT1Query = $pdoObj -> prepare($udTueT1Sql);
    $udTueT1Query -> bindValue(':id', 1);
    $udTueT1Query -> bindValue(':t_date_3', $teacher);
    $udTueT1Query -> execute();
  }
}
// 火曜日-2-
if ($_POST['tue2'] == 'tue2') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    var_dump($subject);
    $udTueSub2Sql = 'update week_schedule set sub_date_3=:sub_date_3 where id=:id';
    $udTueSub2Query = $pdoObj -> prepare($udTueSub2Sql);
    $udTueSub2Query -> bindValue(':id', 2);
    $udTueSub2Query -> bindValue(':sub_date_3', $subject);
    $udTueSub2Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    var_dump($teacher);
    $udTueT2Sql = 'update week_teacher set t_date_3=:t_date_3 where id=:id';
    $udTueT2Query = $pdoObj -> prepare($udTueT2Sql);
    $udTueT2Query -> bindValue(':id', 2);
    $udTueT2Query -> bindValue(':t_date_3', $teacher);
    $udTueT2Query -> execute();
  }
}

// 水曜日-1-
if ($_POST['wed1'] == 'wed1') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    // var_dump($subject);
    $udWedSub1Sql = 'update week_schedule set sub_date_4=:sub_date_4 where id=:id';
    $udWedSub1Query = $pdoObj -> prepare($udWedSub1Sql);
    $udWedSub1Query -> bindValue(':id', 1);
    $udWedSub1Query -> bindValue(':sub_date_4', $subject);
    $udWedSub1Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    // var_dump($teacher);
    $udWedT1Sql = 'update week_teacher set t_date_4=:t_date_4 where id=:id';
    $udWedT1Query = $pdoObj -> prepare($udWedT1Sql);
    $udWedT1Query -> bindValue(':id', 1);
    $udWedT1Query -> bindValue(':t_date_4', $teacher);
    $udWedT1Query -> execute();
  }
}
// 水曜日-2-
if ($_POST['wed2'] == 'wed2') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    var_dump($subject);
    $udWedSub2Sql = 'update week_schedule set sub_date_4=:sub_date_4 where id=:id';
    $udWedSub2Query = $pdoObj -> prepare($udWedSub2Sql);
    $udWedSub2Query -> bindValue(':id', 2);
    $udWedSub2Query -> bindValue(':sub_date_4', $subject);
    $udWedSub2Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    var_dump($teacher);
    $udWedT2Sql = 'update week_teacher set t_date_4=:t_date_4 where id=:id';
    $udWedT2Query = $pdoObj -> prepare($udWedT2Sql);
    $udWedT2Query -> bindValue(':id', 2);
    $udWedT2Query -> bindValue(':t_date_4', $teacher);
    $udWedT2Query -> execute();
  }
}

// 木曜日-1-
if ($_POST['thu1'] == 'thu1') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    // var_dump($subject);
    $udThuSub1Sql = 'update week_schedule set sub_date_5=:sub_date_5 where id=:id';
    $udThuSub1Query = $pdoObj -> prepare($udThuSub1Sql);
    $udThuSub1Query -> bindValue(':id', 1);
    $udThuSub1Query -> bindValue(':sub_date_5', $subject);
    $udThuSub1Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    // var_dump($teacher);
    $udThuT1Sql = 'update week_teacher set t_date_5=:t_date_5 where id=:id';
    $udThuT1Query = $pdoObj -> prepare($udThuT1Sql);
    $udThuT1Query -> bindValue(':id', 1);
    $udThuT1Query -> bindValue(':t_date_5', $teacher);
    $udThuT1Query -> execute();
  }
}
// 木曜日-2-
if ($_POST['thu2'] == 'thu2') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    var_dump($subject);
    $udThuSub2Sql = 'update week_schedule set sub_date_5=:sub_date_5 where id=:id';
    $udThuSub2Query = $pdoObj -> prepare($udThuSub2Sql);
    $udThuSub2Query -> bindValue(':id', 2);
    $udThuSub2Query -> bindValue(':sub_date_5', $subject);
    $udThuSub2Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    var_dump($teacher);
    $udThuT2Sql = 'update week_teacher set t_date_5=:t_date_5 where id=:id';
    $udThuT2Query = $pdoObj -> prepare($udThuT2Sql);
    $udThuT2Query -> bindValue(':id', 2);
    $udThuT2Query -> bindValue(':t_date_5', $teacher);
    $udThuT2Query -> execute();
  }
}

// 金曜日-1-
if ($_POST['fri1'] == 'fri1') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    // var_dump($subject);
    $udFriSub1Sql = 'update week_schedule set sub_date_6=:sub_date_6 where id=:id';
    $udFriSub1Query = $pdoObj -> prepare($udFriSub1Sql);
    $udFriSub1Query -> bindValue(':id', 1);
    $udFriSub1Query -> bindValue(':sub_date_6', $subject);
    $udFriSub1Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    // var_dump($teacher);
    $udFriT1Sql = 'update week_teacher set t_date_6=:t_date_6 where id=:id';
    $udFriT1Query = $pdoObj -> prepare($udFriT1Sql);
    $udFriT1Query -> bindValue(':id', 1);
    $udFriT1Query -> bindValue(':t_date_6', $teacher);
    $udFriT1Query -> execute();
  }
}
// 金曜日-2-
if ($_POST['fri2'] == 'fri2') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    var_dump($subject);
    $udFriSub2Sql = 'update week_schedule set sub_date_6=:sub_date_6 where id=:id';
    $udFriSub2Query = $pdoObj -> prepare($udFriSub2Sql);
    $udFriSub2Query -> bindValue(':id', 2);
    $udFriSub2Query -> bindValue(':sub_date_6', $subject);
    $udFriSub2Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    var_dump($teacher);
    $udFriT2Sql = 'update week_teacher set t_date_6=:t_date_6 where id=:id';
    $udFriT2Query = $pdoObj -> prepare($udFriT2Sql);
    $udFriT2Query -> bindValue(':id', 2);
    $udFriT2Query -> bindValue(':t_date_6', $teacher);
    $udFriT2Query -> execute();
  }
}

// 土曜日-1-
if ($_POST['sat1'] == 'sat1') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    // var_dump($subject);
    $udSatSub1Sql = 'update week_schedule set sub_date_7=:sub_date_7 where id=:id';
    $udSatSub1Query = $pdoObj -> prepare($udSatSub1Sql);
    $udSatSub1Query -> bindValue(':id', 1);
    $udSatSub1Query -> bindValue(':sub_date_7', $subject);
    $udSatSub1Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    // var_dump($teacher);
    $udSatT1Sql = 'update week_teacher set t_date_7=:t_date_7 where id=:id';
    $udSatT1Query = $pdoObj -> prepare($udSatT1Sql);
    $udSatT1Query -> bindValue(':id', 1);
    $udSatT1Query -> bindValue(':t_date_7', $teacher);
    $udSatT1Query -> execute();
  }
}
// 土曜日-2-
if ($_POST['sat2'] == 'sat2') {
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  if (!empty($_POST['subject'])) {
    var_dump($subject);
    $udSatSub2Sql = 'update week_schedule set sub_date_7=:sub_date_7 where id=:id';
    $udSatSub2Query = $pdoObj -> prepare($udSatSub2Sql);
    $udSatSub2Query -> bindValue(':id', 2);
    $udSatSub2Query -> bindValue(':sub_date_7', $subject);
    $udSatSub2Query -> execute();
  }
  $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
  if (!empty($_POST['teacher'])) {
    var_dump($teacher);
    $udSatT2Sql = 'update week_teacher set t_date_7=:t_date_7 where id=:id';
    $udSatT2Query = $pdoObj -> prepare($udSatT2Sql);
    $udSatT2Query -> bindValue(':id', 2);
    $udSatT2Query -> bindValue(':t_date_7', $teacher);
    $udSatT2Query -> execute();
  }
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>時間割変更画面</title>
</head>
<body>
  <form action="update.php" method="post">
    <h3>教科を選ぶ</h3>
    <input type="hidden" name="<?php
    if ($_POST['sun1']) {
      echo $_POST['sun1'];
    } elseif ($_POST['sun2']) {
      echo $_POST['sun2'];
    } elseif ($_POST['mon1']) {
      echo $_POST['mon1'];
    } elseif ($_POST['mon2']) {
      echo $_POST['mon2'];
    } elseif ($_POST['tue1']) {
      echo $_POST['tue1'];
    } elseif ($_POST['tue2']) {
      echo $_POST['tue2'];
    } elseif ($_POST['wed1']) {
      echo $_POST['wed1'];
    } elseif ($_POST['wed2']) {
      echo $_POST['wed2'];
    } elseif ($_POST['thu1']) {
      echo $_POST['thu1'];
    } elseif ($_POST['thu2']) {
      echo $_POST['thu2'];
    } elseif ($_POST['fri1']) {
      echo $_POST['fri1'];
    } elseif ($_POST['fri2']) {
      echo $_POST['fri2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    }
    ?>"
    value="<?php
    if ($_POST['sun1']) {
      echo $_POST['sun1'];
    } elseif ($_POST['sun2']) {
      echo $_POST['sun2'];
    } elseif ($_POST['mon1']) {
      echo $_POST['mon1'];
    } elseif ($_POST['mon2']) {
      echo $_POST['mon2'];
    } elseif ($_POST['tue1']) {
      echo $_POST['tue1'];
    } elseif ($_POST['tue2']) {
      echo $_POST['tue2'];
    } elseif ($_POST['wed1']) {
      echo $_POST['wed1'];
    } elseif ($_POST['wed2']) {
      echo $_POST['wed2'];
    } elseif ($_POST['thu1']) {
      echo $_POST['thu1'];
    } elseif ($_POST['thu2']) {
      echo $_POST['thu2'];
    } elseif ($_POST['fri1']) {
      echo $_POST['fri1'];
    } elseif ($_POST['fri2']) {
      echo $_POST['fri2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    }
     ?>">
    <select name="subject">
      <option value="国語">国語</option>
      <option value="算数">算数</option>
      <option value="理科">理科</option>
      <option value="社会">社会</option>
    </select>
    <input type="submit" value="更新">
  </form>
    <br>
  <form action="" name="teacher" method="post">
    <input type="hidden" name="<?php
    if ($_POST['sun1']) {
      echo $_POST['sun1'];
    } elseif ($_POST['sun2']) {
      echo $_POST['sun2'];
    } elseif ($_POST['mon1']) {
      echo $_POST['mon1'];
    } elseif ($_POST['mon2']) {
      echo $_POST['mon2'];
    } elseif ($_POST['tue1']) {
      echo $_POST['tue1'];
    } elseif ($_POST['tue2']) {
      echo $_POST['tue2'];
    } elseif ($_POST['wed1']) {
      echo $_POST['wed1'];
    } elseif ($_POST['wed2']) {
      echo $_POST['wed2'];
    } elseif ($_POST['thu1']) {
      echo $_POST['thu1'];
    } elseif ($_POST['thu2']) {
      echo $_POST['thu2'];
    } elseif ($_POST['fri1']) {
      echo $_POST['fri1'];
    } elseif ($_POST['fri2']) {
      echo $_POST['fri2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    }
    ?>" value="<?php
    if ($_POST['sun1']) {
      echo $_POST['sun1'];
    } elseif ($_POST['sun2']) {
      echo $_POST['sun2'];
    } elseif ($_POST['mon1']) {
      echo $_POST['mon1'];
    } elseif ($_POST['mon2']) {
      echo $_POST['mon2'];
    } elseif ($_POST['tue1']) {
      echo $_POST['tue1'];
    } elseif ($_POST['tue2']) {
      echo $_POST['tue2'];
    } elseif ($_POST['wed1']) {
      echo $_POST['wed1'];
    } elseif ($_POST['wed2']) {
      echo $_POST['wed2'];
    } elseif ($_POST['thu1']) {
      echo $_POST['thu1'];
    } elseif ($_POST['thu2']) {
      echo $_POST['thu2'];
    } elseif ($_POST['fri1']) {
      echo $_POST['fri1'];
    } elseif ($_POST['fri2']) {
      echo $_POST['fri2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    } elseif ($_POST['sat1']) {
      echo $_POST['sat1'];
    } elseif ($_POST['sat2']) {
      echo $_POST['sat2'];
    }
    ?>">
    <h3>教師を選ぶ</h3>
    <select name="teacher">
      <option value="田中">田中</option>
      <option value="鈴木">鈴木</option>
      <option value="山田">山田</option>
      <option value="吉田">吉田</option>
    </select><br><br>
    <input type="submit" value="更新">
  </form>


</body>
</html>