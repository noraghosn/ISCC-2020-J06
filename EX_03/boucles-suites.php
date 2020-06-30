<?php

    function compter_dizaine($maximum)
    {
        $nombre=1;
        while ($nombre<=$maximum)
        {
            echo "<br> <p> $nombre </p>";
            $nombre++;
        }
        if (!($nombre%100))
        {
            echo 'Ceci est une centaine. <br>';
        }
        elseif (!($nombre%10))
        {
            echo 'Ceci est une dizaine.<br>';
        }
        return;
    }
    compter_dizaine(100);
    ?>