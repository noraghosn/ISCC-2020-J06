<?php
    function clock()
    {
        $minutes= 00;
        $heures=00;
        while ($minutes<=59)
        {
            echo "<br>$minutes";
            $minutes++;
        }
        if ($minutes == 59)
        {
            echo $heures;
        }
        while ($heures<=23)
        {
            echo "<br>$heures";
            $heures++;
        }
    }
    clock()
    ?>