1 <?php 
2 header("Content-type: text/plain; charset=UTF-8"); 
3 if (isset($_GET['set_val'])) 
4 { 
5   $val = $_GET['set_val'] . ""; 
6   $fp = fopen("../storagscount.txt", "w+"); 
7   fwrite($fp, $val); 
8   fclose($fp); 
9 } 
10 ?> 
