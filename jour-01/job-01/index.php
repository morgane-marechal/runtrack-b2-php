<?php

function my_str_search($haystack, $needle){
    $count=0;
    $str_length=0;
    $occurences_number=0;
    while(isset($haystack[$str_length])){
        $str_length++;        
    }

    for ($j= 0; $j <= $str_length; $j++) {
        if($haystack[$j]===$needle){
            $occurences_number++;
        }        
    }
    return $occurences_number;
}

echo my_str_search('zolzzzlo', 'z');

?>