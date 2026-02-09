<?php

$h=7;
for($i=1;$i<=$h;$i++){
    for($j=1;$j<=5;$j++){
        if($j==1 || $j ==5 || $i==4){
            echo "* ";

        }else{
            echo"&nbsp;&nbsp;&nbsp";
        }
    }
    echo '<br>';
}

?>

