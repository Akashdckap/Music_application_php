<?php

require 'router.php';
$router = new router();

$router->get('/','list');
$router->get('/login','loginForm');
$router->post('/createplaylist','createplayList');
$router->get('/adminPage','adminPage');
//$router->post('createdPlayList','playList');


$router->routing();