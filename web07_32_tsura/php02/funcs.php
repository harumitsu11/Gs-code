<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}
//DB Connection
function db_conn(){
  
    try {
      
      $pdo = new PDO('mysql:dbname=gs_db_kadai;charset=utf8;host=localhost','root','root');
      return $pdo;
    } catch (PDOException $e) {
      exit('DB Connection Erorr:'.$e->getMessage());
    }
    }
    //SQL error
    function sql_error(){
            //execute（SQL実行時にエラーがある場合）
        $error = $stmt->errorInfo();
        exit("SQLErorr:".$error[2]);
  
    }
    //recirect("index.php");
  function redirect($file_name){
   
    header("Location: ".$file_name);  //:のあとは半角スペースを必ず入れる
    exit();
    }
    function bindStr($stmt,$title){
        $stmt->bindValue(':'.$title, $title,PDO::PARAM_STR);
    }
    
