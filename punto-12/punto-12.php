<?php

    echo "Ingrese un numero para ver la tabla de multiplicacion: ";
    fscanf(STDIN, "%d", $number);

    echo "Tabla de multiplicar del $number:\n";

    for ($i = 0; $i <= 30; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result \n";
    }
?>