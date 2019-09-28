<?php
$d = date("H");
$d = 23;
// $d = date("Y/m/d H:i:s");
// echo $d;
// if ($d>=1 && $d<=18){
//     echo '<style>';
//     echo 'body{background:#F00;}';
//     echo '</style>';
// }
    echo '<style>'; 
    if ($d>=1 && $d<=18){
        echo 'body{background:#F00;}';
    }else if ($d>=19 && $d<=23){
        echo 'body{background:#00FF00;}';
    }
    echo '</style>'; 
?>