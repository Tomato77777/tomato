<?php
$fp = fopen("../storage.txt", "r");
while ($line = fgets($fp)) {
  print($line);
}
fclose($fp);
?>
