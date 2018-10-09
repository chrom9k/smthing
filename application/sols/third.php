<?php
    if (!empty($_GET)) {
        thirdFunc();
    }

    function thirdFunc() {
        $N = $_GET['numb'];
        $k = 1;
        $arr = array_fill(0, $N, array_fill(0, $N, 0));
        
        $i = 0;
        $j = (int)$N/2;
        echo $j;
        
        echo json_encode($arr);
    }
