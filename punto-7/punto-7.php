<?php
    // DECLARACION DE VARIABLES DE ENTRADA
    $firstNumber = 0;
    $secondNumber = 0;
    $operationType = "";
    $result = 0;

    // PROCESO
    echo "Ingrese el primer numero a operar";
    fscanf(STDIN, "%d", $firstNumber);
    echo "Ingrese el segundo numero a operar";
    fscanf(STDIN, "%d", $secondNumber);

    echo "Elija el tipo de operacion:  \n";
    echo "1 - Sumar\n";
    echo "2 - Restar\n";
    echo "3 - Multiplicar\n";
    echo "4 - Dividir\n";
    fscanf(STDIN, "%d", $operationType);

    switch($operationType) {
        case 1:
            $result =$firstNumber + $secondNumber;
            break;
        case 2:
            $result =$firstNumber - $secondNumber;
            break;
        case 3:
            $result =$firstNumber * $secondNumber;
            break;
        case 4:
            $result =$firstNumber / $secondNumber;
            break;
        default:
            echo "No eligio una opcion correcta\n";
    }

    echo "El resultado es: " . $result;
?>
  