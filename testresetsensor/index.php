<?php 
header("Content-type: text/plain; charset=UTF-8");
$val = "情報なし";
$fp = fopen("../storagesensor.txt", "w");
fwrite($fp, $val);
fclose($fp);
?>
