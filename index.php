<?php

$calculator = new Calculator();
$result = $calculator->sum(400, 400);

echo $result;

class Calculator{
    function sum($num1, $num2){
        return $num1 + $num2;
    }
}