<meta charset="utf-8">

<?php

    $n = 5;
    $arr = [];

    for ($i = 1; $i < ($n + 1); $i++){

        for ($j=1; $j < $i + 1; $j++){
            if (($arr[$i-1][$j-1] == null) or ($arr[$i-1][$j] == null)){
                $arr[$i][$j] = 1;
            }
            else{
                $arr[$i][$j] = $arr[$i-1][$j] + $arr[$i-1][$j-1];
            }
            echo $arr[$i][$j];
        }

        echo "<br>";
    }

?>