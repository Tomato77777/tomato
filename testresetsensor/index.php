<?php 
header("Content-type: text/plain; charset=UTF-8"); 
$val = ""; 
$fp = fopen("../teststoragesensor.txt", "w"); 
fwrite($fp, $val); 
fclose($fp); 
?> 
