<?php


require_once './connexion.php'; //permet de connecter premierement a la base de donnée


$email = $_POST['email'];
$mdp = md5($_POST['mot_de_passe']);

$yves = $aida->prepare('SELECT * FROM authentification WHERE mot_de_passe=$mdp , email=$email');


$yves->execute(array($mdp, $email));// ce ci est appeler une requette preparer et il est un tableau
// $data = array($nom, $prenom, $naissance, $genre, $debut_abonnement, $numero, $email);
// $yves -> execute($data);

if($yves){
    header('location:accueil.php');
}
?>
