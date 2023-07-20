<?php
    // DECLARACION DE FUNCIONES
    function sumar($a, $b) {
        return $a + $b;
    }
    function restar($a, $b) {
        return $a - $b;
    }
    function multiplicar($a, $b) {
        return $a * $b;
    }
    function dividir($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            echo "Error, No se puede dividir entre cero.\n";
            return null;
        }
    }
   // ENTRADAS
    echo "Ingrese la primera cifra: ";
    fscanf(STDIN, "%d", $cifra1);
    echo "Ingrese la segunda cifra: ";
    fscanf(STDIN, "%d", $cifra2);
    $options = array('suma', 'resta', 'multiplicacion', 'division');
    
    echo "Operaciones matematicas disponibles:\n";
    foreach ($options as $option) {
        echo "- " .($option) . "\n";
    }
    echo "Ingrese el tipo de operacion: ";
    fscanf(STDIN, "%s", $operation);
    // PROCESO
    switch ($operation) {
        case 'suma':
            $result = sumar($cifra1, $cifra2);
            break;
        case 'resta':
            $result = restar($cifra1, $cifra2);
            break;
        case 'multiplicacion':
            $result = multiplicar($cifra1, $cifra2);
            break;
        case 'division':
            $result = dividir($cifra1, $cifra2);
            break;
        default:
            echo "Error, opcion no disponible o invalida.\n";
            $result = null;
    }
    // RESULTADO
        echo "El resultado de la operación es: " . $result . "\n";
?>