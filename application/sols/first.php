<?php
    firstFunc();

    function firstFunc(){
        $month = array(
            1 => 'Зима',
            2 => 'Зима',
            3 => 'Весна',
            4 => 'Весна',
            5 => 'Весна',
            6 => 'Лето',
            7 => 'Лето',
            8 => 'Лето',
            9 => 'Осень',
            10 => 'Осень',
            11 => 'Осень',
            12 => 'Зима',
        );

        $result =  "Выбранное время года: ".$month[$_GET['month']];

        echo json_encode(array(
            'result'   =>  $result,
            'somenumb'  => 1,
            ), JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    }