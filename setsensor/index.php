<?php
header("Content-type: text/plain; charset=UTF-8");
if (isset($_GET['set_val']))
{
  $file_name = "../storagesensor.txt";
  $val = date("Y/m/d H:i//").$_GET['set_val'] . "<br />\n";
  $contents = file_get_contents($file_name);
  $contents = $val . "<br />\n" . $contents;
  $re = file_put_contents($file_name, $contents);
}
?>
