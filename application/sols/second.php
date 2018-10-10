<?php
    if (!empty($_POST)){
        secondFunc();
    }

    function secondFunc(){
        $takts_num = $_POST['takts'];
        $red_num = $_POST['red'];

        $cache1 = $red_num;
        $cache2 = $red_num;
        $cache3 = $red_num;

        for ($i = 1; $i < $takts_num; $i++) {
            $cache3 = $cache1 + $cache2;

            $cache1 = $cache2;
            $cache2 = $cache3;
        }
        $result =  'За '. $takts_num .' тактов(-а) из '. $red_num .' было получено '. $cache3 .' бактерий(-ии)';

        echo json_encode( $result, JSON_UNESCAPED_UNICODE);
    }