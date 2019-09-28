<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        tr,td,th{
            border:1px outset #000;
        }
    </style>
</head>
<body>
    
<?php
$filename = 'data.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
echo '<table>';
while (!feof($fp)) {
 
  echo '<tr>';
  
  
  $txt = fgetss($fp, 4096, '<h1>');
    $a = explode(",",$txt);
    
    
    
    echo '<th bgcolor="violet">'.日時.'</th>';
    echo '<td bgcolor="violet">'.$a[0].'</td>';
    echo '<td bgcolor="yellowgreen">'.名前.'</td>';
    echo '<td bgcolor="yellowgreen">'.$a[1].'</td>';
    echo '<td bgcolor="orange">'.メールアドレス.'</td>';
    echo '<td bgcolor="orange">'.$a[2].'</td>';
    echo '<td bgcolor="deeppink">'.年齢.'</td>';
    echo '<td bgcolor="deeppink">'.$a[3].'</td>';
    echo '<td bgcolor="lime">'.ご意見.'</td>';
    echo '<td bgcolor="lime">'.$a[4].'</td>';
    echo '</tr>';
 
}
echo '</table>';
// fcloseでファイルを閉じる
fclose($fp);


 
?>    
</body>
</html>
