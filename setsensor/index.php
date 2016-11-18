<?php
header("Content-type: text/plain; charset=UTF-8");
date_default_timezone_set('Asia/Tokyo');

if (isset($_GET['set_val']))
{
  $file_name = "../storagesensor.txt";
  $val = date("Y/m/d H:i//").$_GET['set_val'];
  $contents = file_get_contents($file_name);
  $contents = $val . "<br />\n" . $contents;
  file_put_contents($file_name, $contents);
}
?>
