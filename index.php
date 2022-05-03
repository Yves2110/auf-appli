<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./style/inscription.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>

    <div class="containe">
        <div class="header">
            <!-- <a href="../index.php"> -->
            <img src="../images/logo/index.png" alt=""></a>
            <p>
                <h1>Bienvenue à l'AUF</h1>
            </p>
            <img src="../images/logo/auf.png" alt="" class="img-fluid">
        </div>
        <div id="fluid">

            <div class="ici">
                <h1>Inscrivez-vous ici!</h1>
            </div>
            <form action="./page/traitement2.php" method="post">
                <div class="container_fluid">
                    <div class="col-md-4">
                        <input type="text" name="nom" id="" placeholder="Nom" pattern="[a-zA-Z]{1,}" required="">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="prenom" id="" placeholder="Prénom" pattern="[a-zA-Z]{1,}" required="">
                    </div>
                    <!-- <div class="col-md-4">
                        <input type="text" name="numero" id="" placeholder="Numéro" pattern="[0-9]{1,}" required="">
                    </div> -->
                    <div class="col-md-4">
                        <input type="email" name="email" id="" placeholder="E-mail" pattern="[a-z0-9]+@[a-z0-9.-]{2,}" required="">
                    </div>
                    <div class="col-md-4">
                        <input type="password" name="password" id="" placeholder="mot de passe" required="">
                    </div>
                    <div class="col-md">
                        <div class="col-md-4">
                            <input type="password" name="password" id="" placeholder="Confirmer votre mot de passe" required="">
                        </div>
                        <div class="col-md-2">
                            <h2 class="enregistrer"><input type="submit" value="S'inscrire" style="color: brown; width: 150px;"></h2>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <br><br><br><br>
    <a href="./page/authentification.php">Se connecter</a>
    </div>
    <footer style="margin-top:350px;">
        copyright-AUF 2022
    </footer>
</body>

</html>