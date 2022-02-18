<?php

$vr_aumento=0;

for ($vr_aumento; $vr_aumento<= 50; $vr_aumento++){
    switch ($vr_aumento) {
        case ($vr_aumento%2==0);
            echo $vr_aumento . '<br>' ;
            break;

    }
}

$vr_aumento=0;
while ($vr_aumento <= 50) {
    $vr_aumento++;
    switch ($vr_aumento) {
        case ($vr_aumento%2==0);
            echo $vr_aumento . '<br>' ;
            break;


    }
}

$vr_aumento=0;
do {
    $vr_aumento++;
    switch ($vr_aumento) {
        case ($vr_aumento%2==0);
            echo $vr_aumento . '<br>';
            break;
    }

} while ($vr_aumento <= 50);

?>