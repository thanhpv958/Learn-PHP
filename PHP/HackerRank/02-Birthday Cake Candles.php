<?php

function birthdayCakeCandles($arr) {
    $max = $arr[0];
    $count = 0;
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }

    foreach ($arr as $value) {
        if ($max == $value) {
            $count++;
        }
    }

    return $count;
}

function birthdayCakeCandles2($arr) {
    // count the recurring of the candle
    $candles = array_count_values($arr);
    // sort the recurring candle by descending & get the most recurring candle
    krsort($candles);
    $candlesBlowsValue = array_values($candles);

    return $candlesBlowsValue[0];
}

$arr = [ 2, 4, 3, 4 ];
$result = birthdayCakeCandles($arr);
echo $result;
