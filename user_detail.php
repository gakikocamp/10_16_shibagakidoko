<?php
// var_dump($_POST);
// var_dump($_GET);


// 関数ファイルの読み込み
include('user_functions.php');

// getで送信されたidを取得
$id=$_GET['id'];

//DB接続します
$pdo=db_conn();

//データ登録SQL作成，指定したidのみ表示する
$sql = 'SELECT * FROM user_table WHERE id=:id';//sql文   資料は省略表示している
$stmt = $pdo->prepare($sql); //実行準備させる
$stmt->bindValue(':id', $id, PDO::PARAM_INT);//バインド変数 idから引っ張る
$status = $stmt->execute();//実行している

//データ表示
if ($status==false) {
    // エラーのとき
    errorMsg($stmt);
} else {
    // エラーでないとき
    $rs = $stmt->fetch();
    // fetch()で1レコードを取得して$rsに入れる
    // $rsは配列で返ってくる．$rs["id"], $rs["task"]などで値をとれる
    // var_dump()で見てみよう
}
?>


<!DOCTYPE html>
<html lang="ja">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー登録ページ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">管理人修正画面</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">データ一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form action="user_update.php" method="post">
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" id="name" name="name" value="<?=$rs['name']?>">
        </div>
            <div class="form-group">
            <label for="lid">ログインID</label>
            <input type="text" class="form-control" id="lid" name="lid" value="<?=$rs['lid']?>">
        </div>
        <div class="form-group">
            <label for="lpw">パスワード</label>
            <input type="text" class="form-control" id="lpw" name="lpw" value="<?=$rs['lpw']?>">
        </div>
        <div class="form-group">
            <label for="kanri_flg">一般：０,管理者：１</label>
            <input type="text" class="form-control" id="kanri_flg" name="kanri_flg" value="<?=$rs['kanri_flg']?>">
       
        </div>
        <div class="form-group">
            <label for="life_flg">アクティブ：０,非アクティブ：１</label>

            <!-- <select name="life_flg" id="life_flg">
            <option value="0">アクティブ</option>
            <option value="1">非アクティブ</option> -->

            <textarea class="form-control" id="life_flg" rows="1" name="life_flg" ><?=$rs['life_flg']?></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

<!-- idは変えたくない = ユーザーから見えないようにする-->

        <input type="hidden" name="id" value="<?=$rs['id']?>">


    </form>

</body>

</html>