<?php
include('functions.php'); // 関数を記述したファイルの読み込み
$id = $_GET['id']; // 送信されたidをgetで受け取る

// DB接続&id名でテーブルから検索
$pdo = connect_to_db();
$sql = 'SELECT * FROM t_account WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// fetch()で1レコード取得できる.
if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント情報編集画面</title>
</head>

<body>
  <form action="user_update.php" method="POST">
    <fieldset>
      <legend>アカウント情報編集画面</legend>
      <a href="user_read.php">一覧画面</a>
      <div>
        <!-- htmlのタグに初期値として設定 -->
        username: <input type="text" name="username" value="<?= $record["username"] ?>">
      </div>
      <div>
        password: <input type="text" name="password" value="<?= $record["password"] ?>">
      </div>
      <!-- idを見えないように送る
      input type="hidden"を使用する!
      form内に以下を追加 -->
      <input type="hidden" name="id" value="<?= $record['id'] ?>">
      <div>
        <button>更新</button>
      </div>

    </fieldset>
  </form>

</body>

</html>