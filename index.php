<?php
/**
PHP redirection script
*/
$destination = "https://chili.pa/"; // IMPORTANT: $destination NEEDS to finish within /
$url = explode('/',$_SERVER['REQUEST_URI']);
foreach($url as $key => $part){
    if($part==''){
        unset($url[$key]);
    }
}
$get = isset($get)?true:false;
$url = implode('/',$url).($get?"?".http_build_query($_GET):"");
header("HTTP/1.1 301 Moved Permanently"); 
header('Location:'.$destination.$url);
exit;
