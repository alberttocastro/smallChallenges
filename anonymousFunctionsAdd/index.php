<?php
//https://edabit.com/challenge/rW39aD6QpuRRes6ze
function adds_n($n){
    return function($adder) use ($n){
        return $n + $adder;
    };
};

$adds_10 = adds_n(10);

echo $adds_10(1) . "\n";
echo $adds_10(5) . "\n";