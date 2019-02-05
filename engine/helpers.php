<?php


function loadCss($foldername){

    $result = scandir($foldername);
    foreach($result as $filename){
        $ext = substr($filename, -3);
        if ($ext=="css"){
            echo"<link href='http://{$_SERVER['HTTP_HOST']}/$foldername$filename' rel='stylesheet'>";
        }
    }
}

