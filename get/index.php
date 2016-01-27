<?php
$fp = fopen("../storage.txt", "w+");
while ($line = fgets($fp)) {
  print($line);
}
fclose($fp);
?>
