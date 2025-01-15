<?php
include_once "model/bdd.php";

class PanierModel{
    private $bdd;

    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    public function ajoutPanier($id_produit,$quantite,$prix){
        $produit =  $this->bdd->prepare("INSERT INTO panier(id_produit,quantite,prix_unitaire) VALUES(?,?,?)");
        return $produit->execute([$id_produit,$quantite,$prix]);
    }

    public function getId_panier(){
        return $this->bdd->query("SELECT id_produit FROM panier")->fetch(PDO::FETCH_ASSOC);
    }

    public function getProduitAvecId($id_produit){
        return $this->bdd->query("SELECT * FROM panier WHERE id_produit = '$id_produit'")->fetch(PDO::FETCH_ASSOC);
    }

    public function changerquantite($id_produit, $quantite){
        $commande = $this->bdd->prepare("UPDATE panier SET quantite = ? WHERE id_produit = ?");
        return $commande->execute([$quantite,$id_produit]);
    } 

    public function getPanier(){
        return $this->bdd->query("SELECT COUNT(id_produit) FROM panier")->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllProduit(){
        return $this->bdd->query("SELECT panier.id_produit as id_produit,panier.quantite as quantite,panier.prix_unitaire as prix,produit.nom as nom,produit.type as type,produit.description as description, produit.id_proprio as id_proprio,produit.quantite as quantite_max FROM panier JOIN produit ON produit.id_produit = panier.id_produit")->fetchAll(PDO::FETCH_ASSOC);
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