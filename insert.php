<?php
// Connect to MySQL Server //
$link = mysqli_connect("127.0.0.1","root","","company");

// Escape user imputs for security //
$charactername = mysqli_real_escape_string($link, $_POST['charactername']);
$level = mysqli_real_escape_string($link, $_POST['level']);
$sl = mysqli_real_escape_string($link, $_POST['sl']);
$ep = mysqli_real_escape_string($link, $_POST['ep']);
$ga = mysqli_real_escape_string($link, $_POST['ga']);
$gee = mysqli_real_escape_string($link, $_POST['gee']);
$gge = mysqli_real_escape_string($link, $_POST['gge']);
$sxr = mysqli_real_escape_string($link, $_POST['sxr']);
$sgr = mysqli_real_escape_string($link, $_POST['sgr']);
$ae = mysqli_real_escape_string($link, $_POST['ae']);
$ag = mysqli_real_escape_string($link, $_POST['ag']);
$apb = mysqli_real_escape_string($link, $_POST['apb']);
$axb = mysqli_real_escape_string($link, $_POST['axb']);
$agb = mysqli_real_escape_string($link, $_POST['agb']);
$ChallengeBoosts = mysqli_real_escape_string($link, $_POST['challengeboosts']);
$ChallengeSeries = mysqli_real_escape_string($link, $_POST['challengeseries']);
$ChallengeMilestone = mysqli_real_escape_string($link, $_POST['challengemilestone']);
$GuildDamage = mysqli_real_escape_string($link, $_POST['guilddamage']);
$CardDamage = mysqli_real_escape_string($link, $_POST['carddamage']);
$SoulAutoDamage = mysqli_real_escape_string($link, $_POST['soulautodamage']);
$SoulCritDamage = mysqli_real_escape_string($link, $_POST['soulcritdamage']);
$AutoSpeed = mysqli_real_escape_string($link, $_POST['autospeed']);
$AutoBaseDamage = mysqli_real_escape_string($link, $_POST['autobasedamage']);
$AutoCritChance = mysqli_real_escape_string($link, $_POST['autocritchance']);
$AutoCritMultiplier = mysqli_real_escape_string($link, $_POST['autocritmultiplier']);
$AutoDoubleAttack = mysqli_real_escape_string($link, $_POST['autodoubleattack']);
$AscensionAutoDamage = mysqli_real_escape_string($link, $_POST['ascensionautodamage']);
$AscensionAutoSpeed = mysqli_real_escape_string($link, $_POST['ascensionautospeed']);
$AscensionAutoCrit = mysqli_real_escape_string($link, $_POST['ascensionautocrit']);

// Attempt insert query execution //
$sql = mysqli_query($link, "INSERT INTO employee (`name`, `level`, `sl`, `ep`, `ga`, `gee`, `gge`, `sxr`, `sgr`, `ae`, `ag`, `apb`, `axb`, `agb`, `ChallengeBoosts`, `ChallengeSeries`, `ChallengeMilestone`, `GuildDamage`, `CardDamage`, `SoulAutoDamage`, `SoulCritDamage`, `AutoSpeed`, `AutoBaseDamage`, `AutoCritChance`, `AutoCritMultiplier`, `AutoDoubleAttack`, `AscensionAutoDamage`, `AscensionAutoSpeed`, `AscensionAutoCrit`) VALUES ('$charactername','$level','$sl','$ep','$ga','$gee','$gge','$sxr','$sgr','$ae','$ag','$apb','$axb','$agb', '$ChallengeBoosts', '$ChallengeSeries', '$ChallengeMilestone', '$GuildDamage', '$CardDamage', '$SoulAutoDamage', '$SoulCritDamage', '$AutoSpeed', '$AutoBaseDamage', '$AutoCritChance', '$AutoCritMultiplier', '$AutoDoubleAttack', '$AscensionAutoDamage', '$AscensionAutoSpeed', '$AscensionAutoCrit') ON DUPLICATE KEY UPDATE `level` = '$level',`sl` = '$sl',`ep` = '$ep',`ga` = '$ga',`gee` = '$gee',`gge` = '$gge',`sxr` = '$sxr',`sgr` = '$sgr',`ae` = '$ae',`ag` = '$ag',`apb` = '$apb',`axb` = '$axb',`agb` = '$agb', `ChallengeBoosts` = '$ChallengeBoosts', `ChallengeSeries` = '$ChallengeSeries', `ChallengeMilestone` = '$ChallengeMilestone', `GuildDamage` = '$GuildDamage', `CardDamage` = '$CardDamage', `SoulAutoDamage` = '$SoulAutoDamage', `SoulCritDamage` = '$SoulCritDamage', `AutoSpeed` = '$AutoSpeed', `AutoBaseDamage` = '$AutoBaseDamage', `AutoCritChance` = '$AutoCritChance', `AutoCritMultiplier` = '$AutoCritMultiplier', `AutoDoubleAttack` = '$AutoDoubleAttack', `AscensionAutoDamage` = '$AscensionAutoDamage', `AscensionAutoSpeed` = '$AscensionAutoSpeed', `AscensionAutoCrit` = '$AscensionAutoCrit'");

// Close Connection //
mysqli_close($link);

?>