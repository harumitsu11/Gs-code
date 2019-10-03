<?php

$name   = $_GET["name"];
$author = $_GET["author"];
$email  = $_GET["email"];
$naiyou = $_GET["naiyou"];
$id     = $_GET["id"];

include("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("UPDATE gs_bm_table SET name=:name, author=:author,email=:email,naiyou=:naiyou WHERE id=:id");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':author', $author, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


if($status==false){
  sql_error();
}else{
  redirect("select.php");
  // function redirect($file_name){
  //   header("Location: ".$file_name);
  //   exit();
//  　header("Location: http://localhost/php03/select.php");
// 　exit();

}



?>
