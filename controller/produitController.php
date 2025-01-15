<?php
include_once "model/produitModel.php";

class ProduitController{
    private $model;
    public function __construct(){
        $this->model = new ProduitModel;
    }
    public function getProduits(){
        $produits = $this->model->getProduits();
        include_once "view/accueil.php";
    }

    public function getTypeProduits(){
        return $this->model->getTypeProduits();
    }
    public function getProduitsParTypes($type){
        $produits = $this->model-> getProduitsParTypes($type);
        include_once "view/accueil.php";
    }
    public function ajouterProduit(){
        include "view/ajout.php";
        if(isset($_POST['type'])){
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];
            $quantite = $_POST['quantite'];
            $type = $_POST['type'];
            $description = $_POST["description"];
            include_once "controller/userController.php";
            $userinfo = new UserController;
            $userId = $userinfo ->getUserId($_SESSION["email"]);
            $id_proprio = $userId["id_user"];
            if($this->model->ajouterProduit($nom,$prix,$quantite,$type,$description,$id_proprio)){
                echo "produit ajoute";
                include_once "index.php";
            }
            else{
                echo "echec";
            }
        }
    }

    public function getProduitsDetail($id){
        $produits = $this->model->GetProduitsDetail($id);
        $produit = $produits[0];
        return $produit;
    }

    public function modifierProduit($id,$quantite){
        return $this-> model -> modifierProduit($id,$quantite);
    }

    public function getProduitsByProprio($id){
        return $this->model -> getProduitsByProprio($id);
    }
}