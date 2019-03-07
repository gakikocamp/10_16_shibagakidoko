<?php
// セッションのスタート
session_start();

// var_dump ($_SESSION ["kanri_flg"]);


//0.外部ファイル読み込み
include('functions.php');

// ログイン状態のチェック

$menu1=menu1();
$menu2=menu2();

if($_SESSION["kanri_flg"]==0){
    $menu=$menu1;
}elseif($_SESSION["kanri_flg"]==1){
    $menu=$menu2;
}else{
    echo'error';
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CAMPUK - 一括予約申込</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">CAMPUK</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">一括予約</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="detail.php">予約確認</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.html">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/userindex-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>CAMPUK RESERVATION</h1>
            <!-- <span class="subheading">かんたんなユーザー登録だけで一括予約が可能です</span> -->
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-10 mx-auto">
        <h2>CAMPUK - 一括予約ページ</h2>

        <hr>
        <form action="insert.php" method="POST">
          

          <div class="control-group">
            <div class="form-group col-xs-12  floating-label-form-group controls">

              <div><h3>①テントをおえらびください</h3><br>
              <select name="rental" id="rental" size=3>
              <option value="Aset">Aセット：２人用お手軽パック</option>
              <option value="Bset">Bセット：６－８人用グランピングパック</option>
              <option value="Cset">Cセット：３－５人用スノーピークセット</option>
              </select></div><br>

            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 mt-3 floating-label-form-group controls">

              <div><h3>②キャンプ場をおえらびください</h3><br>
              <select name="campground" id="campground" size=4>
              <option value="1">A 大分県竹田市：ボイボイキャンプ場</option>
              <option value="2">B 熊本県南小国町：蔵迫温泉さくらオートキャンプ場</option>
              <option value="3">C 大分県別府市：志高湖キャンプ場</option>
              <option value="0">《キャンプ場予約不要：レンタルのみ利用》</option>
              </select></div>
          
              <div><h5>キャンプ場利用人数</h5>
              <select name="numPeople" id="numPeople" size=1>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              </select>人</div><br>

            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 mt-3 floating-label-form-group controls">
              <h3>③レンタカーをおえらびください</h3>
              <h5>
              <input type="radio" style="font-size: 200px" name="car" id="car" value="1">必要
              <input type="radio" name="car" id="car" value="0">不要</h5>

              <div><h5>乗車場所</h5>
              <select name="num" id="num" size=1>
              <option value="1">福岡空港エリア（無料）</option>
              <option value="2">博多駅周辺（＋1000円）</option>
              <option value="3">天神エリア（＋1000円）</option>
              </select></div><br>

            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Birthday</label>
              <h3>④利用開始日</h3>
              <input type="date" class="form-control" id="inday" name="inday" placeholder="Checkin" required
                data-validation-required-message="チェックイン日">
              <p class="help-block text-danger"></p>
            </div>

          </div>

            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <h3><br>⑤宿泊日数</h3>
              <select name="numDays" id="numDays" size=1>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              </select>日</div><br>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">送信</button>
          </div>       

        </form>

      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; KINOKOCAMP 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>





</html>