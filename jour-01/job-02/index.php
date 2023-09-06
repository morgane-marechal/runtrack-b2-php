<?php
function my_str_reverse(string $string) : string{
    $str_length=0;
   // $occurences_number=0;
    $newArray=[];
    $newString="";
    while(isset($string[$str_length])){
        $str_length++;        
    }

    for ($j= $str_length; $j >= 0; $j--) {
      //array_push($newArray, $string[$j]);
      $newArray[]=$string[$j];
    }
    //var_dump($newArray);

    for($k=0; $k<=$str_length; $k++){
        $newString=$newString.$newArray[$k];
    }
    echo $newString;
}
echo my_str_reverse('hello World');

?>