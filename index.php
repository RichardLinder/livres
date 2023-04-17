<?php 

include_once "./Livre.php";
include_once "./Auteur.php";

$voltaire =  new Auteur ("Voltaire","Voltaire");

echo $voltaire;


$candide = new Livre ("candide" , 5, 1759,0, $voltaire);
$zadig = new Livre ("Zadig" , 60, 1747,0, $voltaire);

echo $candide->getInfo();


echo $voltaire->Bibliotheque();