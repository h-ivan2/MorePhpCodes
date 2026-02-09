




<?php

 echo "<table border='1' width='270px' cellspacing='0' cellpadding='0'>";
for($i=1; $i<=8;$i++){
    echo "<tr>";
    for($j=1; $j<=8;$j++){
        if(($i%2==0 && $j%2==0) || ($i%2!==0 && $j%2!==0)){
            echo "<td style='width:30px; height:30px; background-color:black;'></td>";
        }else{
            echo "<td style='width:30px; height:30px; background-color:white;'></td>";
        }
    }
    echo "</tr>";
       
    }

    echo "</table>"

?>
