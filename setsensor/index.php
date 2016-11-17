<?php
date_default_timezone_set('Asia/Tokyo');

if (isset($_GET['set_val']))
{
  $file_name = "../storagesensor.txt";
  $set_val = $_GET['set_val']
  $val = date("Y/m/d H:i//").$set_val . "℃";
  $contents = file_get_contents($file_name);
  $contents = $val . "<br />\n" . $contents;
  $re = file_put_contents($file_name, $contents);
}
?>
