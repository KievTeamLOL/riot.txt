<?php


function addToMatches($matchId, $match_data){
	include "config.php";
	include "connect.php";
	$season = $match_data["season"];
	$matchDuration = $match_data["matchDuration"];
	$region = $match_data["region"];
	$matchCreation = $match_data["matchCreation"];
	$query = "INSERT INTO matches(matchId, matchCreation, region, matchDuration, season) VALUES ($matchId, $matchCreation, '$region', $matchDuration, '$season')";
	if(!$mysqli->query($query)){
		echo "<font color='red'>DB: add data to matches - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		$mysqli->close();
		return false;
	}else {
		echo "<font color='green'>DB: add data to matches - successfully <br></font>";
		$mysqli->close();
		return true;
	}
}

function addToParticipants($matchId, $match_data){
	include "config.php";
	include "connect.php";
	$query = "SELECT id_matches FROM matches WHERE matchId = $matchId"; //!mb db error 
	$res = $mysqli->query($query); 
	$row = $res->fetch_assoc();
   	$id_matches = $row["id_matches"];
	$participants = $match_data["participants"];
	foreach($participants as $index=>$player){
		$spell1Id = $player["spell1Id"];
		$spell2Id = $player["spell2Id"];
		$championId = $player["championId"];
		$stats = $player["stats"];
		$item0 = $stats["item0"];
		$item1 = $stats["item1"];
		$item2 = $stats["item2"];
		$item3 = $stats["item3"];
		$item4 = $stats["item4"];
		$item5 = $stats["item5"];
		$item6 = $stats["item6"];
		$totalDamageTaken = $stats["totalDamageTaken"];
		$physicalDamageTaken = $stats["physicalDamageTaken"];
		$magicDamageTaken = $stats["magicDamageTaken"];
		$trueDamageTaken = $stats["trueDamageTaken"];
		$totalDamageDealtToChampions = $stats["totalDamageDealtToChampions"];
		$physicalDamageDealtToChampions = $stats["physicalDamageDealtToChampions"];
		$magicDamageDealtToChampions = $stats["magicDamageDealtToChampions"];
		$trueDamageDealtToChampions = $stats["trueDamageDealtToChampions"];
		$kills = $stats["kills"];
		$deaths = $stats["deaths"];
		$assists = $stats["assists"];
		$unrealKills = $stats["unrealKills"];
		$tripleKills = $stats["tripleKills"];
		$quadraKills = $stats["quadraKills"];
		$pentaKills = $stats["pentaKills"];
		$goldEarned = $stats["goldEarned"];
		$goldSpent = $stats["goldSpent"];
		$minionsKilled = $stats["minionsKilled"];
		$neutralMinionsKilled = $stats["neutralMinionsKilled"];	
		$query = "INSERT INTO participants(id_matches, championId, item0, item1, 		item2,item3,item4,item5,item6,spell1Id,spell2Id,totalDamageTaken,physicalDamageTaken,magicDamageTaken,
trueDamageTaken,totalDamageDealtToChampions,physicalDamageDealtToChampions,magicDamageDealtToChampions,
trueDamageDealtToChampions,kills,deaths,assists,unrealKills,tripleKills,quadraKills,pentaKills,goldEarned,
goldSpent,minionsKilled,neutralMinionsKilled) VALUES ($id_matches, $championId, $item0, $item1, $item2,$item3,$item4,$item5,$item6,$spell1Id,$spell2Id,$totalDamageTaken,$physicalDamageTaken,$magicDamageTaken,$trueDamageTaken,$totalDamageDealtToChampions,$physicalDamageDealtToChampions,$magicDamageDealtToChampions,$trueDamageDealtToChampions,$kills,$deaths,$assists,$unrealKills,$tripleKills,$quadraKills,$pentaKills,$goldEarned,$goldSpent,$minionsKilled,$neutralMinionsKilled)";
		if(!$mysqli->query($query)){
			//echo "<font color='red'>DB: add data Player $index to participants - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
			//echo "<font color='green'>DB: add data Player $index to participants - successfully <br></font>";
		}
		unset($index,$player,$spell1Id,$spell1Id,$spell2Id,$championId,$stats,$item0,$item1,$item2,$item3 ,$item4,$item5,$item6,$totalDamageTaken,$physicalDamageTaken,$magicDamageTaken,$trueDamageTaken,$totalDamageDealtToChampions,$physicalDamageDealtToChampions,$magicDamageDealtToChampions,$trueDamageDealtToChampions,$kills,$deaths,$assists,$unrealKills,$tripleKills,$quadraKills,$pentaKills,$goldEarned,$goldSpent,$minionsKilled,$neutralMinionsKilled,$query );	
	}
	$mysqli->close();
	
}

function addToTeams($matchId, $match_data){
	include "config.php";
	include "connect.php";
	$query = "SELECT id_matches FROM matches WHERE matchId = $matchId"; //!mb db error 
	$res = $mysqli->query($query); 
	$row = $res->fetch_assoc();
   	$id_matches = $row["id_matches"];
	$teams = $match_data["teams"];
	foreach($teams as $index=>$team){
		$baronKills = $team["baronKills"];
		$towerKills = $team["towerKills"];
		$dragonKills = $team["dragonKills"];
		$query = "INSERT INTO teams(id_matches, baronKills, towerKills, dragonKills) VALUES 			($id_matches, $baronKills, $towerKills, $dragonKills)";
		if(!$mysqli->query($query)){
			//echo "<font color='red'>DB: add data $index to teams - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		}else {
		//echo "<font color='green'>DB: add data $index to teams - successfully <br></font>";
		}
		unset($index,$team,$baronKills,$towerKills,$dragonKills,$query);
	}
	$mysqli->close();
}

function addToBans($matchId, $match_data){
	include "config.php";
	include "connect.php";
	$query = "SELECT id_matches FROM matches WHERE matchId = $matchId"; //!mb db error 
	$res = $mysqli->query($query); 
	$row = $res->fetch_assoc();
   	$id_matches = $row["id_matches"];
	$teams = $match_data["teams"];
	foreach($teams as $index=>$team){
		$bans = $team["bans"];
		foreach($bans as $i=>$ban){
			$championId =$ban["championId"];
			$query = "INSERT INTO bans(id_matches, championId) VALUES($id_matches, $championId)";
			if(!$mysqli->query($query)){
				//echo "<font color='red'>DB: add data $index.$i to bans - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
			}else {
			       //echo "<font color='green'>DB: add data $index.$i to  bans - successfully <br></font>";
			}
			unset($i,$ban,$championId,$query);
		}
		unset($index,$team,$bans);
	}
	$mysqli->close();
}

function checkSleep($req_count){
	if($req_count>=10){
		echo "<font color='yellow'> sleep 11 sec...</font></br>";
		sleep(11);
		return 0;
	}else{
		return $req_count;
	}
	$mysqli->close();
}

?>
