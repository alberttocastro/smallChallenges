<?php 

function flip($str, $spec = null) {
    $explodedStringArray = explode(" ", $str);
    
    switch($spec){
        case 'word':
            $explodedStringArray = array_map(function($el){
                return strrev($el);
            }, $explodedStringArray);
            break;
        case 'sentece':
        default:
            $explodedStringArray = array_reverse($explodedStringArray);
            break;
    }

    $result = array_reduce($explodedStringArray, function($cumulative, $word){
        return $cumulative . ' ' . $word; 
    });
    $result = trim($result);

    return $result;
}

$sentence = "Eu amo a minha esposa maravilhosa!";

echo flip("Hello", "sentence"). "\n";
echo flip($sentence) . "\n";
echo flip($sentence, 'word');