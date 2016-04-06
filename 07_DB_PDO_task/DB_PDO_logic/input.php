<?php
// variable.phpを読み込む
require "variable.php";
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>時間割変更選択画面</title>
  <style>
  th,td{width:120px; height: 120px; text-align: center;}
  .bgBlue{background: #ccf;}
  .sbj{font-weight: bold; font-size: 21px;}
  </style>
</head>
<body>
  <h1>時間割を変更する日時を選択してください。</h1>
  <table style="border: solid 1px #999; border-collapse: collapse;" border=1>
    <tr class="bgBlue">
      <th style=" background-image: linear-gradient(45deg, transparent 49%, black 49%, black 51%, transparent 51%, transparent);"></th><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th>
    </tr>
    <tr>
      <td class="bgBlue">1時間目</td>
      <td><p><span class="sbj">
      <?php
        foreach ($sunSub1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($sunT1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post" name="sun1">
        <input type="submit" name="sun1" value="変更">
        <input type="hidden" name="sun1" value="sun1">
      </form>
      </p></td>
      <td><p><span class="sbj">
      <?php
        foreach ($monSub1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($monT1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="mon1" value="変更">
        <input type="hidden" name="mon1" value="mon1">
      </form>
      </p></td>
      <td><p><span class="sbj">
      <?php
        foreach ($tueSub1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($tueT1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="tue1" value="変更">
        <input type="hidden" name="tue1" value="tue1">
      </form>
      </p></td>
      <td><p><span class="sbj">
      <?php
        foreach ($wedSub1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($wedT1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="wed1" value="変更">
        <input type="hidden" name="wed1" value="wed1">
      </form>
      </p></td>
      <td><p><span class="sbj">
      <?php
        foreach ($thuSub1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($thuT1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="thu1" value="変更">
        <input type="hidden" name="thu1" value="thu1">
      </form>
      </p></td>
      <td><p><span class="sbj">
      <?php
        foreach ($friSub1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($friT1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="fri1" value="変更">
        <input type="hidden" name="fri1" value="fri1">
      </form>
      </p></td>
      <td><p><span class="sbj">
        <?php
        foreach ($satSub1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($satT1 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="sat1" value="変更">
        <input type="hidden" name="sat1" value="sat1">
      </form>
      </p></td>
    </tr>
    <tr>
      <td class="bgBlue">2時間目</td>
      <td><p><span class="sbj">
      <?php
        foreach ($sunSub2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($sunT2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="sun2" value="変更">
        <input type="hidden" name="sun2" value="sun2">
      </form>
      </p></td>
      <td><p><span class="sbj">
        <?php
        foreach ($monSub2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($monT2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="mon2" value="変更">
        <input type="hidden" name="mon2" value="mon2">
      </form>
      </p></td>
      <td><p><span class="sbj">
        <?php
        foreach ($tueSub2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($tueT2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="tue2" value="変更">
        <input type="hidden" name="tue2" value="tue2">
      </form>
      </p></td>
      <td><p><span class="sbj">
        <?php
        foreach ($wedSub2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($wedT2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="wed2" value="変更">
        <input type="hidden" name="wed2" value="wed2">
      </form>
      </p></td>
      <td><p><span class="sbj">
        <?php
        foreach ($thuSub2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($thuT2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="thu2" value="変更">
        <input type="hidden" name="thu2" value="thu2">
      </form>
      </p></td>
      <td><p><span class="sbj">
        <?php
        foreach ($friSub2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($friT2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="fri2" value="変更">
        <input type="hidden" name="fri2" value="fri2">
      </form>
      </p></td>
      <td><p><span class="sbj">
        <?php
        foreach ($satSub2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?></span></p><p>
        <?php
        foreach ($satT2 as $value) {
          foreach ($value as $key2 => $value2) {
            echo $value2;
          }
        }
      ?>
      <form action="update.php" method="post">
        <input type="submit" name="sat2" value="変更">
        <input type="hidden" name="sat2" value="sat2">
      </form>
      </p></td>
    </tr>
  </table><br>
  <a href="DB_PDO_list.php">時間割一覧へ</a>
</body>
</html>