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

    public function getProduitAvecId($id_produit){
        return $this->model->getProduitAvecId($id_produit);
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
        if($nombredeproduit['COUNT(id_produit)']!==0){
            $pasvide=true;
        }
        include_once "view/finalisation.php";


        if(isset($_POST['pay'])){
            $produits = $this->getAllProduit();
            foreach($produits as $produit){
                if (isset($_POST[$produit['id_produit']])){
                    $quantite_actu = $produit['quantite'];
                    $nouvelle_quantite = $quantite_actu + $_POST[$produit['id_produit']];
                    if($nouvelle_quantite === 0){
                        $this->model->EnleverProduit($produit['id_produit']);
                        header("Location:index.php?page=panier");
                    }
                    else{
                        $this ->model->changerquantite($produit['id_produit'],$quantite_actu+$_POST[$produit['id_produit']]);
                        header("Location:index.php?page=panier");
                    }
                }
            }
        }
    }

    public function ajoutPanier(){
        $detail = new ProduitController;
        $produit = $detail -> getProduitsDetail($_GET["id"]);
        include_once "view/produit.php";
        if(isset($_POST['quantity'])){
            $nombredeproduit = $this-> getPanier();
            if ($nombredeproduit['COUNT(id_produit)']===0){
                $id = $produit['id_produit'];
                $quantite = $_POST['quantity'];
                $prix = $produit['prix'];
                $this->model->ajoutPanier($id,$quantite,$prix);
            }else{
                $estdanslepanier = false;
                foreach($this->getId_panier() as $id_produit => $id){
                    if($id === $produit['id_produit']){
                        $estdanslepanier = true;
                    }
                }

                if(!$estdanslepanier){
                    $id = $produit['id_produit'];
                    $quantite = $_POST['quantity'];
                    $prix = $produit['prix'];
                    $this->model->ajoutPanier($id,$quantite,$prix);
                }else{
                    $infos = $this-> getProduitAvecId($id);
                    $quantiteactu = $infos['quantite'];
                    if($quantiteactu + $_POST['quantity']<=$produit['quantite']){
                        $this ->model->changerquantite($produit['id_produit'],$quantiteactu+$_POST['quantity']);
                    }
                    else{
                        echo "<script>alert('Vous avez depasser la quantite maximale')</script>";
                    }
                }
            }
        }
    }

    public function payer(){
        $produits = $this->getAllProduit();
        include_once "view/payer.php";
    }

    public function fin(){
        include_once 'view/merci.php';
        $produits = $this->getAllProduit();
        include_once "controller/produitController.php";
        $modifquantiteProduit = new ProduitController;
        foreach($produits as $produit){
            $id = $produit["id_produit"];
            $quantite = $produit['quantite_max'] - $produit["quantite"];
            if($quantite === 0){
                include_once "controller/messageController.php";
                $message = new MessageController;
                $message ->RuptureStock($id);
            }
            $modifquantiteProduit -> modifierProduit($id,$quantite);
        }
        $this->model->Clearpanier();
    }
}