<?php

require 'router.php';
$router = new router();

$router->get('/','list');
$router->get('/login','loginForm');
$router->get('/getLoginId','loginId');

$router->routing();