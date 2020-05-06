<?php

class FizzBuzzCalculator{
    function calculate($number){
        if ($i % 35 === 0) {
            return "FizzBuzzWuzz";
        }
        else if ($i % 21 === 0) {
            return "FizzWuzz";
        }
        else if ($i % 15 === 0) {
            return "FizzBuzz";
        }
        else if($i % 7 == 0){
            return "Wuzz";
        }
        else if($i % 5 == 0){
            return "Buzz";
        }
        else if($i % 3 == 0){
            return "Fizz";
        }
        
        return "$i";
    }
}