<?php

    function my_is_prime(int $number) : bool{
        $numDiviser=0;
        for ($i = 1; $i <= $number; $i++) {
            if($number%$i===0){
                $numDiviser++;
               // echo $numDiviser;
            }
          }

        if($numDiviser===2){
            echo "<br>".$number." is prime";
            return true;
        }else{
            echo "<br>".$number." is not prime";
            return false;
        }
    }


    
   echo my_is_prime(0);
   echo  my_is_prime(1);
   echo my_is_prime(3);
   echo my_is_prime(199);

?>