<?php

//return array of 6 popular items
function popularItems(){

	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT item0,item1,item2,item3,item4,item5 FROM participants";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select items - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select items - successfully <br></font>";
		$items = array();
		$i=0;
		while ($row = $result->fetch_assoc()) {
			foreach($row as $value){
				if($value!=0){
       		 			$items[$i]=$value;
					$i++;
				}
			}
		}
		$items_count = array_count_values($items);
		$items_sort = array_count_values($items);
		rsort($items_sort);
		$pop_items = array();
		for($i=0;$i<6;$i++){
			foreach($items_count as $key=>$value){
				if($value == $items_sort[$i]){
					$pop_items["item$i"]=$key;
				}
			}
		}
		foreach($pop_items as $key=>$itemId){
			$data_req = "https://global.api.pvp.net/api/lol/static-data/$region/v1.2/item/$itemId?api_key=$api_key";
			$data = json_decode(file_get_contents($data_req), TRUE); 
			$pop_items[$key] = str_replace("'","",$data["name"]); 
		}
		$mysqli->close();
		return $pop_items;	
		
	}	
}



//return array of 4 popular spells
function popularSpells(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT spell1Id,spell2Id FROM participants";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select spells - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select spells - successfully <br></font>";
		$spells = array();
		$i=0;
		while ($row = $result->fetch_assoc()) {
			foreach($row as $value){
				if($value!=0){
       		 			$spells[$i]=$value;
					$i++;
				}
			}
		}
		$spells_count = array_count_values($spells);
		$spells_sort = array_count_values($spells);
		rsort($spells_sort);
		$pop_spells = array();
		for($i=0;$i<4;$i++){
			foreach($spells_count as $key=>$value){
				if($value == $spells_sort[$i]){
					$pop_spells["spell$i"]=$key;
				}
			}
		}
		foreach($pop_spells as $key=>$spellId){
			$data_req = "https://global.api.pvp.net/api/lol/static-data/$region/v1.2/summoner-spell/$spellId?api_key=$api_key";
			$data = json_decode(file_get_contents($data_req), TRUE); 
			$pop_spells[$key] = $data["name"]; 
		}
		$mysqli->close();
		return $pop_spells;
		
	}


}

//return array of 10 popular ban champions
function popularBans(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT championId FROM bans";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select champions - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select champions - successfully <br></font>";
		$champions = array();
		$i=0;
		while ($row = $result->fetch_assoc()) {
       		 	$champions[$i]=$row["championId"];
			$i++;
		}
		$champions_count = array_count_values($champions);
		$champions_sort = array_count_values($champions);
		rsort($champions_sort);
		$pop_champions = array();
		for($i=0;$i<10;$i++){
			foreach($champions_count as $key=>$value){
				if($value == $champions_sort[$i]){
					$pop_champions["banChampion$i"]=$key;
				}
			}
		}
		foreach($pop_champions as $key=>$championId){
			$data_req = "https://global.api.pvp.net/api/lol/static-data/$region/v1.2/champion/$championId?api_key=$api_key";
			$data = json_decode(file_get_contents($data_req), TRUE); 
			$pop_champions[$key] = $data["name"]; 
		}
		$mysqli->close();
		return $pop_champions;
		
	}


}

//return array of 3 team stats (barons, dragons, towers kills)
function statsTeams(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT baronKills,towerKills,dragonKills FROM teams";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select teams - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select teams - successfully <br></font>";
		$teams = array("baronKills"=>0,"towerKills"=>0,"dragonKills"=>0 );
		while ($row = $result->fetch_assoc()) {
			$teams["baronKills"]+=$row["baronKills"];
			$teams["towerKills"]+=$row["towerKills"];
			$teams["dragonKills"]+=$row["dragonKills"];	
		}
		return $teams;	
	}


}

//return array (int seconds) of games duration (total,max,min,mid)
function matchDuration(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT matchDuration FROM matches";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select duration - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select duration - successfully <br></font>";
		$total_duration=0;
		$max_duration=0;
		$min_duration = 1000000;
		$count = 0;
		while ($row = $result->fetch_assoc()) {
			$total_duration+=$row["matchDuration"];	
			$count++;
			if($row["matchDuration"]>$max_duration){
				$max_duration=$row["matchDuration"];
			}
			if($row["matchDuration"]<$min_duration){
				$min_duration=$row["matchDuration"];
			}
		}
		$mid_duration = floor($total_duration/$count);
		$duration =  array("totalDuration"=>$total_duration,"maxDuration"=>$max_duration,"minDuration"=>$min_duration, "midDuration"=>$mid_duration);
		$mysqli->close();
		return $duration;	
	}


}




