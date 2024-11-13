<?php

function insertionSort($arr) {
    $n = count($arr);
    
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        
        // Mover los elementos de arr[0..i-1] que son mayores que key
        // a una posición adelante de su posición actual
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) { // Comparación insensible a mayúsculas
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    
    return $arr;
}

// Ejemplo de uso
$names = ["Carlos", "ana", "Pedro", "beatriz", "maria", "Juan"];
echo "Lista original: ";
print_r($names);

$sortedNames = insertionSort($names);
echo "\nLista ordenada: ";
print_r($sortedNames);

?>
