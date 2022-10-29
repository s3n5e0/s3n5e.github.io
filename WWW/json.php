<?php
$ip = isset($_GET['ip']) ? $_GET['ip'] : 0;
$ip = json_decode($ip,true);
$ip = $ip['query'];
echo ($ip);
?>