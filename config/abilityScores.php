<?php
$abilityScores_content = file_get_contents(__DIR__ . '/abilityScores.json');
$abilityScores = json_decode($abilityScores_content);

return array_map(function ($abilityScore) {
  return [
    "index" => $abilityScore->index,
    "name" => $abilityScore->name,
    "full_name" => $abilityScore->full_name,
    "desc" => $abilityScore->desc,
  ];
}, $abilityScores);

