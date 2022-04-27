    
<?php
require_once('./connexion.php');
$mail = $_GET["id"];


$yves = $aida->prepare("DELETE FROM listes WHERE email= ?");


$yves->execute(array($mail));
header('location: ./Listes.php');

// $bd = $aida->prepare('DELETE FROM listes WHERE email= ?')
?>

