<?php
header("Content-type: text/plain; charset=UTF-8");
if (isset($_GET['set_val']))
{
  $val = $_GET['set_val'] . ",";
  $fp = fopen("../storagetest", "w+");
  fwrite($fp, $val);
  fclose($fp);
}
?>
