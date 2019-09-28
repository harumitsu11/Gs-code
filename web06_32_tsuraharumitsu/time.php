<?php
$d = date("H");
if($d>=1 && $d<=18){
    echo '<style>';
    echo 'body{background:#F00;}';
}else if ($d>=19 && $d<=23){
    echo 'body{background:#000;}';
}
echo '</style>';
?>