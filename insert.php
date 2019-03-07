<?php
include('functions.php');

// 入力チェック
if (
    !isset($_POST['inday']) || $_POST['inday']=='' ||
    !isset($_POST['rental']) || $_POST['rental']==''
) {
    exit('ParamError');
}

//POSTデータ取得
$inday = $_POST['inday'];
$numDays = $_POST['numDays'];
$numPeople = $_POST['numPeople'];

//DB接続
$pdo = db_conn();

//データ登録SQL作成
$sql ='INSERT INTO rsv_table (id, name, inday, numDays, numPeople,rental,campground,car, indate)
VALUES(NULL, NULL,:a1, :a2, :a3,:a4, :a5, :a6, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $inday, PDO::PARAM_STR);
$stmt->bindValue(':a2', $numDays, PDO::PARAM_STR);
$stmt->bindValue(':a3', $numPeople, PDO::PARAM_STR);
$stmt->bindValue(':a4', $inday, PDO::PARAM_STR);
$stmt->bindValue(':a5', $numDays, PDO::PARAM_STR);
$stmt->bindValue(':a6', $numPeople, PDO::PARAM_STR);

$status = $stmt->execute();

//データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    //index.phpへリダイレクト
    header('Location: finish.php');
}
