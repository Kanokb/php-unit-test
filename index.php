<?php
include("Calculator.php");
include("GradeCalculator.php");
    $calculator = new Calculator();
    $result = $calculator->sum(400, 400);

    $score = new GradeCalculator();
    $results = $score->getGrade();

echo $result;