//return array of dmg taken (total,max,min,mid)
function dmgTaken(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT totalDamageTaken,physicalDamageTaken,magicDamageTaken,trueDamageTaken FROM participants";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select dmg taken - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select dmg taken - successfully <br></font>";
		//totalDmgTaken
		$total_totalDmgTaken=0;
		$max_totalDmgTaken=0;
		$min_totalDmgTaken = 1000000;
		//physDmgTaken
		$total_physDmgTaken=0;
		$max_physDmgTaken=0;
		$min_physDmgTaken = 1000000;
		//magDmgTaken
		$total_magDmgTaken=0;
		$max_magDmgTaken=0;
		$min_magDmgTaken = 1000000;
		//trueDmgTaken
		$total_trueDmgTaken=0;
		$max_trueDmgTaken=0;
		$min_trueDmgTaken = 1000000;
		
		$count = 0;
		while ($row = $result->fetch_assoc()) {
			//totalDmgTaken
			$total_totalDmgTaken+=$row["totalDamageTaken"];	
			if($row["totalDamageTaken"]>$max_totalDmgTaken){
				$max_totalDmgTaken=$row["totalDamageTaken"];
			}
			if($row["totalDamageTaken"]<$min_totalDmgTaken && $row["totalDamageTaken"]!=0){
				$min_totalDmgTaken=$row["totalDamageTaken"];
			}
			//physDmgTaken
			$total_physDmgTaken+=$row["physicalDamageTaken"];	
			if($row["physicalDamageTaken"]>$max_physDmgTaken){
				$max_physDmgTaken=$row["physicalDamageTaken"];
			}
			if($row["physicalDamageTaken"]<$min_physDmgTaken && $row["physicalDamageTaken"]!=0){
				$min_physDmgTaken=$row["physicalDamageTaken"];
			}
			//magDmgTaken
			$total_magDmgTaken+=$row["magicDamageTaken"];	
			if($row["magicDamageTaken"]>$max_magDmgTaken){
				$max_magDmgTaken=$row["magicDamageTaken"];
			}
			if($row["magicDamageTaken"]<$min_magDmgTaken && $row["magicDamageTaken"]!=0){
				$min_magDmgTaken=$row["magicDamageTaken"];
			}
			//trueDmgTaken
			$total_trueDmgTaken+=$row["trueDamageTaken"];	
			if($row["trueDamageTaken"]>$max_trueDmgTaken){
				$max_trueDmgTaken=$row["trueDamageTaken"];
			}
			if($row["trueDamageTaken"]<$min_trueDmgTaken && $row["trueDamageTaken"]!=0){
				$min_trueDmgTaken=$row["trueDamageTaken"];
			}
			$count++;
		}
		//totalDmgTaken
		$mid_totalDmgTaken = floor($total_totalDmgTaken/$count);
		//physDmgTaken
		$mid_physDmgTaken = floor($total_physDmgTaken/$count);
		//magDmgTaken
		$mid_magDmgTaken = floor($total_magDmgTaken/$count);
		//trueDmgTaken
		$mid_trueDmgTaken = floor($total_trueDmgTaken/$count);
			
		$dmgTaken =  array(
			//totalDmgTaken
			"total_totalDmgTaken"=>$total_totalDmgTaken,
			"max_totalDmgTaken"=>$max_totalDmgTaken,
			"min_totalDmgTaken"=>$min_totalDmgTaken,
			"mid_totalDmgTaken"=>$mid_totalDmgTaken,
			//physDmgTaken
			"total_physDmgTaken"=>$total_physDmgTaken,
			"max_physDmgTaken"=>$max_physDmgTaken,
			"min_physDmgTaken"=>$min_physDmgTaken,
			"mid_physDmgTaken"=>$mid_physDmgTaken,
			//magDmgTaken
			"total_magDmgTaken"=>$total_magDmgTaken,
			"max_magDmgTaken"=>$max_magDmgTaken,
			"min_magDmgTaken"=>$min_magDmgTaken,
			"mid_magDmgTaken"=>$mid_magDmgTaken,
			//trueDmgTaken
			"total_trueDmgTaken"=>$total_trueDmgTaken,
			"max_trueDmgTaken"=>$max_trueDmgTaken,
			"min_trueDmgTaken"=>$min_trueDmgTaken,
			"mid_trueDmgTaken"=>$mid_trueDmgTaken

		);
		$mysqli->close();
		return $dmgTaken;	
	}
}

