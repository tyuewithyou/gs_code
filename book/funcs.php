<?php
//共通に使う関数を記述

function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}

function db_con(){
    try {
        $pdo = new PDO('mysql:dbname=BOOK_DB;charset=utf8;host=localhost','root','');//mampは最後にroot
        return $pdo;} 
      catch (PDOException $e) {
        exit('DbConnectionError:'.$e->getMessage());
      }
}
function redirect($page){
    header("location: ",$page);}

    // function sqlError($stmt){
    //     if($status==false){
    //       //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    //       $error = $stmt->errorInfo();
    //       exit("ErrorSQL:".$error[2]);}
?>