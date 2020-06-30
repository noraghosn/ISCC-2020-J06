<?php

include ("affichage.php");
include ("gestion-produit.php");
$nomproduit= 'T shirt femme';
$couleur= 'rouge';
$prix= 15.50;
$disponible= true;
$quantité= 10;


afficher_produit($nomproduit,$couleur,$prix,$disponible);
$quantité= achat ($quantité,5);
$disponible= update_dispo ($quantité);
afficher_produit($nomproduit,$couleur,$prix,$disponible);
$quantité= achat ($quantité,5);
$disponible= update_dispo ($quantité);
afficher_produit($nomproduit,$couleur,$prix,$disponible);
$quantité= restockage($quantité, 5);
$disponible= update_dispo ($quantité);
afficher_produit($nomproduit,$couleur,$prix,$disponible);
?>