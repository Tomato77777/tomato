<?php
header("Content-type: text/plain; charset=UTF-8");
if (isset($_GET['set_val1']))
{ 
  $val = $_GET['set_val'] . ",";
  $fp = fopen("../storage1.txt", "w+");
  fwrite($fp, $val);
  fclose($fp);
 }
 ?>
