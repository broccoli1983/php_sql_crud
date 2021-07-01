<?php
// $dbn = 'mysql:dbname=gsacf_d08_10;charset=utf8;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }
include('functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行

$sql = 'SELECT * FROM t_account WHERE is_deleted = 0';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
  $output = "";
  // foreach ($result as $record) {
  //   $output .= "<tr>";
  //   $output .= "<td>{$record["deadline"]}</td>";
  //   $output .= "<td>{$record["todo"]}</td>";
  //   // edit deleteリンクを追加

  //   $output .= "</tr>";
  // }
  foreach ($result as $record) {
    $output .= "<tr>";
    $output .= "<td>{$record["username"]}</td>";
    $output .= "<td>{$record["password"]}</td>";
    // edit deleteリンクを追加
    $output .= "<td>
           <a href='user_edit.php?id={$record["id"]}'>edit</a>
           </td>";
    $output .= "<td>
           <a href='user_delete.php?id={$record["id"]}'>delete</a>
           </td>";
    $output .= "</tr>";
  }
  // $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
  // 今回は以降foreachしないので影響なし
  unset($record);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント情報管理画面</title>
</head>

<body>
  <fieldset>
    <legend>アカウント情報管理画面</legend>
    <a href="user_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>username</th>
          <th>password</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>