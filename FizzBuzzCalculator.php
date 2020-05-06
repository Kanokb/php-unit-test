<?php

class FizzBuzzCalculator{
    function calculate($number){
        if ($number % 35 === 0) {
            return "FizzBuzzWuzz";
        }
        else if ($number % 21 === 0) {
            return "FizzWuzz";
        }
        else if ($number % 15 === 0) {
            return "FizzBuzz";
        }
        else if($number % 7 == 0){
            return "Wuzz";
        }
        else if($number % 5 == 0){
            return "Buzz";
        }
        else if($number % 3 == 0){
            return "Fizz";
        }

        return "$number";
    }
}