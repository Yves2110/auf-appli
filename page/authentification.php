<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="../style/authentification.css">
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
                <h1>Authentification</h1>
            </div>
            <?php
            if (isset($_GET['inv']))
                {
                    echo '<div class="alert bg-danger "> MDP OU EMAIL INVALIDE</div>';
                }
            ?>
            <form action="verification.php" method="post">
                <div class="container_fluid">
                    <input type="email" name="email" id="" placeholder="E-mail"  required="">
                </div>
                <div class="col-md-4">
                    <input type="password" name="password" id="" placeholder="mot de passe"  required="">
                </div>
                <div class="col-md-2">
                    
                        <h2 class="enregistrer">
                            
                        </h2>
                        <input type="submit" value="Se connecter" style="color: brown; width: 200px;">
                
                </div>
                 </form>
    </div>
    <a href="../index.php">inscription</a>
    </div>
    <footer>
        copyright-AUF 2022
    </footer>
</body>

</html>