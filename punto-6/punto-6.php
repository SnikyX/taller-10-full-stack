<?php
    // DECLARACION DE VARIABLES DE ENTRADA
    const MAYORIA = 18;
    $fullName = "";
    $personAge = 0;
    
    // PROCESO
    echo "Ingrese su nombre: ";
    fscanf(STDIN, "%s", $fullName);
    echo "Ingrese su edad: ";
    fscanf(STDIN, "%d", $personAge);

    if ($personAge >= MAYORIA) {
        echo "Hola " . $fullName . ", Ud es mayor de edad";
    } else {
        echo "Hola " . $fullName . ", Ud no es mayor de edad";
    }
?>
