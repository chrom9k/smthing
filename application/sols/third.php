<?php
    if (!empty($_GET)) {
        thirdFunc();
    }
    echo 'Zashlo';

    function thirdFunc() {
        $N = $_GET['numb'];
        $n = (int)$N/2;
        $k = 1;
        $arr = $arr[$N][$N];
        for ($i = 0; $i < $N; $i++) {
            for ($j = 0; $j < $N; $j++) {
                $arr[$i][$j] = 0;
            }
        }
        
        $i = 0;
        $j = $N/2;
        while ($k <= $N*$N) {
            if (($i == -1) && ($j == $N)) {
                $i = 0;
                $j = 0;
                continue;
            }
            if ($i < 0) {
                $i = $N - 1;
                continue;
            }
            if ($i > $N - 1) {
                $i = 0;
                continue;
            }
            if ($j > $N - 1) {
                $j = 0;
                continue;
            }
            if ($j < 0) {
                $j = $N - 1;
                continue;
            }
            if ($arr[$i][$j] != 0) {
                $i += 2;
                $j--;
                continue;
            }
            $arr[$i][$j] = $k++;
            $i--;
            $j++;
        }
        
        echo json_encode($arr);
    }
