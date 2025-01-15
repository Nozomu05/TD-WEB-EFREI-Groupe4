<?php

include_once 'model/bdd.php';

class MessageModel{
    private $bdd;

    public function __construct(){
        $this->bdd = Bdd::connexion();
    }

    public function RuptureStock($id_proprio,$message){
        $commande = $this->bdd->prepare('INSERT INTO message(id_users,message) VALUES(?,?)');
        return $commande->execute([$id_proprio,$message]);
    }

    public function message($id){
        return $this->bdd->query("SELECT * FROM message WHERE id_users = '$id'")->fetchAll(PDO::FETCH_ASSOC);;
    }
}