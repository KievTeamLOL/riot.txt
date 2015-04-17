


<?php

include "config.php";
include "stats_func.php";
include "connect.php";


$pop_items = popularItems();

foreach($pop_items as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}




$popularSpells = popularSpells();

foreach($popularSpells as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}




$popularBans = popularBans();

foreach($popularBans as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}




$statsTeams = statsTeams();

foreach($statsTeams as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}

	



$matchDuration = matchDuration();

foreach($matchDuration as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}

	


$dmgTaken = dmgTaken();

foreach($dmgTaken as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}

	


$dmgDealt = dmgDealt();

foreach($dmgDealt as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}

	


$statsKDA = statsKDA();

foreach($statsKDA as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}



$statsOther = statsOther();

foreach($statsOther as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}




$popularPicks = popularPicks();

foreach($popularPicks as $key=>$value){
	echo $key." = ".$value."<br>";
	$query = "INSERT INTO total(`key`, `value`) VALUES ('$key','$value')";
		if(!$mysqli->query($query)){
			echo "<font color='red'>DB: add data  - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			echo "<font color='green'>DB: add data - successfully <br></font>";
		}
}

	$mysqli->close();

?>
