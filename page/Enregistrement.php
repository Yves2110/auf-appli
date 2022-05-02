<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="../style/Enregistrement.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/fontawesome.css">
    
</head>

<body>
    <div class="containe">
        <div class="header">
            <!-- <a href="../index.php"> -->
            <img src="../images/logo/index.png" alt=""></a>
            <p>
                <h1>Enregistrement d'abonnés</h1>
            </p>
            <img src="../images/logo/auf.png" alt="" class="img-fluid">
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form action="traitement.php" method="post">
        <div class="container_fluid d-flex">
            <div class="row">
                    <div class="col-md-3 ">
                        <input type="text" name="nom" id="" placeholder="Nom" pattern="[a-zA-Z]{1,}" required="">
                    </div>
                    <div class="col-md-3 offset-3 ">
                        <input type="datetime" name="debut_abonnement" id="" placeholder="Début d'abonnement"  required="">
                    </div>
                    <br> <br>
                    <div></div>
                    <div class="col-md-3 ">
                        <input type="text" name="prenom" id="" placeholder="Prénom" pattern="[a-zA-Z]{1,}" required="">
                    </div>
                    <div class="col-md-3 offset-3 ">
                        <input type="datetime" name="fin" id="" placeholder="Fin d'abonnement">
                    </div>
                    <br>
                    <div class="col-md-3 ">
                        <input type="datetime" name="naissance" id="" placeholder="Date de naissance"  required="">
                    </div>
                    <div class="col-md-3 offset-3 ">
                        <input type="text" name="numero" id="" placeholder="Numéro"  pattern="[0-9]{1,}" required="">
                    </div>
                    <br>
                    <div class="col-md-3  genre">
                         <input type="radio" name="radio" value="M" id=""  required="">male <input type="radio" name="radio" id=""  value="F" required="">Female
                    </div>
                    <div class="col-md-3 offset-3 ">
                        <input type="email" name="email" id="" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                        
                        required="">
                    </div>
                </div>
                <span class="bord-rond">
                    </span>
                    <div class="col-md-2 liste">
                        <a href="#">
                            <img src="../images/Add User Group Man Man_48px.png" alt="">
                            <!-- <i class="fa-solid fa-users-medical"></i> -->
                            <h2 class="enregistrer"><input type="submit" value="Enregistré" style="color: brown;"></h2>
                        </div>
                    </a>
                </div>
            </form>
        <br><br><br>
        <hr>
  <p class="mb-0 text-center font-weight-bold"><a href="./acceuil.php" class="list-unstyled text-light"> RETOUR</a></p>
        <br><br>
        <footer>
            copyright-AUF 2022
        </footer>
         <?php
    if(isset($_POST['submit'])){
   if(!empty($_POST['radio'])) {
        echo '  ' . $_POST['radio'];
    } else {
        echo 'SVP veuillez spécifier votre genre.';
    }
    }
?>
 </body>

</html>
