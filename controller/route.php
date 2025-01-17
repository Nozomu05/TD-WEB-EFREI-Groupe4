<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "accueil";

include_once "controller/produitController.php";
$alltypes = new ProduitController();
$types = $alltypes->getTypeProduits();
include "view/header.php";

switch($page){
    case "accueil":
        $produits = new ProduitController;
        $produits ->getProduitsAccueil();
        break;

    case "quartz":
        $infos = new ProduitController;
        $produits = $infos -> getProduitsParTypes('quartz');
        break;

    case 'mecanique':
        $infos = new ProduitController;
        $produits  = $infos-> getProduitsParTypes('mecanique');
        break;

    case 'toutlesproduits':
        $produits = new ProduitController;
        $produits -> getProduits();
        break;

    case 'inscription':
        include_once "controller/userController.php";
        $user = new UserController;
        $user ->inscription();
        break;

    case "connexion":
        include_once "controller/userController.php";
        $user = new UserController;
        $user ->connexion();
        break;

    case "ajouter":
        $ajout = new ProduitController;
        $ajout ->ajouterProduit();
        break;

    case "deconnexion":
        if(array_search('supprimer',$_SESSION)){
            include_once 'model/userModel.php';
            $del = new UserModel();
            $del -> DeleteUser($_SESSION['id_user']);
        };
        $_SESSION=[];
        header("Location: index.php");
        break;

    case "produit":
        include_once 'controller/panierController.php';
        $nouveau = new PanierController;
        $nouveau->ajoutPanier();
        break;

    case 'panier':
        include_once 'controller/panierController.php';
        $checkout = new PanierController;
        $checkout ->checkout();
        break;

    case 'checkout':
        include_once 'controller/panierController.php';
        $checkout = new PanierController;
        $checkout ->payer();
        break;
    case 'merci':
        include_once 'controller/panierController.php';
        $fin = new PanierController;
        $fin -> fin();
        break;

    case 'utilisateur':
        include_once 'controller/userController.php';
        $user = new UserController;
        $user -> details();
        break;

    case 'mesproduits':
        include_once 'controller/userController.php';
        $user = new UserController;
        $user -> getProduits();
        break;

    case 'admin':
        include_once 'controller/userController.php';
        $user = new UserController;
        $user -> getAllUser();
        break;

    default:
        include "view/404.php";
}