//return array of dmg dealt to champions (total,max,min,mid)
function dmgDealt(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT totalDamageDealtToChampions,physicalDamageDealtToChampions,magicDamageDealtToChampions,trueDamageDealtToChampions FROM participants";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select dmg dealt - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select dmg dealt - successfully <br></font>";
		//totalDmgDealt
		$total_totalDmgDealt=0;
		$max_totalDmgDealt=0;
		$min_totalDmgDealt = 1000000;
		//physDmgDealt
		$total_physDmgDealt=0;
		$max_physDmgDealt=0;
		$min_physDmgDealt = 1000000;
		//magDmgDealt
		$total_magDmgDealt=0;
		$max_magDmgDealt=0;
		$min_magDmgDealt = 1000000;
		//trueDmgDealt
		$total_trueDmgDealt=0;
		$max_trueDmgDealt=0;
		$min_trueDmgDealt = 1000000;
		
		$count = 0;
		while ($row = $result->fetch_assoc()) {
			//totalDmgDealt
			$total_totalDmgDealt+=$row["totalDamageDealtToChampions"];	
			if($row["totalDamageDealtToChampions"]>$max_totalDmgDealt){
				$max_totalDmgDealt=$row["totalDamageDealtToChampions"];
			}
			if($row["totalDamageDealtToChampions"]<$min_totalDmgDealt && $row["totalDamageDealtToChampions"]!=0){
				$min_totalDmgDealt=$row["totalDamageDealtToChampions"];
			}
			//physDmgDealt
			$total_physDmgDealt+=$row["physicalDamageDealtToChampions"];	
			if($row["physicalDamageDealtToChampions"]>$max_physDmgDealt){
				$max_physDmgDealt=$row["physicalDamageDealtToChampions"];
			}
			if($row["physicalDamageDealtToChampions"]<$min_physDmgDealt && $row["physicalDamageDealtToChampions"]!=0){
				$min_physDmgDealt=$row["physicalDamageDealtToChampions"];
			}
			//magDmgTaken
			$total_magDmgDealt+=$row["magicDamageDealtToChampions"];	
			if($row["magicDamageDealtToChampions"]>$max_magDmgDealt){
				$max_magDmgDealt=$row["magicDamageDealtToChampions"];
			}
			if($row["magicDamageDealtToChampions"]<$min_magDmgDealt && $row["magicDamageDealtToChampions"]!=0){
				$min_magDmgDealt=$row["magicDamageDealtToChampions"];
			}
			//trueDmgTaken
			$total_trueDmgDealt+=$row["trueDamageDealtToChampions"];	
			if($row["trueDamageDealtToChampions"]>$max_trueDmgDealt){
				$max_trueDmgDealt=$row["trueDamageDealtToChampions"];
			}
			if($row["trueDamageDealtToChampions"]<$min_trueDmgDealt && $row["trueDamageDealtToChampions"]!=0){
				$min_trueDmgDealt=$row["trueDamageDealtToChampions"];
			}
			$count++;
		}
		//totalDmgDealt
		$mid_totalDmgDealt = floor($total_totalDmgDealt/$count);
		//physDmgDealt
		$mid_physDmgDealt = floor($total_physDmgDealt/$count);
		//magDmgDealt
		$mid_magDmgDealt = floor($total_magDmgDealt/$count);
		//trueDmgDealt
		$mid_trueDmgDealt = floor($total_trueDmgDealt/$count);
			
		$dmgDealt =  array(
			//totalDmgDealt
			"total_totalDmgDealt"=>$total_totalDmgDealt,
			"max_totalDmgDealt"=>$max_totalDmgDealt,
			"min_totalDmgDealt"=>$min_totalDmgDealt,
			"mid_totalDmgDealt"=>$mid_totalDmgDealt,
			//physDmgDealt
			"total_physDmgDealt"=>$total_physDmgDealt,
			"max_physDmgDealt"=>$max_physDmgDealt,
			"min_physDmgDealt"=>$min_physDmgDealt,
			"mid_physDmgDealt"=>$mid_physDmgDealt,
			//magDmgDealt
			"total_magDmgDealt"=>$total_magDmgDealt,
			"max_magDmgDealt"=>$max_magDmgDealt,
			"min_magDmgDealt"=>$min_magDmgDealt,
			"mid_magDmgDealt"=>$mid_magDmgDealt,
			//trueDmgDealt
			"total_trueDmgDealt"=>$total_trueDmgDealt,
			"max_trueDmgDealt"=>$max_trueDmgDealt,
			"min_trueDmgDealt"=>$min_trueDmgDealt,
			"mid_trueDmgDealt"=>$mid_trueDmgDealt

		);
		$mysqli->close();
		return $dmgDealt;	
	}
}

