<?php

    $str1= 'La maîtrise des fondamentaux du code et de la programmation 
    dans les domaines du business, du marketing et de la communication 
    est un avantage sérieux et utile.';

    $nombre_de_caractère= strlen ($str1);
    
    echo "<p> La chaine str1 contient $nombre_de_caractère caractères. </p>";

    $nombre_de_mots= str_word_count($str1);
    echo "<p> La chaine str1 contient $nombre_de_mots mots.</p>";

    $texte_minuscule= strtolower ($str1);
    echo "<p> $texte_minuscule .</p>";

    $texte_majuscule= strtoupper ($str1);
    echo "<p> $texte_majuscule .</p>";

    $texte_mélangé= str_shuffle ($str1);
    echo "<p> $texte_mélangé .</p>";

    $la_majuscule= str_ireplace ("la", "LA", $str1);
    echo '<p>' .$la_majuscule.'</p>';

    $nbr=34;
    echo substr ($str1, 0, -$nbr);

?>