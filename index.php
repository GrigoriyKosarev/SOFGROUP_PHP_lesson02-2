<meta charset="utf-8">

<?php

    $n = 5;
    $arr = [];

    for ($i = 1; $i < ($n + 1); $i++){

        for ($j=1; $j < $i + 1; $j++){
            if ((isset($arr[$i-1][$j-1])) or (isset($arr[$i-1][$j]))){
                $arr[$i][$j] = $arr[$i-1][$j] + $arr[$i-1][$j-1];
            }
            else{
                $arr[$i][$j] = 1;
            }
            echo $arr[$i][$j];
        }

        echo "<br>";
    }

?>