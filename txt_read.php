<?php
// ここにphpの処理を記述しよう

$str='';
$file=fopen('data/data.csv','r');
flock($file,LOCK_EX);

if($file){

    while($line=fgetcsv($file)){

        foreach($line as $value){
        $str .='<p>'.$value.'</p>';    
        }

        
    }
}

flock($file,LOCK_UN);
fclose($file);


?>

<!DOCTYPE html>
<html lang="ja">

<!-- <head>
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
</head> -->

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">データ登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="survey.html">戻る</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="txt_read.php">アンケート生データ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div>
        <!-- ファイルから読んだデータをここに出力しよう -->
            <?=$str?>
    </div>
</body>

</html>