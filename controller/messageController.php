<?php

include_once "model/messageModel.php";

class MessageController{
    private $model;

    public function __construct(){
        $this->model = new MessageModel;
    }

    public function RuptureStock($id){
        include_once "controller/produitController.php";
        $produits = new ProduitController;
        $produit = $produits-> getProduitsDetail($id);
        $message = "votre produit " . $produit['nom'] . " est en rupture de stock";
        $id_proprio = $produit["id_proprio"];
        $this->model->RuptureStock($id_proprio,$message);
    }

    public function message(){
        $messages = $this->model->message($_SESSION['id_user']);
        include_once "view/message.php";
    }
}