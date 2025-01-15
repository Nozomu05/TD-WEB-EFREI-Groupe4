<?php
include_once "model/userModel.php";

class UserController{
    private $model;
    public function __construct(){
        $this->model = new UserModel;
    }

    public function getFormInscription(){
        include_once "view/inscription.php";
    }

    public function inscription(){
        $this->getFormInscription();
        if(isset($_POST["email"])){
            $mails = $this->model->getAllEmail();
            $oui = false;
            foreach($mails as $mail){
                if($mail["email"] == $_POST["email"]){
                    $oui = true;
                }
            }
            if($oui){
                echo "<script>alert('le compte existe deja, veuillez vous connecter');</script>";
            } else{
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $pseudonyme = $_POST["pseudo"];
                $email = $_POST["email"];
                $mdp = password_hash($_POST["mdp"],PASSWORD_DEFAULT);

                if($this->model->inscription($nom,$prenom,$pseudonyme,$email,$mdp)){
                    echo "<script>alert('inscription reussite');</script>";
                } else{
                    echo "<script>alert('Erreur lors de l'inscription,veuillez reessayer');</script>";
                }
            }
        } 
    }

    public function getFormConnexion(){
        include_once "view/connexion.php";
    }

    public function connexion(){
        $this->getFormConnexion();
        if(isset($_POST["email"])){
            $mails = $this->model->getAllEmail();
            $oui = false;
            foreach($mails as $mail){
                if($mail["email"] == $_POST["email"]){
                    $oui = true;
                }
            }
            if(!$oui){
                echo "<script>alert('le compte n'existe pas, veuillez vous inscrire');</script>";
            }else{
                $query = $this->model-> getUserByEmail($_POST["email"]);
                foreach($query as $element){
                    if(password_verify($_POST["mdp"], $element["mdp"])){
                        $_SESSION["nom"]=$element["nom"];
                        $_SESSION["prenom"]=$element["prenom"];
                        $_SESSION["email"]=$element["email"];
                        $_SESSION['id_user']=$element['id_user'];
                        header("Location:index.php");
                    }
                }
                echo "<script>alert('erreur lors de la connection, veuillez reessayer');</script>";
                $this->getFormConnexion();
                
            }
        }
    }

    public function getUserId($email){
        return $this->model-> getUserId($email);
    }

    public function details(){
        $infos = $this->model->details($_SESSION["id_user"]);
        include_once "view/utilisateur.php";
    }

    public function getProduits(){
        include_once "controller/produitController.php";
        $produits = new ProduitController;
        $mesproduits = $produits->getProduitsByProprio($_SESSION["id_user"]);
        include_once "view/mesproduits.php";
    }
}