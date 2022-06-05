<?php

$versions = file_get_contents('https://ddragon.leagueoflegends.com/api/versions.json');
$versions = json_decode($versions, true);
$latest = $versions['0'];
$json = file_get_contents('https://ddragon.leagueoflegends.com/cdn/'.$latest.'/data/en_US/champion.json');
$json = json_decode($json, true);
$list = $json['data'];
function getChampionInfo($id = 1) {
    global $list;
    foreach ($list as $key => $value) {
        if($list[$key]['key'] == $id) {
            return $list[$key];
        }
    }
    return false;
}

?>