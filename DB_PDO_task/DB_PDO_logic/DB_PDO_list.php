<?php
// variable.phpを読み込む
require "variable.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>時間割一覧</title>
  <style>
  th,td{width:120px; height: 120px; text-align: center;}
  .bgBlue{background: #ccf;}
  .sbj{font-weight: bold; font-size: 21px;}
  </style>
</head>
<body>
  <h1>◯×塾時間割</h1>
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
      </p></td>
    </tr>
  </table><br>
  <a href="input.php" target="_self"><button>変更する</button></a>
</body>
</html>