<?php

session_start () ;

// variables globales
$bdServeur = "localhost" ;
$bdUser = "root" ;
$bdMdp = "" ;
$bdBase = "boutique" ; 
$prixTshirt = 25 ;

// inclusion des autres fichiers
include_once ("chaines.php") ;
include_once ("curseurs.php") ;
include_once ("outils.php") ;


$bdd = new PDO('mysql:host=localhost;dbname=boutique', $bdUser, $bdMdp);

// r�cup�ration de l'�ventuel cookie
if (isset($_COOKIE["login"])) {
  $leId = ($_COOKIE["login"] + 27) / 353 ;
  $req = $bdd->prepare('SELECT * from client where numclient= ?') ;
  $req->execute(array($leId));
  if ($req->rowCount()!=0) {
    $_SESSION["login"] = $req->login ;
    $_SESSION["id"] = $req->id ;
  }
}

// r�cup�ration des variables de session �ventuelles
if (isset($_SESSION["login"])) {
  $login = $_SESSION["login"] ;
  $id = $_SESSION["id"] ;  
}else{
  $login = "" ;
  $id = "" ;
}

?>