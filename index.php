<?php
$uri = explode("?", $_SERVER['REQUEST_URI']);
$resource = explode('/', $uri[0]);

$page = 'pages/main.php';
switch ($resource[1]) {
    case '/':
        $page = 'pages/main.php';
        break;
    
    case 'feedDetail':
        $page = 'pages/feedDetail.php';
        break;
    
    default:
        # code...
        break;
}

include($page);
?>