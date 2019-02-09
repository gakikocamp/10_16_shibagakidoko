<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todo登録</title>
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
            <a class="navbar-brand" href="#">キャンプアンケート</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="txt_form.php">登録ページ</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="txt_read.php">一覧ページ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- <form action="txt_write.php" method="post">
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="indate">知り合った日</label>
            <input type="date" class="form-control" id="indate" name="indate">
        </div>
        <div class="form-group">
            <label for="comment">特徴</label>
            <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div> -->
    <!-- </form> -->

    <form action="txt_write.php" method="POST">

    
        <ul>

            <li>
                名前<input type="text" id="name" placeholder="名前" name="name">
            </li>
            <li>
                誕生日<input type="date" id="date" name="date">
            </li>

            <li>
                性別
                <input type="radio" name="gender" id="gender" value="male">男性
                <input type="radio" name="gender" id="gender" value="female">女性
            </li>
            <li>
                年齢
                <input type="checkbox" name="age" id="age" value="10under">10歳未満
                <input type="checkbox" name="age" id="age" value="10">10代
                <input type="checkbox" name="age" id="age" value="20">20代
                <input type="checkbox" name="age" id="age" value="30">30代
                <input type="checkbox" name="age" id="age" value="40">40代
                <input type="checkbox" name="age" id="age" value="50over">50代以上
            </li>
            
            <li>
                <!-- サイトを知ったきっかけ -->
                キャンプを始めたきっかけ
                <input type="radio" name="trigger"  id="trigger" value="family">家族
                <input type="radio" name="trigger" id="trigger" value="friend">友人・知人
                <input type="radio" name="trigger" id="trigger" value="net">インターネット
                <input type="radio" name="trigger" id="trigger" value="other">その他

            </li>


            
                <button type="submit">送信</button>
            
        </ul>

    </form>



</body>

</html>