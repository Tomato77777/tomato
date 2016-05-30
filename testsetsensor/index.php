<?php 
header("Content-type: text/plain; charset=UTF-8"); 
if (isset($_GET['set_val'])) 
{ 
 $val = date('Y年m月d日H+1時i分').$_GET['set_val'] . "<br />\n"; 
 $fp = fopen("../teststoragesensor.txt", "a"); 
 fwrite($fp, $val); 
 fclose($fp); 
} 
?> 
