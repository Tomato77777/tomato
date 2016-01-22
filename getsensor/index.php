<?php
$fp = fopen("../storagesensor.txt", "r");
while ($line = fgets($fp)) {
  print($line);
}
fclose($fp);
?>
