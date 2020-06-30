<?php

include ("affichage.php");
$nomproduit= 'T shirt femme';
$couleur= 'rouge';
$prix= 15.50;
$disponible= true;
$quantité= 10;

afficher_titre($nomproduit);
afficher_description($couleur,$prix);
afficher_produit($nomproduit,$couleur,$prix,$disponible);
?>