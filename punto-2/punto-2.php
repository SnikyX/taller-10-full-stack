<?php
    // CONSTANTS
    const PRIMER_VALOR = 4000;
    define("WELCOME_MESSAGE", "Sumas de Constantes Y variables");

    // VARIABLES
    $segundoValor = 5000;
    $result = 0;

    $result = PRIMER_VALOR + $segundoValor;

    echo WELCOME_MESSAGE . "\n";
    echo "Constante: " . " " . PRIMER_VALOR . "\n";
    echo "Variable: " . " " . $segundoValor . "\n";
    echo "el resultado de la suma es " . $result . "\n";

    $segundoValor = 7203;
    $result = PRIMER_VALOR + $segundoValor;
    
    echo "--------------------\n";
    echo "Constante: " . " " . PRIMER_VALOR . "\n";
    echo "Variable: " . " " . $segundoValor . "\n";
    echo "el resultado de la suma es " . $result;
?>