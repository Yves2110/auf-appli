<?php 
include("./connexion.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists des abonnés</title>
    <link rel="stylesheet" href="../style/liste.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="header" class="col-xs">
        <img src="../images/logo/index.png" alt="" class="col-xs">
        <p class="col-xs">
            <h1>Listes des abonnés</h1>
        </p>
        <img src="../images/logo/auf.png" alt="" class="col-xs">
    </div>
    <div class="containe">
        <div class="tableau">

            <?php
            
            $aida = new PDO("mysql:host=localhost;dbname=auf-app-data", "root", "");
            $aida->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $result = $aida->query("SELECT * FROM listes ORDER BY nom ASC");
    
            if (!$result) {
              echo "la recuperation a echoue";
            } else {
              $nombre = $result->rowCount();
            ?>

                <h4 class="text-center text-uppercase text-danger">Vous avez
                    <?= $nombre ?> de personnes enregistrées</h4>
                <table class="table">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Naissance</th>
                        <th>Genre</th>
                        <th>Début_d'abonnement</th>
                        <th>Numéro</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                    <?php 
                    while ($ligne = $result->fetch()){
                        
              echo "<tr>";
                echo "<td>" . $ligne["nom"] . "</td>";
                echo "<td>" . $ligne["prenom"] . "</td>";
                echo "<td>" . $ligne["naissance"] . "</td>";
                echo "<td>" . $ligne["genre"] . "</td>";
                echo "<td>" . $ligne["debut_abonnement"] . "</td>";
                echo "<td>" . $ligne["numero"] . "</td>";
                echo "<td>" . $ligne["email"] . "</td>";
                echo  "<td><a href='./icon.php?id=".$ligne["email"]."'> <i class='fa-solid fa-trash' style='color:brown;'></i></i> </a>
                <a href='./modifier.php?id=".$ligne["email"]."'> <i class='fa-solid fa-pen' style='color:brown;'></i></i> </a></td>";
                echo "</tr>";
  
                    }
                    ?>
                </table>
                <?php
            }
                ?>
        </div>
        <hr>
  <p class="mb-0 text-center font-weight-bold"><a href="./accueil.php" class="list-unstyled text-light ">ACCUEIL</a><a href="./Enregistrement.php" class="list-unstyled text-danger">RETOUR</a></p>
    </div>


    <footer>
        copyright-AUF 2022
    </footer>
</body>

</html>