<?php
    if (!empty($_GET)) {
        thirdFunc();
    }

    function thirdFunc() {
        $N = $_GET['numb'];
        $n = (int)$N/2;
        $k = 1;
        $arr = array_fill(0, $N, array_fill(0, $N, 0));
        
        
        
        echo json_encode($arr);
    }
