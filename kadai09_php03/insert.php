<?php
ini_set('display_errors', 1);

//1. POSTデータ取得
$name   = $_POST['name'];
$email  = $_POST['email'];
$age    = $_POST['email'];
$content = $_POST['content'];

$shopname = $_POST['shopname'];
$station = $_POST['station'];
$address = $_POST['address'];
$category = $_POST['category'];
$openingtime = $_POST['openingtime'];
$closingtime = $_POST['closingtime'];
$averagevisitors = $_POST['averagevisitors'];
$devicetype = $_POST['devicetype'];
$segment1 = $_POST['segment1'];
$segment2 = $_POST['segment2'];
$segment3 = $_POST['segment3'];
$tag1 = $_POST['tag1'];
$tag2 = $_POST['tag2'];
$tag3 = $_POST['tag3'];

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


//2.5 画像ファイルのアップロード処理
$upload_dir = 'upload/'; // 画像のアップロード先ディレクトリ

// アップロードされたファイルの情報を取得
$uploaded_file = $_FILES['image']['tmp_name'];
$filename = $_FILES['image']['name'];
$file_path = $upload_dir . $filename;

// ファイルを指定のディレクトリに移動
if (move_uploaded_file($uploaded_file, $file_path)) {
  // 移動成功した場合の処理
  echo 'ファイルをアップロードしました。';
} else {
  // 移動失敗した場合の処理
  echo 'ファイルのアップロードが失敗しました。';
}


//３．データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
                        php03_kadai_table(
                            name, email, age, content, indate, shopname, station, address, category, openingtime, closingtime, averagevisitors, devicetype, segment1, segment2, segment3, tag1, tag2, tag3, image
                            )
                        VALUES (
                            :name, :email, :age, :content, sysdate(), :shopname, :station, :address, :category, :openingtime, :closingtime, :averagevisitors, :devicetype, :segment1, :segment2, :segment3, :tag1, :tag2, :tag3, :image
                            );'
);

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT); //PARAM_INTなので注意
$stmt->bindValue(':content', $content, PDO::PARAM_STR);

$stmt->bindValue(':shopname', $shopname, PDO::PARAM_STR);
$stmt->bindValue(':station', $station, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':openingtime', $openingtime, PDO::PARAM_STR);
$stmt->bindValue(':closingtime', $closingtime, PDO::PARAM_STR);
$stmt->bindValue(':averagevisitors', $averagevisitors, PDO::PARAM_STR);
$stmt->bindValue(':devicetype', $devicetype, PDO::PARAM_STR);
$stmt->bindValue(':segment1', $segment1, PDO::PARAM_STR);
$stmt->bindValue(':segment2', $segment2, PDO::PARAM_STR);
$stmt->bindValue(':segment3', $segment3, PDO::PARAM_STR);
$stmt->bindValue(':tag1', $tag1, PDO::PARAM_STR);
$stmt->bindValue(':tag2', $tag2, PDO::PARAM_STR);
$stmt->bindValue(':tag3', $tag3, PDO::PARAM_STR);

$stmt->bindValue(':image', $file_path, PDO::PARAM_STR);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: index.php');
    exit();
}
