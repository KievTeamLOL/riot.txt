<?php
 
include "config.php";

include "functions.php";

//current date: 1428774870 date begin: 1428169800 
$api_key=API_KEY;
$region = REGION;

$req_count=0;
$time = time(); //current date
$date = 1428856770+600; //week ago (05.04.2015 12:25:00)
$end_time = $date+86400*2; 
echo "current date:".$time."date begin:".date('d.m.Y h:i:s', $date)."date end:".date('d.m.Y h:i:s', $end_time)."<br>";
while($date<$end_time){

$data_req = "https://$region.api.pvp.net/api/lol/$region/v4.1/game/ids?beginDate=$date&api_key=$api_key";

$data = json_decode(file_get_contents($data_req), TRUE); //matches id data
if(!isset($data)){
	echo "<font color='red'> Request data error!</font><br>";
	exit();
}
echo "matches found:".count($data)."<br>";
$req_count++;
$req_count=checkSleep($req_count);
foreach($data as $index=>$matchId){
 	echo "$index. Match id # $matchId check...";
	$match_req = "https://$region.api.pvp.net/api/lol/$region/v2.2/match/$matchId?api_key=$api_key";
	$match_data = json_decode(file_get_contents($match_req), TRUE); //match stats id data
	if(!isset($match_req) || $match_req==""){
		echo "<font color='red' Request error!</font><br>";
	} else{
		if (strcmp($match_data["queueType"],"URF_5x5")==0){
			echo "urf mode<br>";
			if(addToMatches($matchId, $match_data)){
				addToParticipants($matchId, $match_data);
				addToTeams($matchId, $match_data);
				addToBans($matchId, $match_data);
			}	
		}else{
			echo "not urf mode<br>";
		}
	}
	$req_count++;
	$req_count=checkSleep($req_count);
	unset($index,$matchId,$match_req,$match_data);
}

	echo "<font color='blue'> update time! </font>";
	$date=$date+300;
	unset($data_req,$data);
}
echo "<font color='blue'> WORK DONE </font>";

?>
