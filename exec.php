
<?php 




echo exec("C:/Users/i7/Anaconda3/python C:/xampp/htdocs/scraperbot/selnium_ignt/ArchivePY/shell_test.py");
$retrun_val = exec("C:/Users/i7/Anaconda3/python C:/xampp/htdocs/scraperbot/selnium_ignt/ArchivePY/shell_test.py");

echo $retrun_val;



$session_id = "1543031865";
echo exec("python3 C:/xampp/htdocs/scraperbot/selnium_ignt/gp_main.py ".$session_id);

?>