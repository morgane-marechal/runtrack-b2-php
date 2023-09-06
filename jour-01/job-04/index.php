<?php

function my_fizz_buzz(int $length) : array{
    $array=[];
    for ($i = 1; $i < $length+1; $i++) {
        if($i%5 == 0 && $i%3 == 0){
            $array[]="FizzBuzz";
        }
        elseif ($i%5==0 ) {
            $array[]="Buzz";
        }elseif ($i%3==0){
            $array[]="Fizz";
        } else {
            $array[]=$i;

        }
    }
  

    foreach ($array as $key => $value) {
        echo $value ." ; ";
    }
    echo "<br>";

    return $array;

}

my_fizz_buzz(12);
//echo "<br>";
print_r(my_fizz_buzz(21));



?>