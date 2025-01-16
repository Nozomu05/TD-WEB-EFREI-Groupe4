<?php
include_once "model/produitModel.php";

class ProduitController{
    private $model;
    public function __construct(){
        $this->model = new ProduitModel;
    }
    public function getProduits(){
        $produits = $this->model->getProduits();
        include_once "view/toutlesproduits.php";
    }

    public function getProduitsAccueil(){
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
            $etat = $_POST['etat'];
            $type = $_POST['type'];
            $description = $_POST["description"];
            include_once "controller/userController.php";
            $userinfo = new UserController;
            $userId = $userinfo ->getUserId($_SESSION["email"]);
            $id_proprio = $userId["id_user"];
            if($this->model->ajouterProduit($nom,$prix,$description,$etat,$type,$id_proprio)){
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

    public function getProduitsByProprio($id){
        return $this->model -> getProduitsByProprio($id);
    }
}