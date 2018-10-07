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

//        $result =  "Выбранное время года: ".$month[$_GET['month']];
        $result1 =  "Выбранное время года: " . 'Зима';
        $result2 =  "Выбранное время года: "."Зима";

        echo json_encode(array(
            'result1'   =>  $result1,
            'result2'   =>  $result2,
            'somenumb'  => 1,
            ), JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    }