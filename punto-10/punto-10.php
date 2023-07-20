<?php
$number = 1;

echo "Numeros pares del 1 al 100:\n";

while ($number <= 100) {
    if ($number % 2 == 0) {
        echo $number . "\n";
    }
    $number++;
}
?>
