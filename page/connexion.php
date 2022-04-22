<?php


$dsn ="mysql:host=localhost;dbname=auf-app-data";



try{
$aida = new PDO($dsn, "root", "");
}
catch(PDOException $non){
    die("Erreur:" .$non -> getMessage());
}

?>