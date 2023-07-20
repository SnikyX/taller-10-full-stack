<?php
 // CONSTANTES
 $VALOR_ENTRADA = 25000;

// PROCESO
echo "Ingrese el tipo de afiliación: ";
fscanf(STDIN, "%s", $membershipType);
echo "Ingrese el número de personas: ";
fscanf(STDIN, "%d", $personNumber);

function porcentajeDescuento($membershipType) {
    switch ($membershipType) {
        case 'A':
            return 0.3;
        case 'B':
            return 0.25;
        case 'C':
            return 0.1;
        case 'D':
            return 0.05;
        default:
            return 0;
        }
    }

    $descuento = porcentajeDescuento($membershipType);

    $valorTotal = $VALOR_ENTRADA * $personNumber * (1 - $descuento);

    // RESULTADO
    echo "El valor total a pagar es: $" . $valorTotal . "\n";
?>