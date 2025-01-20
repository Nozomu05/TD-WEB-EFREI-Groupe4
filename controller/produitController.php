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
        $produitsliste = $this->model->getProduitsDecroissant();
        if(sizeof($produitsliste)<=4){
            $produits=$this->model->getProduits();
            include_once "view/accueil.php";
        }else{
            $produits = [];
            for($i=0;$i<4;$i++){
                array_push($produits,$produitsliste[$i]);
            }
            include_once "view/accueil.php";
        }
        
    }

    public function getTypeProduits(){
        return $this->model->getTypeProduits();
    }
    public function getProduitsParTypes($type){
        $produits = $this->model-> getProduitsParTypes($type);
        include_once 'view/toutlesproduits.php';
    }
    public function ajouterProduit(){
        if(isset($_POST['type'])){
            $file = $_FILES['image'];
            $endroit = "model/img/" . basename($file['name']);
            move_uploaded_file($file['tmp_name'],$endroit);
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];
            $etat = $_POST['etat'];
            $type = $_POST['type'];
            $marque = $_POST['marque'];
            $description = $_POST["description"];
            include_once "controller/userController.php";
            $userinfo = new UserController;
            $userId = $userinfo ->getUserId($_SESSION["email"]);
            $id_proprio = $userId["id_user"];
            if($this->model->ajouterProduit($nom,$prix,$marque,$description,$endroit,$etat,$type,$id_proprio)){
                header("Location:index.php?page=mesproduits");
            }
            else{
                echo "echec";
            }
        }
        include "view/ajout.php";
    }

    public function getProduitsDetail($id){
        $produits = $this->model->GetProduitsDetail($id);
        $produit = $produits[0];
        return $produit;
    }

    public function getProduitsByProprio($id){
        return $this->model -> getProduitsByProprio($id);
    }

    public function DeleteparId($id){
        $this->model->DeleteparId($id);
    }
}