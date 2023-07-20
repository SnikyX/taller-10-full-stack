<?php
    // DECLARACION DE VARIABLES DE ENTRADA
    $firstNumber = "";
    $secondNumber = "";

    // PROCESO
    echo "Ingresa tu nombre ";
    fscanf(STDIN, "%s", $firstName);
    echo "Ingresa tu apellido ";
    fscanf(STDIN, "%s", $lastName);

    $fullName = $firstName . " " . $lastName;

    // SALIDA
    echo "Bienvenido, " . $fullName;
?>