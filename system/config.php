<?php

$base_url = "http://localhost/tiny_project/";
$base_dir = "/tiny_project/";

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir,'',$tmp[0]);
unset($tmp);
$dbHost = 'localhost';
$dbName = 'mvc_blog';
$dbUsername = 'root';
$dbPassword = '';





