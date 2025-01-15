<?php

class Bdd{
    public static function connexion()
    {
        try{
            $bdd=new PDO("mysql:host=localhost;port=3306;dbname=projetphpfinale","root","");
            return $bdd;
        }
        catch(Exception $e){
            echo $e;
        }
    }
}