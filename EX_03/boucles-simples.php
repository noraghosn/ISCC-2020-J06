<?php

function compter($maximum)
{
    $nombre=1;
while ($nombre <= $maximum)
{
echo "<br>$nombre"; 
$nombre ++;
}
}

compter(10) ;

function compter_for($maximum)
{
    for ($nombre=1 ; $nombre<=$maximum ; $nombre++)
    {
    echo "<br>$nombre";
}
}
compter_for(10) ;
?>
