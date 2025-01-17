<?php
include_once "model/panierModel.php";
include_once "controller/produitController.php";

class PanierController{
    private $model;
    public function __construct(){
        $this->model = new PanierModel;
    }

    public function getId_panier(){
        return $this->model->getId_panier();
    }

    public function getPanier(){
        return $this->model->getPanier();
    }

    public function getAllProduit(){
        return $this->model->getAllProduit();
    }

    public function checkout(){
        $produits = $this->getAllProduit();
        $pasvide=false;
        $nombredeproduit = $this->getPanier();
        if($nombredeproduit['id_produit']!==0){
            $pasvide=true;
        }
        include_once "view/finalisation.php";


        
        $produits = $this->getAllProduit();
        foreach($produits as $produit){
            if (isset($_POST[$produit['id_produit']])){
                $index = array_search($produit['id_produit'] . $produit['nom'],$_SESSION);
                unset($_SESSION[$index]);
                $this->model->EnleverProduit($produit['id_produit']);
                header("Location:index.php?page=panier");
            }
        }
    }


    public function ajoutPanier(){
        $detail = new ProduitController;
        $produit = $detail -> getProduitsDetail($_GET["id"]);
        $estajouter = array_search($produit['id_produit'] . $produit['nom'],$_SESSION);
        if(isset($_POST['ajout'])){
            $nombredeproduit = $this-> getPanier();
            if ($nombredeproduit['id_produit']===0){
                $id = $produit['id_produit'];
                $prix = $produit['prix'];
                $id_user = $_SESSION['id_user'];
                $_SESSION[$produit['nom']]=$id . $produit['nom'];
                $this->model->ajoutPanier($prix,$id_user,$id);
                echo "<script>alert('Produit ajouté !');</script>";
                $estajouter = array_search($produit['id_produit'] . $produit['nom'],$_SESSION);
            }else{
                $estdanslepanier = false;
                foreach($this->getId_panier() as $id_produit => $id){
                    if($id === $produit['id_produit']){
                        $estdanslepanier = true;
                    }
                }
                if(!$estdanslepanier){
                    $id = $produit['id_produit'];
                    $prix = $produit['prix'];
                    $id_user = $_SESSION['id_user'];
                    $_SESSION[$produit['nom']]=$id . $produit['nom'];
                    $this->model->ajoutPanier($prix,$id_user,$id);
                    echo "<script>alert('Produit ajouté !');</script>";
                    $estajouter = array_search($produit['id_produit'] . $produit['nom'],$_SESSION);
                }
            }   
        }
        include_once "view/produit.php";
    }

    public function payer(){
        $produits = $this->getAllProduit();
        include_once "view/payer.php";
    }

    public function fin(){
        include_once 'merci.php';
    }
    
    
}