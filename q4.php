<?php

$count =1;

$i=1;
 for($i;$i<=99;$i++){
    echo str_pad($i, 2,"0" , STR_PAD_LEFT);

    if($i<99){
   echo ' ,';
 }

 $count++;

 if($count%20===0){
   echo '<br>';
 }

}
 
?>