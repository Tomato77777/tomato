<?php 
header("Content-type: text/plain; charset=UTF-8");
$val = "OK";
$fp = fopen("../teststoragesensor.txt", "w");
fwrite($fp, $val);
fclose($fp);
?>
