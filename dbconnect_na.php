<?php   
$db_euw = mysqli_connect( 
            'localhost', 
            'root',      
            '',   
            'urf_na') or die("Error " . mysqli_connect_error());
mysqli_set_charset($db_euw, "utf-8");

header('Content-Type: text/html; charset=utf-8');
?>
