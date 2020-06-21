<?php

function countAll($string){
    $strArr = str_split($string);

    $letters = 0;
    $numbers = 0;

    foreach ($strArr as $digit) {
        if(is_numeric($digit)){
            $numbers ++;
        } else {
            $letters ++;
        }
    }

    return "Letras: {$letters} / Números: {$numbers}";
}

echo countAll("Alb3rt0 C4str0");