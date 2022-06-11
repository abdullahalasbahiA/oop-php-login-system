<?php
/*
 CREATE TABLE users ( 
     users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
     users_uid TINYTEXT not null,
     users_pwd LONGTEXT not null,
     users_email TINYTEXT not null
)
 */


class Dbh {

    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin2', $username, $password);
            return $dbh;
        } catch(PDOEXception $e){
            print "Error!: " . $e.getMessage() . "</br>";
            die();
        }
    }

}