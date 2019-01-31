<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET,"name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name =$_POST["name"];
$url =$_POST["url"];
$comment =$_POST["comment"];



//2. DB接続します
// include("funcs.php");
 try {
   $pdo = new PDO('mysql:dbname=BOOK_DB;charset=utf8;host=localhost','root','');//mampは最後にroot
 } catch (PDOException $e) {
   exit('DbConnectionError:'.$e->getMessage());
 }


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,url,comment,indate)VALUES(:name,:url,:comment,sysdate());");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
//   function sqlError($stmt){
// if($status==false){
//   //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
//$error = $stmt->errorInfo();}
  if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("ErrorSQL:".$error[2]);}else{
  //５．index.phpへリダイレクト
  header("location: bm_list_view.php");
exit;
}
?>