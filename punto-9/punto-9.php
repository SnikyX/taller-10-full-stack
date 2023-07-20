<?php
    // DECLARACION DE VARIABLES DE ENTRADA
    $number = 0;
    $x =0;

    // PROCESO
    echo "Escriba el numero a multiplicar: ";
    fscanf(STDIN, "%d", $number);
    
    while($x <= 30) {
        $result = $x * $number;
        echo $number . " X " . $x . " = " . $result . "\n";
        $x++;
    }
?>