<?php
    if (!empty($_POST)){
        secondFunc();
    }

    function secondFunc(){
        $takts_num = $_POST['tatks'];
        $red_num = $_POST['red'];

        $cache1 = 1;
        $cache2 = 1;
        $cache3 = 0;

        for ($i = 2; $i <= $takts_num; $i++) {
            $cache3 = $cache1 + $cache2;

            $cache1 = $cache2;
            $cache2 = $cache3;
        }
        $result =  'За '. $takts_num .' тактов(-а) из '. $red_num .' было получено '. $cache3 * $red_num .' бактерий(-ии)';

        echo json_encode( $result, JSON_UNESCAPED_UNICODE);
    }