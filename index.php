<?php
include("db_connector.php");

$uri = explode("?", $_SERVER['REQUEST_URI']);
$resource = explode('/', $uri[0]);

echo $uri[0];

$path1 = isset($resource[1]) ? $resource[1] :null;
$path2 = isset($resource[2]) ? $resource[1] :null;

$page = 'pages/main.php';
switch ($uri[0]) {
    case '/':
        $page = 'pages/main.php';
        break;
    
    case '/feedDetail':
        $page = 'pages/feedDetail.php';
        break;
    
    case '/create':
        $page = 'pages/createPost.php';
        break;

    case '/api/feeds':
        $page = 'pages/feedListApi.php';
        break;

    case '/api/feeds/create':
        $page = 'pages/createFeedApi.php';
        break;

    case '/api/feeds/test':
        $page = 'pages/feedList.php';
        break;

    default:
        $page = "pages/Notfound.php";
        break;
}

if($path1 === 'api'){
    header('Content-type: application/json');
    include($page);
}else{
    header('Content-type: text/html');
    include('layout.php');
}

?>