//return array of kda (kills,deaths,assists)
function statsKDA(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT kills,deaths,assists FROM participants";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select kda - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		$mysqli->close();
		return false;	
	}else {
		echo "<font color='green'>DB: select kda - successfully <br></font>";
		//kills
		$total_kills=0;
		$max_kills=0;
		$min_kills = 1000000;
		//deaths
		$total_deaths=0;
		$max_deaths=0;
		$min_deaths = 1000000;
		//assists
		$total_assists=0;
		$max_assists=0;
		$min_assists = 1000000;
		
		$count = 0;
		while ($row = $result->fetch_assoc()) {
			//kills
			$total_kills+=$row["kills"];	
			if($row["kills"]>$max_kills){
				$max_kills=$row["kills"];
			}
			if($row["kills"]<$min_kills && $row["kills"]!=0){
				$min_kills=$row["kills"];
			}
			//deaths
			$total_deaths+=$row["deaths"];	
			if($row["deaths"]>$max_deaths){
				$max_deaths=$row["deaths"];
			}
			if($row["deaths"]<$min_deaths && $row["deaths"]!=0){
				$min_deaths=$row["deaths"];
			}
			//assists
			$total_assists+=$row["assists"];	
			if($row["assists"]>$max_assists){
				$max_assists=$row["assists"];
			}
			if($row["assists"]<$min_assists && $row["assists"]!=0){
				$min_assists=$row["assists"];
			}
			$count++;
		}
		//kills
		$mid_kills = floor($total_kills/$count);
		//deaths
		$mid_deaths = floor($total_deaths/$count);
		//assists
		$mid_assists = floor($total_assists/$count);
			
		$kda =  array(
			//kills
			"total_kills"=>$total_kills,
			"max_kills"=>$max_kills,
			"min_kills"=>$min_kills,
			"mid_kills"=>$mid_kills,
			//deaths
			"total_deaths"=>$total_deaths,
			"max_deaths"=>$max_deaths,
			"min_deaths"=>$min_deaths,
			"mid_deaths"=>$mid_deaths,
			//magDmgDealt
			"total_assists"=>$total_assists,
			"max_assists"=>$max_assists,
			"min_assists"=>$min_assists,
			"mid_assists"=>$mid_assists
		);
		$mysqli->close();
		return $kda;	
	}
}


