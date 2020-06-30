<?php
    function update_dispo($quantité)
    {
    if ($quantité>0) 
        return true; 
    else
        return false ;
    }
    
    function restockage($quantité, $nb_ajout) 
    {
        echo "<p> $nb_ajout produits ont été ajoutés au stock.</p>";
        return $quantité + $nb_ajout;
    }