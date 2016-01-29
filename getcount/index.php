<?php 
$fp = fopen("../storagecount.txt", "r"); 
while ($line = fgets($fp)) { 
  print($line); 
} 
fclose($fp); 
?>
