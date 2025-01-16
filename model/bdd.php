<?php

class Bdd{
    public static function connexion()
    {
        try{
            $bdd=new PDO("pgsql:host=localhost;port=5432;dbname=montre","postgres","hiophiop05!");
            return $bdd;
        }
        catch(Exception $e){
            echo $e;
        }
    }
}


