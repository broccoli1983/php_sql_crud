<?php

include('functions.php'); //sql接続
$pdo = connect_to_db(); //必要なカラムとってくる

$id = $_POST['id']; //カラムを変数化
$todo = $_POST['username']; //カラムを変数化
$deadline = $_POST['password']; //カラムを変数化
// 各値をpostで受け取る $id = $_POST['id']; ...
// idを指定して更新するSQLを作成(UPDATE文)
$sql = "UPDATE t_account SET username=:username, password=:password,
           updated_at=sysdate() WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// 各値をpostで受け取る
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する 
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常に実行された場合は一覧ページファイルに移動し，処理を実行する 
    header("Location:user_read.php");
    exit();
}
