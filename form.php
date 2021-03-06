<?php
session_start();

//POSTデータの取得
$email  = $_POST["email"];
$message  = $_POST["message"];

//入力しているかどうかチェック
if(
    !isset($_POST["email"]) || $_POST["email"]=="" ||
    !isset($_POST["message"]) || $_POST["message"]==""
){
    header("Location: form.html");
    exit;
}

//DBと接続
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }

$stmt = $pdo -> prepare("INSERT INTO form_table(id, email, message, indate)
VALUES(NULL, :a1, :a2, sysdate())");

$stmt->bindParam(':a1', $email, PDO::PARAM_STR); //数値の場合は PARAM_INT
$stmt->bindParam(':a2', $message, PDO::PARAM_STR);
header("Location: top-page.php");
exit;

?>
