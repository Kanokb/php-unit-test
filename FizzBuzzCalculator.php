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
<<<<<<< HEAD
        
        return "$i";
=======

        return "$number";
>>>>>>> 33057faf4e052c42445ba098bb697d336f5c3754
    }
}