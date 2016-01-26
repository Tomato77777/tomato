<?php 
2 $fp = fopen("../storagecount.txt", "r"); 
3 while ($line = fgets($fp)) { 
4   print($line); 
5 } 
6 fclose($fp); 
7 ?> 

