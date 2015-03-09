<?php
class Lolapi{
	public function getStats(){
		$jsonurl = "https://euw.api.pvp.net/api/lol/euw/v1.3/stats/by-summoner/24478215/summary?season=SEASON2015&api_key=33f0e40b-c2c6-43fe-8486-d81cb73e66c5";
		$json = file_get_contents($jsonurl, null, null);
		$json_output = json_decode($json);
		$output = [
			'wins' => $json_output->playerStatSummaries[4]->wins,
			'losses' => $json_output->playerStatSummaries[4]->losses,
			'kills' => $json_output->playerStatSummaries[4]->aggregatedStats->totalChampionKills,
			'assists' => $json_output->playerStatSummaries[4]->aggregatedStats->totalAssists
		];
		return $output;
	}

	public function getLeague(){
		$jsonurl = "https://euw.api.pvp.net/api/lol/euw/v2.5/league/by-summoner/24478215/entry?api_key=33f0e40b-c2c6-43fe-8486-d81cb73e66c5";
		$json = file_get_contents($jsonurl, null, null);
		$json_output = json_decode($json);
		$output = [
			'tier' => $json_output->{'24478215'}[0]->tier,
			'name' => $json_output->{'24478215'}[0]->name,
			'division' => $json_output->{'24478215'}[0]->entries[0]->division,
			'leaguePoints' => $json_output->{'24478215'}[0]->entries[0]->leaguePoints
		];
		return $output;		
	}
}