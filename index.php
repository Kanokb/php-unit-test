<?php
include("Calculator.php");


$calculator = new Calculator();
$result = $calculator->sum(400, 400);

echo $result;