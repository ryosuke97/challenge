<?php

//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
        // 失敗時に PDOException 例外が投げられるようにする
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $connectE) {
        die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}

// 課題8 データベースアクセス系の処理をdbaccesUtil.phpに切り離しなさい
//db接続を確立
$insert_db = connect2MySQL();

//DBに全項目のある1レコードを登録するSQL
$insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newdate)VALUES(:name,:birthday,:tell,:type,:comment,:newdate)";

//クエリとして用意
$insert_query = $insert_db->prepare($insert_sql);

//SQL文にセッションから受け取った値＆現在時をバインド
$insert_query->bindValue(':name',$name);
$insert_query->bindValue(':birthday',$birthday);
$insert_query->bindValue(':tell',$tell);
$insert_query->bindValue(':type',$type);
$insert_query->bindValue(':comment',$comment);
// 課題6 現在時刻を正しい型で格納する-time関数→date関数-
$insert_query->bindValue(':newdate',date('Y-m-d h:i:s'));

//SQLを実行
try {
    $insert_query->execute();
} catch (Exception $insetE) {
    echo ('データの挿入に失敗しました:' . $insertE -> getMessage());
}

//接続オブジェクトを初期化することでDB接続を切断
$insert_db=null;