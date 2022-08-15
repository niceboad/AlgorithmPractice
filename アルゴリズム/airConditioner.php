<?php

$temperatureButton = 0;

function manipulateAirConditioner($temperature){
    $temperatureButton = 1;
    $powerSupply = 1;

    if($powerSupply == 1){
        echo "電源が付きました";
        echo PHP_EOL;
    }

    echo "現在の温度は${temperature}度です";
    echo PHP_EOL;

    $temperature = $temperature + $temperatureButton;
    echo "気温が${temperatureButton}度上がりました";
    echo PHP_EOL;
    echo "現在の温度は${temperature}度です";
    echo PHP_EOL;
    
    $powerSupply = 0;

    if($powerSupply == 0){
        echo "電源が切れました";
        echo PHP_EOL;
    }
 
}

manipulateAirConditioner(25);

