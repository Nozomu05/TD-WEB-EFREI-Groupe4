<?php
include_once "model/bdd.php";

class PanierModel{
    private $bdd;

    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    public function ajoutPanier($prix,$id_user,$id_produit){
        $produit =  $this->bdd->prepare("INSERT INTO panier(prix,id_user,id_produit) VALUES(?,?,?)");
        return $produit->execute([$prix,$id_user,$id_produit]);
    }

    public function getId_panier(){
        return $this->bdd->query("SELECT id_produit FROM panier")->fetch(PDO::FETCH_ASSOC);
    }

    public function getProduitAvecId($id_produit){
        return $this->bdd->query("SELECT * FROM panier WHERE id_produit = '$id_produit'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getPanier(){
        return $this->bdd->query("SELECT COUNT(id_produit) as id_produit FROM panier")->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllProduit(){
        return $this->bdd->query("SELECT panier.id_produit as id_produit,panier.prix as prix,produits.nom as nom,produits.type as type,produits.description as description, produits.id_proprio as id_proprio,produits.etat as etat, produits.photo as photo FROM panier JOIN produits ON produits.id_produit = panier.id_produit")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function EnleverProduit($id){
        $commande = $this->bdd->prepare("DELETE FROM panier WHERE id_produit = ?");
        return $commande->execute([$id]);
    }

    public function Clearpanier(){
        $commande= $this->bdd->prepare("TRUNCATE TABLE panier");
        return $commande->execute();
    }
}