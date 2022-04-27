<?php


require_once './connexion.php'; //permet de connecter premierement a la base de donnée

$nom = $_POST['nom'];//$_POST variable globale ou super globale
$prenom = $_POST['prenom'];
$naissance = $_POST['naissance'];
$genre = $_POST['radio'];
$debut_abonnement = $_POST['debut_abonnement'];
$numero = $_POST['numero'];
$email = $_POST['email'];

$yves = $aida->prepare('INSERT INTO listes (nom, prenom, naissance, genre, debut_abonnement, numero, email) VALUES(?, ?, ?, ?, ?, ?, ?)');


$yves->execute(array($nom, $prenom, $naissance, $genre, $debut_abonnement, $numero, $email));// ce ci est appeler une requette preparer et il est un tableau
// $data = array($nom, $prenom, $naissance, $genre, $debut_abonnement, $numero, $email);
// $yves -> execute($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="liste.css">
</head>

<body class="bg-light">
<div class="header">
            <!-- <a href="../index.php"> -->
            <img src="../images/logo/index.png" alt=""></a>
            <p>
                <h1>Enregistrement d'abonnés</h1>
            </p>
            <img src="../images/logo/auf.png" alt="" class="img-fluid">
        </div>
    <div class="container">
        <div class="row">
            <div class="offset-2">
                
                </div>
        <div class="col-md-8 mt-5">
        <div class="alert alert-danger mt-5 " role="alert">
            <h4 class="alert-heading do text-center font-weight-bold">Abonné enregistrer avec succés!</h4>
            
            <hr>
  <p class="mb-0 text-center font-weight-bold"><a href="./Enregistrement.php" class="list-unstyled text-light" style="margin-bottom: 250px;"> RETOUR</a></p>
</div>
</div>
        <div class="-offset-2">

            </div>
        </div>
    </div> 
    <footer>
        copyright-AUF 2022
    </footer>
</body>
</html>