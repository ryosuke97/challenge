<?php
require_once '../common/defineUtil.php';
// 時刻を東京に合わせる
date_default_timezone_set('Asia/Tokyo');

// トップページへ戻るリンクの生成
  function return_top(){
      return "<a href='".ROOT_URL."'>トップへ戻る</a>";
  }
