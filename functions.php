<?php
// 共通で使うものを別ファイルにしておきましょう。

// DB接続関数（PDO）
function db_conn()
{
    $dbname = 'gs_f02_db16';
    $db = 'mysql:dbname='.$dbname.';charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = 'root';
    try {
        return new PDO($db, $user, $pwd);
    } catch (PDOException $e) {
        exit('dbError:'.$e->getMessage());
    }
}

// SQL処理エラー
function errorMsg($stmt)
{
    $error = $stmt->errorInfo();
    exit('ErrorQuery:'.$error[2]);
}

// SESSIONチェック＆リジェネレイト
function chk_ssid()
{
    if( !isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid']!=session_id()){
    // ログイン失敗時の処理（ログイン画面に移動） セッションIDがないか一致しないとき
        header('Location:login.php');

    }else{
        // ログイン成功時の処理（一覧画面に移動）
        
        
        session_regenerate_id(true);//セッションIDの再生成
        $_SESSION['chk_ssid']=session_id();//セッション変数に格納

    }
}

// menuを決める
function menu1()
{
    $menu1 = '<li class="nav-item"><a class="nav-link" href="index.php">一括予約申込</a></li><li class="nav-item"><a class="nav-link" href="select.php">予約一覧</a></li>';
    $menu1 .= '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
    return $menu1;
}

function menu2()
{
    $menu2 = '<li class="nav-item"><a class="nav-link" href="index.php">一括予約申込</a></li><li class="nav-item"><a class="nav-link" href="select.php">予約一覧</a></li>';
    $menu2 .= '<li class="nav-item"><a class="nav-link" href="user_index.php">user登録</a></li><li class="nav-item"><a class="nav-link" href="user_select.php">user管理</a></li>';    
    $menu2 .= '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li><li class="nav-link">★管理者ログイン中★</li>';
    return $menu2;
}

// $menuall =array(menu,menu2);
