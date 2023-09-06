<?php

function my_fizz_buzz(int $length) : array{
    $array=[];
    for ($i = 1; $i < $length; $i++) {
        if($i%5 == 0 && $i%3 == 0){
            array_push($array, "FizzBuzz");
        }
        elseif ($i%5==0 ) {
            array_push($array, "Buzz");
        }elseif ($i%3==0){
            array_push($array, "Fizz");
        } else {
            array_push($array, $i);
        }
    }

    return $array;

}

print_r(my_fizz_buzz(12));



?>