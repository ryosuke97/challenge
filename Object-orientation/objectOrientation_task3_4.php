<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>オブジェクト指向課題</title>
</head>
<body>
  <h2>課題3<br><span style="font-weight: normal; font-size: 20px;"> 以下の機能を持つクラスを作成してください。<br>
・パブリックな２つの変数<br>
・２つの変数に値を設定するパブリックな関数<br>
・２つの変数の中身をechoするパブリックな関数</span></h2>
<h2>課題4<br><span style="font-weight: normal; font-size: 20px;"> 3のクラスを継承し、以下の機能を持つクラスを作成してください。<br>
・２つの変数の中身をクリアするパブリックな関数</span></h2>
  <br><br>
  <hr>
  <br><br>
  <!-- 課題3 -->
  <?php
  // 自己紹介のクラス生成
  class selfIntroduction {
    public $name;
    public $age;
    // 名前と連嶺情報をセットする
    public function setSelfIntroduction($n, $a){
      $this->name = $n;
      $this->age = $a;
    }
    // 自己紹介文の表示
    public function displaySelfIntroduction(){
      echo '私の名前は' . $this->name . 'です。' . '<br>' . '年齢は' . $this->age . 'です。'. '<br>';
    }
  }
  // selfIntroductionクラスのインスタンスを生成
  $yamano = new selfIntroduction();
  // 自己紹介内容をセット
  $yamano -> setSelfIntroduction('山野', 26);
  // 自己紹介の表示
  $yamano -> displaySelfIntroduction();
  ?>
  <!-- 課題4 -->
  <?php 

  // 変数の中身をクリアするクラスの生成
  class clearVariable extends selfIntroduction {
    public function clear(){
      $this->name = '';
      $this->age = '';
    }
  }
  $clear = new clearVariable();
  $clear -> clear();
  echo '消去結果→【';
  $clear->displaySelfIntroduction();
  echo '】';

   ?>
</body>
</html>