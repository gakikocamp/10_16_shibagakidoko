<?php
//最初にSESSIONを開始！！

var_dump($_POST);
// var_dump($_GET);
session_start();

//0.外部ファイル読み込み
include('functions.php'); //関数ファイル読み込み


//1.  DB接続&送信データの受け取り
$pdo=db_conn(); //データ接続

$lid=$_POST['lid'];//データ受け取り→関数に入れる
$lpw=$_POST['lpw'];

//2. データ登録SQL作成
$sql = 'SELECT * FROM user_table WHERE lid=:lid  AND lpw=:lpw AND life_flg=0';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$res = $stmt->execute();

//3. SQL実行時にエラーがある場合
if ($res==false) {
    queryError($stmt);
}

//4. 抽出データ数を取得

$val=$stmt->fetch();//１レコードのみ取得

// var_dump($val);
//5. 該当レコードがあればSESSIONに値を代入
if ($val['id'] != '') {
    // ログイン成功の場合はセッション変数に値を代入

    $_SESSION=array();  //うまくいったらセッションに入れていきます
    $_SESSION['chk_ssid']=session_id();  //
    $_SESSION['kanri_flg']=$val['kanri_flg']; //
    $_SESSION['name']=$val['name'];

    header('Location: index.php'); //うまいくいったらセレクトphpへ
} else {
    //ログイン失敗の場合はログイン画面へ戻る
    header('Location: login.php'); //うまくいかなかったらログインphpへ
}

exit();
