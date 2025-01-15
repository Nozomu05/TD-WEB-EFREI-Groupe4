<?php
include_once "bdd.php";

class ProduitModel{
    private $bdd;
    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    public function getProduits(){
        return $this->bdd->query("SELECT * FROM produit")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTypeProduits(){
        return $this->bdd->query("SELECT DISTINCT(type) FROM produit")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduitsParTypes($type){
        return $this->bdd->query("SELECT * FROM produit WHERE type='$type'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterProduit($nom,$prix,$quantite,$type,$description,$id_proprio){
        $user = $this->bdd->prepare("INSERT INTO produit(nom,prix,quantite,type,description,id_proprio) VALUES(?,?,?,?,?,?)");
        return $user->execute([$nom,$prix,$quantite,$type,$description,$id_proprio]);
    }

    public function getProduitsDetail($id_produit){
        return $this->bdd->query("SELECT * FROM produit WHERE id_produit = $id_produit")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifierProduit($id,$quantite){
        $commande = $this->bdd->prepare("UPDATE produit SET quantite = ? WHERE id_produit = ?");
        return $commande->execute([$quantite,$id]);
    }

    public function getProduitsByProprio($id){
        return $this->bdd->query("SELECT * FROM produit WHERE id_proprio='$id'")->fetchAll(PDO::FETCH_ASSOC);
    }
}