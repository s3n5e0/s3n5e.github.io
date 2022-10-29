<?php
    $dir = 'online/';
    if(is_dir($dir)){
        $info = opendir($dir);
        while (($file = readdir($info)) !== false) {
            echo $file.'<br>';
        }
        closedir($info);
    }

?>
