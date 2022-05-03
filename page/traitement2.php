<?php


require_once './connexion.php'; //permet de connecter premierement a la base de donnée

$nom = $_POST['nom'];//$_POST variable globale ou super globale
$prenom = $_POST['prenom'];
$mdp = md5($_POST['password']);

$email = $_POST['email'];

$yves = $aida->prepare('INSERT INTO authentification (nom, prenom, email, mot_de_passe)
 VALUES(?, ?, ?, ?)');


$yves->execute(array($nom, $prenom, $email, $mdp));// ce ci est appeler une requette preparer et il est un tableau


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body class="bg-light">
<div class="header">
            <!-- <a href="../index.php"> -->
            <img src="../images/logo/index.png" alt=""></a>
            <p>
                <h1>Authentification</h1>
            </p>
            <img src="../images/logo/auf.png" alt="" class="img-fluid">
        </div>
    <div class="container h-566">
        <div class="row">
            <div class="offset-2">
                
                </div>
        <div class="col-md-8 mt-5">
        <div class="alert alert-success mt-5 mb-5 " role="alert">
            <h4 class="alert-heading do text-center font-weight-bold">Administrateur enregistré</h4>
            
            <hr>
  <p class="mb-0 text-center font-weight-bold"><a href="../page/authentification.php" class="list-unstyled text-light" style="margin-bottom: 250px;">Connexion</a></p>
</div>
</div>
        <div class="-offset-2">

            </div>
        </div>
    </div> 
    <footer class="mb-5">
        copyright-AUF 2022
    </footer>
</body>
</html>