//return array of other stats (goldEarned, goldSpent,minionsKilled, neutralminionsKilled)
function statsOther(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT goldEarned, goldSpent,minionsKilled, neutralMinionsKilled FROM participants";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select other - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
		$mysqli->close();
		return false;	
	}else {
		echo "<font color='green'>DB: select other - successfully <br></font>";
		//goldEarned
		$total_goldEarned=0;
		$max_goldEarned=0;
		$min_goldEarned = 1000000;
		//goldSpent
		$total_goldSpent=0;
		$max_goldSpent=0;
		$min_goldSpent = 1000000;
		//minionsKilled
		$total_minionsKilled=0;
		$max_minionsKilled=0;
		$min_minionsKilled = 1000000;
		//neutralMinionsKilled
		$total_neutralMinionsKilled=0;
		$max_neutralMinionsKilled=0;
		$min_neutralMinionsKilled = 1000000;
		
		$count = 0;
		while ($row = $result->fetch_assoc()) {
			//goldEarned
			$total_goldEarned+=$row["goldEarned"];	
			if($row["goldEarned"]>$max_goldEarned){
				$max_goldEarned=$row["goldEarned"];
			}
			if($row["goldEarned"]<$min_goldEarned && $row["goldEarned"]!=0){
				$min_goldEarned=$row["goldEarned"];
			}
			//goldSpent
			$total_goldSpent+=$row["goldSpent"];	
			if($row["goldSpent"]>$max_goldSpent){
				$max_goldSpent=$row["goldSpent"];
			}
			if($row["goldSpent"]<$min_goldSpent && $row["goldSpent"]!=0){
				$min_goldSpent=$row["goldSpent"];
			}
			//minionsKilled
			$total_minionsKilled+=$row["minionsKilled"];	
			if($row["minionsKilled"]>$max_minionsKilled){
				$max_minionsKilled=$row["minionsKilled"];
			}
			if($row["minionsKilled"]<$min_minionsKilled && $row["minionsKilled"]!=0){
				$min_minionsKilled=$row["minionsKilled"];
			}
			//neutralMinionsKilled
			$total_neutralMinionsKilled+=$row["neutralMinionsKilled"];	
			if($row["neutralMinionsKilled"]>$max_neutralMinionsKilled){
				$max_neutralMinionsKilled=$row["neutralMinionsKilled"];
			}
			if($row["neutralMinionsKilled"]<$min_neutralMinionsKilled && $row["neutralMinionsKilled"]!=0){
				$min_neutralMinionsKilled=$row["neutralMinionsKilled"];
			}
			$count++;
		}
		//goldEarned
		$mid_goldEarned = floor($total_goldEarned/$count);
		//goldSpent
		$mid_goldSpent = floor($total_goldSpent/$count);
		//minionsKilled
		$mid_minionsKilled = floor($total_minionsKilled/$count);
		//neutralMinionsKilled
		$mid_neutralMinionsKilled = floor($total_neutralMinionsKilled/$count);
			
		$other =  array(
			//goldEarned
			"total_goldEarned"=>$total_goldEarned,
			"max_goldEarned"=>$max_goldEarned,
			"min_goldEarned"=>$min_goldEarned,
			"mid_goldEarned"=>$mid_goldEarned,
			//goldSpent
			"total_goldSpent"=>$total_goldSpent,
			"max_goldSpent"=>$max_goldSpent,
			"min_goldSpent"=>$min_goldSpent,
			"mid_goldSpent"=>$mid_goldSpent,
			//minionsKilled
			"total_minionsKilled"=>$total_minionsKilled,
			"max_minionsKilled"=>$max_minionsKilled,
			"min_minionsKilled"=>$min_minionsKilled,
			"mid_minionsKilled"=>$mid_minionsKilled,
			//neutralMinionsKilled
			"total_neutralMinionsKilled"=>$total_neutralMinionsKilled,
			"max_neutralMinionsKilled"=>$max_neutralMinionsKilled,
			"min_neutralMinionsKilled"=>$min_neutralMinionsKilled,
			"mid_neutralMinionsKilled"=>$mid_neutralMinionsKilled
		);
		$mysqli->close();
		return $other;	
	}
}

//return array of 10 popular champions
function popularPicks(){
	
	include "connect.php";
	$api_key=API_KEY;
	$region = REGION;
	$query = "SELECT championId FROM participants";
	$result = $mysqli->query($query);
	if(!$result){
		echo "<font color='red'>DB: select champ - ERROR <br></font>".$mysqli->errno." ".$mysqli->error."<br>";
	$mysqli->close();
	return false;	
	}else {
		echo "<font color='green'>DB: select champ - successfully <br></font>";
		$champions = array();
		$i=0;
		while ($row = $result->fetch_assoc()) {
       		 	$champions[$i]=$row["championId"];
			$i++;
		}
		$champions_count = array_count_values($champions);
		$champions_sort = array_count_values($champions);
		rsort($champions_sort);
		$pop_champions = array();
		for($i=0;$i<10;$i++){
			foreach($champions_count as $key=>$value){
				if($value == $champions_sort[$i]){
					$pop_champions["pickChampions$i"]=$key;
				}
			}
		}
		foreach($pop_champions as $key=>$championId){
			$data_req = "https://global.api.pvp.net/api/lol/static-data/$region/v1.2/champion/$championId?api_key=$api_key";
			$data = json_decode(file_get_contents($data_req), TRUE); 
			$pop_champions[$key] = $data["name"]; 
		}
		$mysqli->close();
		return $pop_champions;
		
	}


}

?>
