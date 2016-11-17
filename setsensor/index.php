<?php
header("Content-type: text/plain; charset=UTF-8");
date_default_timezone_set('Asia/Tokyo');

if (isset($_GET['set_val']))
{
  $val = date("Y/m/d H:i//").$_GET['set_val'] . "<br />\n";
  $fp = fopen("../storagesensor.txt", "a");
  fwrite($fp, $val);
  fclose($fp);
}
?>

