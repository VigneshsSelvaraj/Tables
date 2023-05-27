<?php


// $num = 3;

// for ($l=1; $l <=10 ; $l++) { 
//     $cal = $num*$l;
//     echo $l,"*",$num,"=",$cal."\n";
// }

function table($num,$lim)
{
    for ($l=1; $l <=$lim ; $l++) { 
        $cal = $num*$l;
        echo $l,"*",$num,"=",$cal."\n";
    }
}
table(3,20);