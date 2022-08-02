<?php

function  bubble_sort($ara)
{
    $arr = $ara;
    $size = sizeof($arr) - 1;
    for ($i = $size; $i >= 0; $i--) {
        for ($j = 0; $j <= ($i - 1); $j++)
            if ($arr[$j] > $arr[$j + 1]) {
                $k = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $k;
            }
    }
    echo implode($arr);
}

bubble_sort(array(1, 3, 2));
