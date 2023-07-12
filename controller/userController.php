<?php

require 'model/userModel.php';

class userController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function loginForm($loginDetails){

        $check = $this->userModel->loggedIDIn($loginDetails['userEmail'],$loginDetails['passWord']);
        if($check){
             $getSongs = $this->userModel->listSongs();
        require "view/loginPage.php";
        }
        else{
           echo "You are not an login user";
//           header('location:/');
        }
    }
    public function adminUser($adminDetails){
        $adminName = $adminDetails['adminName'];
        $adminEmail = $adminDetails['mail'];
        $adminPassword = $adminDetails['password'];
        $checkDetails = $this->userModel->adminLogin($adminName,$adminEmail,$adminPassword);
        if($checkDetails){
            header('location:view/dashBoard.php');
        }
        else{
            echo "You are not an Admin user";
        }
    }
    public function listAll(){
       $getSongs = $this->userModel->listSongs();
       require "view/homepage.php";
    }
    public function createPlayList($data){
        if ($data){
            $this->userModel->insertPlayList();
//            var_dump($data);
            header('location:view/loginPage.php');
        }
        else{
            require "view/createPlayList.php";
        }

    }


}

