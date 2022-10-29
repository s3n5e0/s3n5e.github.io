<?php
$ip=$_SERVER['REMOTE_ADDR'];
$shell = isset($_GET['shell']) ? $_GET['shell'] : 0;
if ($shell=='0'){
    if (!file_exists("shell/".$ip)){
        $shell1 = fopen("shell/".$ip, "w");
        fwrite($shell1, $shell);
        fclose($shell1);
    }
}else{
    
    $shell1 = fopen("shell/".$ip, "w");
    fwrite($shell1, $shell);
    fclose($shell1);
}

#Mkdir('shell');



$file=fopen('shell/'.$ip,'rb+');
echo fread($file,filesize('shell/'.$ip));
fclose($file);
?>