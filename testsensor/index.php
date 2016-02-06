<?php 
$fp = fopen("../teststoragesensor.txt", "r"); 
while ($line = fgets($fp)) { 
 print($line); 
} 
fclose($fp); 
?> 
