<?php
$mysqli = new mysqli(HOST,USER,PASSWORD,DB);

/* check connection */ 
if ($mysqli->connect_errno) {
    printf("<font color='red'>DB: Connect failed - %s <br></font>", $mysqli->connect_error);
    exit();
}

//printf("<font color='green'>DB: Connect correct - %s <br></font>", $mysqli->host_info);

$mysqli->query("SET NAMES 'utf8'");
?>
