<?php
    if (!empty($_POST)){
        secondFunc();
    }

    function secondFunc(){
        $takts_num = $_POST['tatks'];

        $cache1 = 1;
        $cache2 = 1;
        $cache3 = 0;

        for ($i = 2; $i <= $takts_num; $i++) {
            $cache3 = $cache1 + $cache2;

            $cache1 = $cache2;
            $cache2 = $cache3;
        }
        $result =  'За '. $takts_num .' тактов(-а) было получено '. $cache3 .'бактерий(-ии)';

        echo json_encode( $result, JSON_UNESCAPED_UNICODE);
    }