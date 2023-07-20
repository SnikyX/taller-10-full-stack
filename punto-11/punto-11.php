<?php
    // DECLARACION DE VARIABLES DE ENTRADA
    $sum = 0;

    // PROCESO
    for($x = 0; $x <=100; $x += 2) {
        $sum = $sum + $x;
        echo $x . "\n";
    }

    echo "Suma total: $sum";
?>