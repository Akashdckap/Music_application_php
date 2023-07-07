<?php
require "connection.php";
class userModel extends database{

    public function listSongs(){
        $statement = $this->db->query("SELECT * FROM songsAndartists");
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function login($userName,$password){
        $this->db->query("INSERT INTO loginForm(user_Name,password)VALUES ('$userName','$password')");
    }
    public function loggedIDIn($loginID){
        $checking = $this->db->query("SELECT id FROM loginForm ORDER BY '$loginID' desc limit 1");
        return $checking->fetch(PDO::FETCH_NUM);
    }



}