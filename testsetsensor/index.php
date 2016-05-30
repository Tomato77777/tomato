<?php 
header("Content-type: text/plain; charset=UTF-8"); 
if (isset($_GET['set_val'])) 
{ 
 $val = date("Y/m/d H:i:s").$_GET['set_val'] . "<br />\n"; 
 $fp = fopen("../teststoragesensor.txt", "a"); 
 fwrite($fp, $val); 
 fclose($fp); 
} 
?> 
