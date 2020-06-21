<?php
//https://edabit.com/challenge/8Jy6TexcHDNTNqiuv

function cumulativeArray($array){
    $result = [];
    $sum = 0;

    foreach ($array as $number) {
        $sum += $number;
        array_push($result, $sum) ;
        echo "Processando...\n";
    };

    echo "Retornando resultado...\n";
    return $result;
}

try {
    var_dump(cumulativeArray([10, 5, 7, 8]));
} catch (\Throwable $th) {
    echo $th;
}