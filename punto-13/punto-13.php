<?php
    // DATOS
    $sum = 0;
    $arrayNumber = array(7,21,41,13,22);
    
    // PROCESO  

    for ($number = 0; $number < 5; $number++) {
    $sum = $sum + $arrayNumber[$number];
    }

    echo "La suma del arreglo es: " . $sum;
?> 