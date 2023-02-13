<?php

 //assignment problem -01

 function isEvenOdd($num){
    $n = $num % 2;
    if($n == 0 && $num > 0){
        return "$num is an possitive even number";
    }elseif($n == 0 && $num < 0){
        return "$num is an negetive even number";
    }elseif($n == 1 && $num > 0){
        return "$num is an positive odd number";
    }elseif($n == -1 && $num < 0){
        return "$num is an negetive odd number";
    }else{
        return "$num is not positive nor negetive";
    }
}

echo isEvenOdd(23);
echo "\n";
echo isEvenOdd(-7);
echo "\n";

// assignment problem -02

$result = 0;
for($i = 1; $i <= 100; $i++){
    $result += $i;
}
echo "sum of the series = $result";

