<?php
function bubbleSortDescendente(array &$array) {
    $n = count($array);
    // Recorrer todos los elementos del array
    for ($i = 0; $i < $n - 1; $i++) {
        // Realizar el intercambio de elementos
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Si el elemento actual es menor que el siguiente, intercambiamos
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    $array = array_unique($array);
}

// Lista de ejemplo con duplicados y valores negativos
$lista = [3, -1, 4, 2, -5, 3, 0];

// Mostrar la lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($lista);

// Ordenar la lista en orden descendente usando Bubble Sort
bubbleSortDescendente($lista);

// Mostrar la lista después de ordenar
echo "\nLista después de ordenar (descendente):\n";
print_r($lista);
?>
