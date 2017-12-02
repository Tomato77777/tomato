<?php 
$fp = fopen("../storagetest.txt", "r"); 
while ($line = fgets($fp)) { 
  print($line); 
} 
fclose($fp); 
?> 
