<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$title   = $_POST["title"];
$author  = $_POST["author"];
$URL= $_POST["URL"];
$feedback = $_POST["feedback"];

//2. DB接続します
// include("funcs.php");
// $pdo = db_conn();
try {
      
  $pdo = new PDO('mysql:dbname=gs_db_kadai;charset=utf8;host=localhost','root','root');
  return $pdo;
} catch (PDOException $e) {
  exit('DB Connection Erorr:'.$e->getMessage());
}



//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(title,author,URL,feedback,indate)VALUES(:title,:author,:URL,:feedback,sysdate())");
$stmt->bindValue(':title', $title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':author', $author, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':URL', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':feedback', $feedback, PDO::PARAM_STR); 

// bindStr($stmt,$title);
// bindStr($stmt,$author);
// bindStr($stmt,$URL);    
// bindStr($stmt,$feedback);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  // sql_error();
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);
}else{
  // redirect("index.php");
  header("Location: index.php");
  exit();
 

}
?>
