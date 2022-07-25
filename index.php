<?php

include("db_connect.php");
include("views/message.php");
include("views/add_message.php");
$request_method = $_SERVER["REQUEST_METHOD"];
$request_uri = $_SERVER['REQUEST_URI'];

$my_uri = str_split($request_uri, 13);

switch ($request_method) {
    case 'GET' :
        if ($request_uri == '/form') {
            require __DIR__ . '/views/form.php';
            break;
        }
        if ($request_uri == "/message") {
            getMessage();
            break;
        }
        if ($my_uri[0] == '/message/?id=') {
            getMessage($_GET["id"]);
            break;
        }
        
    case 'POST' :
        if ($request_uri == '/form') {
            require __DIR__ . '/views/form.php';
            break;
        }
        if ($request_uri == '/message') {

            add_message();
            break;
        }
        

    default:
        // Requête invalide
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
