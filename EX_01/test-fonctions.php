<?php

include ("affichage.php");
include ("gestion-produit.php");
$nomproduit= 'T shirt femme';
$couleur= 'rouge';
$prix= 15.50;
$disponible= true;
$quantité= 10;
$nb_ajout= 10;

afficher_produit($nomproduit,$couleur,$prix,$disponible);
$disponible= update_dispo ($quantité);
restockage($quantité, $nb_ajout);
?>