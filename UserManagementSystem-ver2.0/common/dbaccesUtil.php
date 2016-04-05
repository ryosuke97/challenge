<?php

//DBへの接続を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=challengedb;charset=utf8','root');
        //SQL実行時のエラーをtry-catchで取得できるように設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('DB接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}

//レコードの挿入を行う。失敗した場合はエラー文を返却する
function insert_profiles($name, $birthday, $type, $tell, $comment){
    //db接続を確立
    $insert_db = connect2MySQL();

    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
            . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

    //現在時をdatetime型で取得
    $datetime =new DateTime();
    $date = $datetime->format('Y-m-d H:i:s');

    //クエリとして用意
    $insert_query = $insert_db->prepare($insert_sql);

    //SQL文にセッションから受け取った値＆現在時をバインド
    $insert_query->bindValue(':name',$name);
    $insert_query->bindValue(':birthday',$birthday);
    $insert_query->bindValue(':tell',$tell);
    $insert_query->bindValue(':type',$type);
    $insert_query->bindValue(':comment',$comment);
    $insert_query->bindValue(':newDate',$date);

    //SQLを実行
    try{
        $insert_query->execute();
    } catch (PDOException $e) {
        //接続オブジェクトを初期化することでDB接続を切断
        $insert_db=null;
        return $e->getMessage();
    }

    $insert_db=null;
    return null;
}

function search_all_profiles(){// // 修正 スペル「serch_all_profiles()」→「search_all_profiles()」※関数内も修正
    //db接続を確立
    $search_db = connect2MySQL();

    // SQL文を用意
    $search_sql = "SELECT * FROM user_t";

    //クエリとして用意
    $search_query = $search_db->prepare($search_sql);

    //SQLを実行
    try{
        $search_query->execute();
    } catch (PDOException $e) {
        $search_query=null;
        return $e->getMessage();
    }

    //全レコードを連想配列として返却
    return $search_query->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * 複合条件検索を行う
 * @param type $name
 * @param type $year
 * @param type $type
 * @return type
 */
function search_profiles($name=null,$year=null,$type=null){ // 後で聞く！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！
// // 修正 スペル「serch_profiles」→「search_profiles」※関数内も修正
    //db接続を確立
    $search_db = connect2MySQL();

    $search_sql = "SELECT * FROM user_t";

    // where句の有無のフラグ
    $flag = false; // where句がない状態に設定

    // 中身が空でないとき$search_sqlにそれぞれのコマンドが実行されるように追記
    if(!empty($name)){
        $search_sql .= " WHERE name like :name";
        $flag = true;
    }
    if(!empty($year) && $flag == false){// 修正 flag自身がfalseの条件の時であるため「$flag = false」→「$flag == false」
        $search_sql .= " WHERE birthday like :year";
        $flag = true;
    }else if(!empty($year)){
        $search_sql .= " AND birthday like :year";
    }
    if(!empty($type) && $flag == false){// 修正 修正 flag自身がfalseの条件の時であるため「$flag = false」→「$flag == false」
        $search_sql .= " WHERE type = :type";
    }else if(!empty($type)){
        $search_sql .= " AND type = :type";
    }

    //クエリとして用意
    $search_query = $search_db->prepare($search_sql);

    // 修正 $name,$year,$typeの中身があればその中身で検索がかけられるようにする
    if (!empty($name)) {
        $search_query->bindValue(':name', '%'.$name.'%');
    }
    if (!empty($year)) {
        echo $year;
        $search_query->bindValue(':year', '%'.$year.'%');
    }
    if (!empty($type)) {
        $search_query->bindValue(':type', $type);
    }

    //SQLを実行
    try{
        $search_query->execute();
    } catch (PDOException $e) {
        $search_query=null;
        return $e->getMessage();
    }

    //該当するレコードを連想配列として返却
    return $search_query->fetchAll(PDO::FETCH_ASSOC);
}



function profile_detail($id){
    //db接続を確立
    $detail_db = connect2MySQL();

    $detail_sql = "SELECT * FROM user_t WHERE userid=:id";

    //クエリとして用意
    $detail_query = $detail_db->prepare($detail_sql);

    $detail_query->bindValue(':id',$id);

    //SQLを実行
    try{
        $detail_query->execute();
    } catch (PDOException $e) {
        $detail_query=null;
        return $e->getMessage();
    }

    //レコードを連想配列として返却
    return $detail_query->fetchAll(PDO::FETCH_ASSOC);
}

function delete_profile($id){
    //db接続を確立
    $delete_db = connect2MySQL();

    // 修正 「DELETE * FROM」→「DELETE FROM」
    $delete_sql = "DELETE FROM user_t WHERE userid=:id";
    //クエリとして用意
    $delete_query = $delete_db->prepare($delete_sql);

    $delete_query->bindValue(':id',$id);

    //SQLを実行
    try{
        $delete_query->execute();
    } catch (PDOException $e) {
        $delete_query=null;
        return $e->getMessage();
    }
    return null;
}

// 修正 update_profile関数の実装
function update_profile($id, $name, $birthday, $type, $tell, $comment){
    //db接続を確立
    $update_db = connect2MySQL();
    //指定したuseridのレコード情報を上書きするSQLを用意
    $update_sql = "UPDATE user_t SET name=:name, birthday=:birthday, type=:type,".
                  " tell=:tell, comment=:comment, newdate=:newdate WHERE userID=:id";
    //現在時を取得
    $datetime =new DateTime();
    $date = $datetime->format('Y-m-d H:i:s');

    //クエリとして用意
    $update_query = $update_db->prepare($update_sql);

    $update_query->bindValue(':id',$id);
    $update_query->bindValue(':name',$name);
    $update_query->bindValue(':birthday',$birthday);
    $update_query->bindValue(':type',$type);
    $update_query->bindValue(':tell',$tell);
    $update_query->bindValue(':comment',$comment);
    $update_query->bindValue(':newdate',$date);

    //SQLを実行
    try{
        $update_query->execute();
    } catch (PDOException $update_e) {
        $update_query=null;
        return $update_e->getMessage();
    }
    return null;
}