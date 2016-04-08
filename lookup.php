<?php
session_start();

include "MySQL.class.php";

$dbh = new MySQL();

$sql = "SELECT id, name, level, sl, ep, ga, gee, gge, sxr, sgr, ae, ag, apb, axb, agb, ChallengeBoosts, ChallengeSeries, ChallengeMilestone, GuildDamage, CardDamage, SoulAutoDamage, SoulCritDamage, AutoSpeed, AutoBaseDamage, AutoCritChance, AutoCritMultiplier, AutoDoubleAttack, AscensionAutoDamage, AscensionAutoSpeed, AscensionAutoCrit FROM employee WHERE name = ? LIMIT 1";
$result = $dbh->select($sql, $_SESSION['data']);

echo json_encode($result[0]);
?>
