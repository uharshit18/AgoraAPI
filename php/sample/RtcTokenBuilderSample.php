<?php

include("../src/RtcTokenBuilder.php");

$appID = "7d5c38e5e268431980835cb4f61eda93";
$appCertificate = "5bcfc78bccbe4fcb8f036e495fa7e0e1";
$channelName = "Live1";
$uid = 0;
$uidStr = "2882341273";
$role = RtcTokenBuilder::RoleAttendee;
$expireTimeInSeconds = 3600;
$currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

$tokken = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);


?>

<script type="text/javascript" src="index.js"></script>