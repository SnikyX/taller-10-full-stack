<?php
    // DECLARACION DE VARIABLES DE ENTRADA
    $firstNumber = 0;
    $secondNumber = 0;

    // PROCESO
    echo "Ingresa el primer numero a sumar";
    fscanf(STDIN, "%d", $firstNumber);
    echo "Ingresa el segundo numero a sumar";
    fscanf(STDIN, "%d", $secondNumber);

    $add = $firstNumber + $secondNumber;

    // SALIDA
    echo "La sumas es: " . $add;
?>