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
        if($loginDetails['userName']&&$loginDetails['passWord']){
            $LoginName = $loginDetails['userName'];
            $LoginPassword = $loginDetails['passWord'];
            $this->userModel->login($LoginName,$LoginPassword);
            header("location:view/loginPage.php");
        }
        else{
            echo "Wrong";
            header("location:/");
        }
    }
    public function listAll(){
       $getSongs = $this->userModel->listSongs();
       require "view/homepage.php";
    }
    public function logedIN($loggedId)
    {
        $gettedId = $this->userModel->loggedIDIn($gettedLoginId);
        header('location:view/createPlayList.php');
    }
    public function creationOfPlaylist($creation){
        print_r($creation);
//        $this->userModel->insertPlayList();
    }
}

