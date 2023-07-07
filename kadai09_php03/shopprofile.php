<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */

$id = $_GET['id'];

// 以下の間、insert.phpからコピペしてくる

//2. DB接続します
//*** function化する！  *****************
try {
    $db_name = 'php03_kadai_db'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

//３．データ登録SQL作成　★prepare内はコピペ元から消して書き直す
// $stmt = $pdo->prepare('');
$stmt = $pdo->prepare('SELECT * FROM php03_kadai_table where id = :id;');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //数字はINT なので注意
$status = $stmt->execute(); //実行

// 以上の間、insert.phpからコピペしてきて一部改変



// 以下新たな学び　select.phpの「//３．データ表示」からコピペしてくる

$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

// vardumpでいったん確認！コンソールログ的な確認。
// var_dump($result);

?>




<!--
２．HTML
★以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* div {
            padding: 10px;
            font-size: 16px;
        } */
    </style>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/shopprofile.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <!-- actionをupdate.phpに変更して送信できるようにする -->
    <!-- <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>フリーアンケート</legend> -->
                <!-- value=　に $result['name'] ?"を追加 -->
                <!-- <label>名前：<input type="text" name="name" value="<?= $result['shopname'] ?>"></label><br>
                <label>Email：<input type="text" name="email" value="<?= $result['email'] ?>"></label><br>
                <label>年齢：<input type="text" name="age" value="<?= $result['age'] ?>"></label><br>
                <label><textarea name="content" rows="4" cols="40" value="<?= $result['content'] ?>"></textarea></label><br> -->
                <!-- hiddenのinputを追加する。hiddenは画面に表示されないが存在はする -->
                <!-- <input type="hidden" name='id' value="<?= $result['id'] ?>">
                <input type="submit" value="更新">  -->
                <!-- 送信→更新 -->
                <!-- フォームで送るのでupdate.phpでは受け取りから始まります -->
            </fieldset>
        </div>
    </form>

<!-- 課題用 -->

    
    <div class="grid">
        <div class="item0">
                <?= $view .= '<img src="' . $result['image'] . '" alt="写真" class="image">'?>;
        </div>

        <div class="item1">
        <p>施設名</p>
        </div>
        <div class="item2">
        <p><?= $result['shopname'] ?></p>               
        </div>

        <div class="item3">
        <p>最寄駅</p>               
        </div>
        <div class="item4">
        <?= $result['station'] ?>
        </div>

        <div class="item5">
        <p>所在地</p>
        </div>  
        <div class="item6">
        <?= $result['address'] ?>
        </div>
                
        <div class="item7">
        <p>業態カテゴリ</p>
        </div>
        <div class="item8">
        <?= $result['category'] ?>
        </div>
        
        <div class="item9">
        <p>開店時刻</p> 
        </div>
        <div class="item10">
        <?= $result['openingtime'] ?>
        </div>

        <div class="item11">
        <p>閉店時刻</p> 
        </div>
        <div class="item12">
        <?= $result['closingtime'] ?>
        </div>

        <div class="item13">
        <p>一日平均来店者数</p> 
        </div>
        <div class="item14">
        <?= $result['averagevisitors'] ?>
        </div>

        <div class="item15">
        <p>スピーカー設置タイプ</p> 
        </div>
        <div class="item16">
        <?= $result['devicetype'] ?>
        </div>

        <div class="item17">
        <p>客層1</p> 
        </div>
        <div class="item18">
        <?= $result['segment1'] ?>
        </div>

        <div class="item19">
        <p>客層2</p> 
        </div>
        <div class="item20">
        <?= $result['segment2'] ?>
        </div>

        <div class="item21">
        <p>客層3</p> 
        </div>
        <div class="item22">
        <?= $result['segment3'] ?>
        </div>

        <div class="item23">
        <p>タグ1</p> 
        </div>
        <div class="item24">
        <?= $result['tag1'] ?>
        </div>

        <div class="item25">
        <p>タグ2</p> 
        </div>
        <div class="item26">
        <?= $result['tag2'] ?>
        </div>

        <div class="item27">
        <p>タグ3</p> 
        </div>
        <div class="item28">
        <?= $result['tag3'] ?>
        </div>

    </div>
</div>





</body>

</html>
