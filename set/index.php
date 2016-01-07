<?php
header("Content-type: text/plain; charset=UTF-8");
if (isset($_GET['set_val']))
{
  $state = $_GET['set_val'];
  $fp = fopen("../storege.txt", "w");
  fwrite($fp, $state);
  fclose($fp);
}
?>