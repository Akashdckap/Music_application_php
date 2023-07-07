<?php

require 'controller/userController.php';
class router
{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new userController();
    }

    public function get($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function routing()
    {
        foreach ($this->router as $key) {
            if ($key['uri'] === $_SERVER['REQUEST_URI']) {
                if ($key['action']) {
                    switch ($key['action']) {
                        case 'loginForm':
                            $this->controller->loginForm($_POST);
                            break;
                        case 'loginId':
//                            print_r($_POST);
                            $this->controller->logedIN($_POST);
                            break;
                        case 'playList':
                            print_r($_POST);
//                            $this->controller->creationOfPlaylist($_POST);
                            break;
                        default:
                            $this->controller->listAll();
                    }
                } else {
                    $this->controller->listAll();
                }
            }
        }

    }
}