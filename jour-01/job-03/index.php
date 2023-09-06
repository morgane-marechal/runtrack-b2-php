<?php

    function my_is_multiple(int $divider,int $multiple) : bool{
        if(($multiple % $divider)===0){
            return true;
        }else{
            return false;
        }

     }

   echo  my_is_multiple(2,15);
?>