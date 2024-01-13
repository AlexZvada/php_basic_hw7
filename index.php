<?php


function arrayRandomaiser(int $lenght): array
{
    $array = [];
    for ($i = 0; $i < $lenght; $i++) {
        $array[] = rand(1, 100);
    }
    return $array;
}
function customSort(array $array, string $flag = 'up'): array
{
    if ($flag === 'down') {
        rsort($array, $flag = SORT_NUMERIC);
        echo 'min value= ' . $array[array_key_last($array)] . PHP_EOL;
        echo 'max value= ' . $array[array_key_first($array)] . PHP_EOL;
        return $array;
    }
    sort($array, $flag = SORT_NUMERIC);
    echo 'min value= ' . $array[array_key_first($array)] . PHP_EOL;
    echo 'max value= ' . $array[array_key_last($array)] . PHP_EOL;
    return $array;
}


$randomArray = arrayRandomaiser(20);

var_dump($randomArray);

$sortedArray = customSort($randomArray);

var_dump($sortedArray);