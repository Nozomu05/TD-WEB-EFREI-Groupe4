<?php
include_once "bdd.php";

class UserModel{
    private $bdd;
    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    public function inscription($nom,$prenom,$pseudonyme,$email,$mdp,$date_naissance){
        $user = $this->bdd->prepare("INSERT INTO users(nom,prenom,pseudo,email,mdp,date_naissance) VALUES(?,?,?,?,?,?)");
        return $user->execute([$nom,$prenom,$pseudonyme,$email,$mdp,$date_naissance]);
    }

    public function getUserByEmail($email){
        return $this->bdd->query("SELECT * FROM users WHERE email='$email'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllEmail(){
        return $this->bdd->query("SELECT email FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserId($email){
        return $this->bdd->query("SELECT id_user FROM users WHERE email = '$email'")->fetch(PDO::FETCH_ASSOC);
    }

    public function details($id){
        $resultat= $this->bdd->query("SELECT * from users WHERE id_user='$id'")->fetchAll(PDO::FETCH_ASSOC);
        return $resultat[0];
    }
}