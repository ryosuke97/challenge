<?php
require_once '../common/defineUtil.php';
// 時刻を東京に合わせる
date_default_timezone_set('Asia/Tokyo');

// トップページへ戻るリンクの生成
function return_top(){
      return "<a href='".ROOT_URL."'>トップへ戻る</a>";
}

// トップページへ飛ぶ
function jump_to_top(){
  header('Location:http://localhost/develop/UserManagementSystem-ver1.0/app/index.php');
}

// 画面上で数値でなく種別名で表示されるように変数に格納する
function change_num_to_section(){
    session_start();
    $type = $_SESSION['type'];
    // 登録結果画面で数値でなく種別名で表示されるように変数に格納する
    switch ($_SESSION['type']) {
        case 1:
            return $display_type = 'エンジニア';
            break;
        case 2:
            return $display_type = '営業';
            break;
        case 3:
            return $display_type = 'その他';
            break;
    }
}
?>