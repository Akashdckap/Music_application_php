<?php
require "connection.php";
class userModel extends database{

    public function listSongs(){
        $statement = $this->db->query("SELECT * FROM songsAndartists");
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function loggedIDIn($use,$pas){
        return $this->db->query("SELECT * FROM loginForm WHERE user_Name = '$use' and password = '$pas'" )->fetchAll(PDO::FETCH_OBJ);
    }

    public function adminLogin($adminName,$adminEmail,$adminPassword){
        return $this->db->query("SELECT * FROM admin WHERE userName='$adminName' AND Email='$adminEmail' AND password ='$adminPassword'")->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertPlayList($playlist){
        $playlistname =$playlist['playListName'];
        $songname =$playlist['SongName'];
        $this->db->query("INSERT INTO playlist(playlistName,songName,logged_user_id,created_at,updated_at)VALUES ('$playlistname','$songname',3,now(),now())");
    }





}