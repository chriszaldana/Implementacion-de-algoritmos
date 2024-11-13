<?php

function mergeSort($arr) {
    // Si el array tiene 1 o ningún elemento, ya está ordenado
    if (count($arr) <= 1) {
        return $arr;
    }

    // Dividir el array en dos mitades
    $middle = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    // Ordenar cada mitad de forma recursiva
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Mezclar las dos mitades ya ordenadas
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    // Comparar y combinar los elementos de las dos mitades
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {  // Comparación insensible a mayúsculas
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Añadir los elementos restantes
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Ejemplo de uso
$words = ["Manzana", "naranja", "Banana", "pera", "Uva", "kiwi"];
echo "Lista original: ";
print_r($words);

$sortedWords = mergeSort($words);
echo "\nLista ordenada: ";
print_r($sortedWords);

?>
