


<?php

include "config.php";
include "stats_func.php";
include "connect.php";

$pop_items = popularItems();

echo "<table border='1'><tr><th>Popular  items</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($pop_items as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>";



/*
$pop_spells = popularSpells();

echo "<table border='1'><tr><th>Popular  spells</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($pop_spells as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>";


$stats_teams = statsTeams();

echo "<table border='1'><tr><th>stats_teams</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($stats_teams as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>";


$stats_teams = popularChampions();

echo "<table border='1'><tr><th>Popular champions</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($stats_teams as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>";

$duration = matchDuration();

echo "<table border='1'><tr><th>Duration</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($duration as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>";

$dmgTaken = dmgTaken();

echo "<table border='1'><tr><th>dmgTaken</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($dmgTaken as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>";


$dmgDealt = dmgDealt();

echo "<table border='1'><tr><th>dmgDealt</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($dmgDealt as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>"

$KDA = statsKDA();

echo "<table border='1'><tr><th>kda</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($KDA as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>"


$other = statsOther();

echo "<table border='1'><tr><th>other</th></tr><tr><th>Total</th></tr><tr><td>";
foreach($other as $key=>$value){
	echo $key." = ".$value."<br>";
}
echo "</td></tr></table>"

*/
?>
