<?php
require_once "config.inc.php";

$router=$_REQUEST["router"];
$fileExtension = '';
$baseurl="./";

switch ($_REQUEST["type"]) {
    case '0':
        $type = 'factory';
        break;
    case '1':
        $type = 'sysupgrade';
        $fileExtension = '-sysupgrade';
        break;
    default:
        $type = 'factory'; 
}

switch ($_REQUEST["choose_comunity"]) {
    case '0':
        $community = 'notset';
        break;
    case '1':
        $community = 'nordlab';
        break;
    default:
        $community = 'notset';
}

$router = $_REQUEST["router"];

if($router === '-1') {
    backlink('Bitte wähle eine Router aus. Den genauen Namen und die Version deines Routers findest du auf seiner Unterseite.');
} else{
    if($community == 'notset'){
        backlink('Bitte gib eine Comunity an.');
    }
    else {
        $href=$baseurl.'media/firmware/' . $community . '/' . $type . '/' . $firmware_prefix . $router . $fileExtension . '.bin';
        header('Location: '.$href);
        echo '<a href="'.$href.'">redirecting</a>';
    }
}

function backlink($t){
    echo "$t<br>\n";
    echo "<br><a href=" . $_SERVER["referer"] . ">zur&uuml;ck</a>\n";
}
